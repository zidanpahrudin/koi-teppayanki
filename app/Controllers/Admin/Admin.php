<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;

use App\Models\Customer;
use App\Models\Orders;

class Admin extends Controller
{

    protected $customerModel;
    protected $orderModel;

    public function __construct()
    {
        $this->customerModel = new Customer();
        $this->orderModel = new Orders();
    }

    public function index()
    {

        $header['title'] = 'Dashboard';

        // count customer
        $customerCount = $this->customerModel->countAll();
        $orderPending = $this->orderModel->where('order_status', 'pending')->countAllResults();
        $orderCompleted = $this->orderModel->where('order_status', 'completed')->countAllResults();

        $data = [
            'total_customer' => $customerCount,
            'total_order_pending' =>$orderPending,
            'total_order_completed' => $orderCompleted
        ];

        echo view('partials/header', $header);
        echo view('partials/top_menu');
        echo view('partials/side_menu');
        echo view('pages/dashboard', $data);
        echo view('partials/footer');

    }

    public function customers() {
        $header['title'] = 'Customers';

        $customers = $this->customerModel->findAll();
        $data = [
            'customers' => $customers
        ];

        echo view('partials/header', $header);
        echo view('partials/top_menu');
        echo view('partials/side_menu');
        echo view('pages/customer/index', $data);
        echo view('partials/footer');
    }
}
