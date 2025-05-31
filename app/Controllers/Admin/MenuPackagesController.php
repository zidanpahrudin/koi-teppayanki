<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\MenuPackages;
use App\Models\MenuMaster;
use App\Models\MenupackageItems;
use App\Models\MenuItemsInGroup;
use App\Models\MenuItemsModel;
use App\Models\MenuGroup;

class MenuPackagesController extends BaseController
{
    protected $menuPackagesModel;
    protected $menuMasterModel;
    protected $MenuPackageItems;
    protected $MenuItemsInGroup;
    protected $MenuItemsModel;
    protected $menuGroupModel;

    public function __construct()
    {
        $this->menuPackagesModel = new MenuPackages(); // Menggunakan model MenuPackages
        $this->menuMasterModel = new MenuMaster(); // Menggunakan model MenuMaster
        $this->MenuPackageItems = new MenupackageItems(); // Menggunakan model MenuPackageItems
        $this->MenuItemsInGroup = new MenuItemsInGroup(); // Menggunakan model MenuItemsInGroup
        $this->MenuItemsModel = new MenuItemsModel(); // Menggunakan model MenuItemsModel
        $this->menuGroupModel = new MenuGroup(); // Menggunakan model MenuGroup
    }

    public function index()
    {
        $header['title'] = 'Menu Packages';  // Judul halaman

        // ambil data group menu Main Course dan join dengan menu_items_in_group join dengan menu_master
        $data['main_course'] = $this->menuGroupModel->where('menu_group_name', 'Main Course')
            ->join('menu_items_in_group', 'menu_group.menu_group_id = menu_items_in_group.menu_group_id')
            ->join('menu_master', 'menu_items_in_group.menu_id = menu_master.menu_id')
            ->findAll();


        // Ambil semua data menu yang bukan Main Course
        $data['menus'] = $this->menuGroupModel
            ->where('menu_group_name !=', 'Main Course') // atau bisa juga: ->where('menu_group_name <>', 'Main Course')
            ->join('menu_items_in_group', 'menu_group.menu_group_id = menu_items_in_group.menu_group_id')
            ->join('menu_master', 'menu_items_in_group.menu_id = menu_master.menu_id')
            ->findAll();

        // Ambil semua menu package
        $data['menu_packages'] = $this->menuPackagesModel->findAll();
        echo view('partials/header', $header);
        echo view('partials/top_menu');
        echo view('partials/side_menu');
        echo view('pages/menu_packages/index', $data); // Tampilkan view untuk daftar menu packages
        echo view('partials/footer');
    }

    public function read()
    {
        $data = $this->menuPackagesModel->findAll(); // Ambil semua data menu packages

        $total = count($data);  // Total data menu packages
        $filterRecords = count($data); // Filtered records

        return $this->response->setJSON([
            "draw" => intval($this->request->getGet('draw')),
            "recordsTotal" => $total,
            "recordsFiltered" => $filterRecords,
            "data" => $data
        ]);
    }

    public function create()
    {
        return view('pages/menu_packages/create'); // Tampilkan form untuk tambah menu package baru
    }

