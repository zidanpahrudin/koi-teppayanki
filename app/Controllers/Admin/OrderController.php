<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Orders;

class OrderController extends BaseController
{
    protected $orderModel;

    public function __construct()
    {
        $this->orderModel = new Orders();
    }

    public function index()
    {
        $header['title'] = 'Orders';

        echo view('partials/header', $header);
        echo view('partials/top_menu');
        echo view('partials/side_menu');
        echo view('pages/order/index'); // Pointing to the correct view for Orders
        echo view('partials/footer');
    }

    // Read all orders for DataTables
    public function read()
    {
        // getGetStatus
        $status = $this->request->getGet('status');
        if ($status) {
            $data = $this->orderModel->where('order_status', $status)->findAll();
        } else {
            $data = $this->orderModel->findAll(); // Fetch all orders
        }

        $total = count($data);
        $filterRecords = count($data);

        return $this->response->setJSON([
            "draw" => intval($this->request->getGet('draw')),
            "recordsTotal" => $total,
            "recordsFiltered" => $filterRecords,
            "data" => $data
        ]);
    }

    // Create a new order
    public function create()
    {
        $validation = \Config\Services::validation();
        if (!$this->validate([
            'order_no' => [
                'rules' => 'required|is_unique[orders.order_no]',
                'errors' => [
                    'required' => 'Order Number is required',
                    'is_unique' => 'This Order Number already exists'
                ]
            ],
            'customer_name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Customer Name is required'
                ]
            ],
            'order_total' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'Order Total is required',
                    'numeric' => 'Order Total must be a number'
                ]
            ]
        ])) {
            return $this->response->setJSON([
                'success' => false,
                'errors' => $validation->getErrors()
            ]);
        }

        $this->orderModel->save([
            'order_no' => $this->request->getPost('order_no'),
            'customer_name' => $this->request->getPost('customer_name'),
            'order_total' => $this->request->getPost('order_total'),
            'order_status' => $this->request->getPost('order_status'),
            'order_date' => $this->request->getPost('order_date')
        ]);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Order successfully added'
        ]);
    }

    // Read order details by ID
    public function readById($id)
    {
        $data = $this->orderModel->find($id);

        if ($data) {
            return $this->response->setJSON([
                'success' => true,
                'data' => $data
            ]);
        } else {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Order not found'
            ]);
        }
    }

    // Update order details
    public function update($id)
    {
        $validation = \Config\Services::validation();
        if (!$this->validate([
            'order_no' => [
                'rules' => 'required|is_unique[orders.order_no,id,' . $id . ']',
                'errors' => [
                    'required' => 'Order Number is required',
                    'is_unique' => 'This Order Number already exists'
                ]
            ],
            'customer_name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Customer Name is required'
                ]
            ],
            'order_total' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'Order Total is required',
                    'numeric' => 'Order Total must be a number'
                ]
            ]
        ])) {
            return $this->response->setJSON([
                'success' => false,
                'errors' => $validation->getErrors()
            ]);
        }

        $this->orderModel->update($id, [
            'order_no' => $this->request->getPost('order_no'),
            'customer_name' => $this->request->getPost('customer_name'),
            'order_total' => $this->request->getPost('order_total'),
            'order_status' => $this->request->getPost('order_status'),
            'order_date' => $this->request->getPost('order_date')
        ]);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Order successfully updated'
        ]);
    }

    // Delete an order
    public function delete($id)
    {
        $this->orderModel->delete($id);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Order successfully deleted'
        ]);
    }

    // Function to fetch and update the order status if needed
    public function updateStatus($id)
    {
        $order = $this->orderModel->find($id);

        if ($order) {
            $status = $this->request->getPost('status');
            $this->orderModel->update($id, ['order_status' => $status]);

            return $this->response->setJSON([
                'success' => true,
                'message' => 'Order status successfully updated'
            ]);
        }

        return $this->response->setJSON([
            'success' => false,
            'message' => 'Order not found'
        ]);
    }

    public function readByStatus($status) {
        $data = $this->orderModel->where('order_status', $status)->findAll();

        if ($data) {
            return $this->response->setJSON([
                'success' => true,
                 'data' => $data
             ]);
        }

        return $this->response->setJSON([
            'success' => false,
            'message' => 'No orders found'
        ]);
    }

    public function printOrder($id) {
         $header['title'] = 'Invoice';
        echo view('partials/header', $header);
        echo view('pages/order/invoice');
    }
    
}
