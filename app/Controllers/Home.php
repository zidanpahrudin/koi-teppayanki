<?php

namespace App\Controllers;

use App\Models\WilayahModel;
use App\Models\MenuMaster;
use App\Models\MenuPackages;
use App\Models\MenuExtras;
use App\Models\MenuMasterIcons;
use App\Models\MenuMasterTags;
use App\Models\RelatedMenuMaster;
use App\Models\Orders;
use App\Models\Customer;
use App\Models\PromoBannerModel;
use App\Models\SliderModel;
use App\Models\MenupackageItems;
class Home extends BaseController
{
    protected $menuMasterModel;
    protected $menuPackagesModel;
    protected $menuExtrasModel;
    protected $menuMasterIconsModel;
    protected $menuMasterTagsModel;
    protected $relatedMenuMasterModel;
    protected $ordersModel;
    protected $customerModel;
    protected $promoBannerModel;
    protected $sliderModel;
    protected $MenuPackageItems;


    public function __construct()
    {
        $this->menuMasterModel = new MenuMaster();
        $this->menuPackagesModel = new MenuPackages();
        $this->menuExtrasModel = new MenuExtras();
        $this->menuMasterIconsModel = new MenuMasterIcons();
        $this->menuMasterTagsModel = new MenuMasterTags();
        $this->relatedMenuMasterModel = new RelatedMenuMaster();
        $this->ordersModel = new Orders();
        $this->customerModel = new Customer();
        $this->sliderModel = new SliderModel();
        $this->promoBannerModel = new PromoBannerModel();
        $this->MenuPackageItems = new MenupackageItems();
    }

    public function index(): string
    {
        // get session header
        $session = session();
        $order_header = $session->get('order_header');
        // get wilayah
        $wilayahModel = new WilayahModel();
        $provinsi = $wilayahModel->where('group', 'provinsi')->findAll();
        $promoBannerModel = new PromoBannerModel();
        $promoBanner = $promoBannerModel->where('is_active', 1)->findAll();
        $sliderModel = new SliderModel();
        $slider = $sliderModel->where('is_active', 1)->findAll();

        return view('pages/home/index', [
            'provinsi' => $provinsi,
            'promo_banner' => $promoBanner,
            'slider' => $slider,
            '$order_header' => $order_header,
        ]);
    }

    public function menu_list()
    {
        $session = session();
        $cart = $session->get('cart');
        // dd($cart);
        $menuPackages = $this->menuPackagesModel
            ->join('menu_master', 'menu_packages.menu_id = menu_master.menu_id')
            ->findAll();

        return view('pages/home/menu_list', [
            'menu_list' => $menuPackages,
        ]);
    }