    public function store()
    {
        // Validasi input data
        $validation = \Config\Services::validation();
        if (!$this->validate([
            'menu_id' => [
                'rules' => 'required|is_natural_no_zero',
                'errors' => [
                    'required' => 'Menu ID is required',
                    'is_natural_no_zero' => 'Menu ID must be a positive integer',
                ]
            ],
            'package_name' => [
                'rules' => 'required|string|max_length[255]',
                'errors' => [
                    'required' => 'Package name is required',
                    'string' => 'Package name must be a string',
                    'max_length' => 'Package name cannot exceed 255 characters',
                ]
            ],
            'min_qty' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => 'Minimum quantity is required',
                    'decimal' => 'Minimum quantity must be a decimal number',
                ]
            ],
            'max_qty' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => 'Maximum quantity is required',
                    'decimal' => 'Maximum quantity must be a decimal number',
                ]
                ],
                'price' => [
                    'rules' => 'permit_empty|decimal',
                    'errors' => [
                        'decimal' => 'Price must be a decimal number',
                    ]
                ],
        ])) {
            return $this->response->setJSON([
                'success' => false,
                'errors' => $validation->getErrors()
            ]);
        }

        // tambahkan menu_image ke dalam data yang akan disimpan ini file image
        $image = $this->request->getFile('menu_image');
        if ($image->isValid() && !$image->hasMoved()) {
            // Generate a unique name for the image
            $newName = $image->getRandomName();
            // Move the file to the desired location
            $image->move('assets/uploads/menu/', $newName);
            // Set the image path to be saved in the database
            $imagePath = base_url('assets/uploads/menu/' . $newName);
        }
        // Cek apakah menu_id valid


        // Simpan data menu package baru
        $this->menuPackagesModel->save([
            'menu_id' => $this->request->getPost('menu_id'),
            'package_name' => $this->request->getPost('package_name'),
            'min_qty' => $this->request->getPost('min_qty'),
            'menu_image' => isset($imagePath) ? $imagePath : null, // Simpan path gambar jika ada
            'max_qty' => $this->request->getPost('max_qty'),
            'notes' => $this->request->getPost('notes'),
            'price' => $this->request->getPost('price') ? $this->request->getPost('price') : 0,
            'flag_separate_print_package' => $this->request->getPost('flag_separate_print_package') ? true : false,
            'flag_separate_tax_calculation' => $this->request->getPost('flag_separate_tax_calculation') ? true : false,
        ]);

        $package_id = $this->menuPackagesModel->insertID();

        // Ambil ID items yang dipilih
        $item_ids = $this->request->getPost('item_ids');
        // push package_id ke array item_ids
        if (!empty($item_ids)) {
            $data = [];
            foreach ($item_ids as $item_id) {
                $data[] = [
                    'package_id' => $package_id,
                    'item_id' => $item_id
                ];
            }

            // Bulk insert ke menu_package_items
            $this->MenuPackageItems->insertBatch($data);
        }

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Menu package and items successfully added.'
        ]);
    }


    public function readById($id)
    {
        $package = $this->menuPackagesModel->find($id); // Ambil data menu package berdasarkan ID

        // relasi ke menu_package_items by package_id and join with menu_master
        $package_details = $this->MenuPackageItems
            ->where('menu_package_items.package_id', $id)
            ->join('menu_items_in_group', 'menu_items_in_group.item_id = menu_package_items.item_id')
            ->join('menu_master', 'menu_master.menu_id = menu_items_in_group.menu_id')
            ->findAll();
        // Ambil data berdasarkan ID menu package
        if ($package) {
            return $this->response->setJSON([
                'success' => true,
                'data' => [
                    'package' => $package,
                    'items' => $package_details
                ],
            ]);
        } else {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Menu package tidak ditemukan'
            ]);
        }
    }

    public function update($id)
    {
        // Validasi input data
        $validation = \Config\Services::validation();
        if (!$this->validate([
            'package_name' => [
                'rules' => 'required|string|max_length[255]',
                'errors' => [
                    'required' => 'Package name is required',
                    'string' => 'Package name must be a string',
                    'max_length' => 'Package name cannot exceed 255 characters',
                ]
            ],
            'min_qty' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => 'Minimum quantity is required',
                    'decimal' => 'Minimum quantity must be a decimal number',
                ]
            ],
            'max_qty' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => 'Maximum quantity is required',
                    'decimal' => 'Maximum quantity must be a decimal number',
                ]
                ],
            'price' => [
                'rules' => 'permit_empty|decimal',
                'errors' => [
                    'decimal' => 'Price must be a decimal number',
                ]
            ],
        ])) {
            return $this->response->setJSON([
                'success' => false,
                'errors' => $validation->getErrors()
            ]);
        }

        $image = $this->request->getFile('menu_image');
        if ($image->isValid() && !$image->hasMoved()) {
            // Generate a unique name for the image
            $newName = $image->getRandomName();
            // Move the file to the desired location
            $image->move('assets/uploads/menu/', $newName);
            // Set the image path to be saved in the database
            $imagePath = base_url('assets/uploads/menu/' . $newName);
        } else {
            // If no new image is uploaded, keep the old image path
            $menu = $this->menuPackagesModel->find($id);
            $imagePath = $menu['menu_image']; // Keep the existing image path
        }

        // Update data menu package berdasarkan ID
        $this->menuPackagesModel->update($id, [
            'package_name' => $this->request->getPost('package_name'),
            'min_qty' => $this->request->getPost('min_qty'),
            'max_qty' => $this->request->getPost('max_qty'),
            'notes' => $this->request->getPost('notes'),
            'price' => $this->request->getPost('price') ? $this->request->getPost('price') : 0,
            'menu_image' => isset($imagePath) ? $imagePath : null, // Simpan path gambar jika ada
            'flag_separate_print_package' => $this->request->getPost('flag_separate_print_package') ? true : false,
            'flag_separate_tax_calculation' => $this->request->getPost('flag_separate_tax_calculation') ? true : false,
        ]);

        // delete all items in menu_package_items where package_id = $id
        $this->MenuPackageItems->where('package_id', $id)->delete();

        // Ambil ID items yang dipilih
        $item_ids = $this->request->getPost('item_ids');
        // push package_id ke array item_ids
        if (!empty($item_ids)) {
            $data = [];
            foreach ($item_ids as $item_id) {
                $data[] = [
                    'package_id' => $id,
                    'item_id' => $item_id
                ];
            }

            // Bulk insert ke menu_package_items
            $this->MenuPackageItems->insertBatch($data);
        }

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Menu package berhasil diupdate'
        ]);
    }

    public function delete($id)
    {
        // Hapus data menu package berdasarkan ID
        $this->menuPackagesModel->delete($id);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Menu package berhasil dihapus'
        ]);
    }
}
