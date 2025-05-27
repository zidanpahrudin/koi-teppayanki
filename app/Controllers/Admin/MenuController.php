<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\MenuModel;

class MenuController extends BaseController
{
    public function index()
    {
        $header['title'] = 'Role';
        
        echo view('partials/header', $header);
        echo view('partials/top_menu');
        echo view('partials/side_menu');
        echo view('pages/menu/index');
        echo view('partials/footer');
    }
}