    public function getDetailPackage($package_id)
    {
        $package = $this->menuPackagesModel->find($package_id); // Ambil data menu package berdasarkan ID

        // relasi ke menu_package_items by package_id and join with menu_master
        // join with menu_group_id
        $package_details = $this->MenuPackageItems
            ->where('menu_package_items.package_id', $package_id)
            ->join('menu_items_in_group', 'menu_items_in_group.item_id = menu_package_items.item_id')
            ->join('menu_group', 'menu_items_in_group.menu_group_id = menu_group.menu_group_id')
            ->join('menu_master', 'menu_master.menu_id = menu_items_in_group.menu_id')
            ->findAll();


        $grouped = [];

        foreach ($package_details as $item) {
            $group_id = $item['menu_group_id'];

            if (!isset($grouped[$group_id])) {
                $grouped[$group_id] = [
                    'menu_group_name' => $item['menu_group_name'],
                    'package_id' => $item['package_id'],
                    'items' => []
                ];
            }

            $grouped[$group_id]['items'][] = $item;
        }

        $grouped_items = array_values($grouped);
       
            // Ambil data berdasarkan ID menu package
        if ($package) {
            return $this->response->setJSON([
                'success' => true,
                'data' => [
                    'package' => $package,
                    'items' => $grouped_items
                ],
            ]);
        } else {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Menu package tidak ditemukan'
            ]);
        }
    }




    public function confirmation_order()
    {
        $session = session();
        $orderModel = $this->ordersModel;
        $customerModel = $this->customerModel;
        // if post and get
        if ($this->request->getMethod() == 'post') {
            // Retrieve form data
            $data = [
                'order_no' => uniqid(), // You can generate the order number however you'd like
                'full_name' => $this->request->getPost('full_name'),
                'phone_no' => $this->request->getPost('phone_no'),
                'order_date' => $this->request->getPost('order_date'),
                'city' => $this->request->getPost('city'),
                'address' => $this->request->getPost('address'),
                'event_type' => $this->request->getPost('event_type'),
                'know_from' => $this->request->getPost('know_from'),
                'remarks' => $this->request->getPost('remarks'),
                'order_status' => 'pending', // Set initial status to 'pending'
                'order_total' => 0, // Set the order total based on the cart or other data
            ];

            // insert customer data check if phone_no is exist if not exist insert if not not insert
            $checkPhoneCustomer = $customerModel->find(['phone_no' => $data['phone_no']]);
            if (!$checkPhoneCustomer) {
                $customerModel->insert(
                    [
                        'full_name' => $data['full_name'],
                        'phone_no'  => $data['phone_no'],
                    ]
                );
            }

            // Insert order data into the database
            if ($orderModel->insert($data)) {
                // Redirect or respond as needed
                
                $order_no = $data['order_no'];
                $session->set('order_no', $order_no);
                return redirect()->to('/complete_order'); // Redirect to a success page
            } else {
                // Handle the error, show message, or log it
                return redirect()->back()->with('error', 'There was an error submitting the order.');
            }
        }

        return view('pages/home/confirmation_order');
    }



    public function getKota($id_provinsi)
    {
        $wilayahModel = new WilayahModel();
        $kota = $wilayahModel->where('group', 'kota')->where('parent_id', $id_provinsi)->findAll();
        return json_encode($kota);
    }


    public function getMenu($menuCode)
    {
        // Ambil data menu berdasarkan menu code
        $menu = $this->menuMasterModel->where('menu_code', $menuCode)->first();

        if (!$menu) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Menu not found'
            ]);
        }

        // Ambil data yang berhubungan dengan menu tersebut
        $menuPackages = $this->menuPackagesModel->where('menu_id', $menu['menu_id'])->findAll();
        $menuExtras = $this->menuExtrasModel->where('menu_id', $menu['menu_id'])->findAll();
        $menuIcons = $this->menuMasterIconsModel->where('menu_id', $menu['menu_id'])->findAll();
        $menuTags = $this->menuMasterTagsModel->where('menu_id', $menu['menu_id'])->findAll();
        $relatedMenus = $this->relatedMenuMasterModel->where('menu_id', $menu['menu_id'])->findAll();

        // Format data untuk response API
        $response = [
            'path' => current_url(),
            'timestamp' => date('Y-m-d H:i:s'),
            'code' => 'EC011200',
            'status' => 'ok',
            'result' => [
                'page' => 1,
                'limit' => 20,
                'count' => 1,
                'data' => [
                    [
                        'menuID' => $menu['menu_id'],
                        // 'categoryDetail' => $menu['menu_category'],
                        'bomID' => 0,
                        'bomName' => '',
                        'menuCode' => $menu['menu_code'],
                        'menuName' => $menu['menu_name'],
                        'menuShortName' => $menu['menu_short_name'],
                        'alternativeMenuName' => $menu['menu_name'],
                        'flagTax' => $menu['flag_tax'] ? 'Yes, Tax' : 'No',
                        'flagOtherTax' => $menu['flag_other_tax'] ? 'Yes' : 'No',
                        'zeroValueText' => '0',
                        'salesAccount' => 'Sales - Food',
                        'cogsAccount' => 'COGS - Food',
                        'discountAccount' => 'Food Discount',
                        'description' => $menu['description'],
                        'menuImage' => $menu['image_url'] ?? 'Upload Image',
                        'flagOpenPrice' => $menu['flag_open_price'] ? 'Yes' : 'No',
                        'printZeroValue' => $menu['print_zero_value'] ? 'Yes' : 'No',
                        'themeMenuOnPos' => $menu['theme_menu_on_pos'] ?? '',
                        'notes' => $menu['notes'] ?? '',
                        // 'menuTemplates' => [
                        //     [
                        //         'menuTemplateID' => 1,
                        //         'menuTemplateName' => 'SA INCLUSIVE',
                        //         'price' => $menu['price']
                        //     ]
                        // ],
                        'menuPackages' => $menuPackages,
                        'menuExtras' => $menuExtras,
                        'menuIcons' => $menuIcons,
                        'menuTags' => $menuTags,
                        'relatedMenus' => $relatedMenus
                    ]
                ]
            ],
            'next' => null,
            'prev' => null
        ];

        return $this->response->setJSON($response);
    }

    public function addToCart()
    {
        $session = session();
        $cart = $session->get('cart');
        if (!$cart) {
            $cart = [];
        }
        $package_id = $this->request->getPost('package_id');
        $qty = $this->request->getPost('qty');

        $menuPackages = $this->menuPackagesModel
            ->where('package_id', $package_id)
            ->first();

        

        $cart[] = [
            'package_id' => $package_id,
            'qty' => $qty,
            'price' => $menuPackages['price'],
            'menu_id' => $menuPackages['menu_id'],
            'menu_name' => $menuPackages['package_name'],
        ];



        $session->set('cart', $cart);
        return $this->response->setJSON([
            'status' => 'success',
            'message' => 'Item added to cart',
            'count' => count($cart),
            'total' => array_sum(array_column($cart, 'price')),
        ]);
    }

    public function getCart()
    {
        $session = session();
        $cart = $session->get('cart');

        if (!$cart || !is_array($cart)) {
            $cart = [];
        }

        if (empty($cart)) {
            return view('pages/home/cart', [
                'cart' => $cart,
                'packages' => []
            ]);
        }

        

        // Send to view
        return view('pages/home/cart', [
            'cart' => $cart,
        ]);
    }

    public function completeOrder()
    {
        $session = session();
        $orderModel = $this->ordersModel;


        $order_header = $session->get('order_header');
        $promoBannerModel = new PromoBannerModel();
        $promoBanner = $promoBannerModel->where('is_active', 1)->findAll();


        $cart = $session->get('cart');
        if (!$cart) {
            $cart = [];
        }

        $order_no = $session->get('order_no');
        // Clear cart
        $session->remove('cart');

        return view('pages/home/complete_order', [
            'order_no' => $order_no,
            'promo_banner' => $promoBanner,
            // 'order_date' => $order_date,
            // 'order_total' => $order_total,
            // 'order_items' => $order_items,
        ]);
    }

    public function saveOrderHeader()
    {
        $session = session();

        // Assume header data is sent via POST request
        $provinsi = $this->request->getPost('provinsi');
        $kota     = $this->request->getPost('kota');
        $tanggal  = $this->request->getPost('tanggal');
        $jam      = $this->request->getPost('jam');
        $no_telp  = $this->request->getPost('no_telp');

        // Store order header in session
        $orderHeader = [
            'provinsi' => $provinsi,
            'kota'     => $kota,
            'tanggal'  => $tanggal,
            'jam'      => $jam,
            'no_telp'  => $no_telp
        ];

        $session->set('order_header', $orderHeader);

        // Optional: return response for debugging / confirmation
        return $this->response->setJSON([
            'status' => 'success',
            'message' => 'Order header saved to session',
            'data' => $orderHeader
        ]);
    }
}
