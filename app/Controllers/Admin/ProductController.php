<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ProductModel;

class ProductController extends BaseController
{
    public function index()
    {
        $header['title'] = 'Product';

        $curl = curl_init();
        // store token esb url in env
        $esb_url = trim(getenv('Base_URL_ESB'));

        $username_esb = trim(getenv('USERNAME_ESB'));
        $password_esb = trim(getenv('PASSWORD_ESB'));

        

        // get token from session
        $esb_token = session()->get('esb_token');
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://eso-api.esb.co.id/qsv1/menu/1?fetchPackagesExtras=true',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_HTTPHEADER => array(
                // base64 encode username and password
                'Authorization: Basic ' . base64_encode($username_esb . ':' . $password_esb),
                'Content-Type: application/json',
            ),
            // body
            // CURLOPT_POSTFIELDS => json_encode(array(
            //     'filterVisitPurposeID' => 1,
            //    'filterVisitPurposeName' => 'KHSBD',
                
            // )),
        ));

        $response = curl_exec($curl);
        $response = json_decode($response, true);
        echo json_encode($response); exit;

        curl_close($curl);

        echo view('partials/header', $header);
        echo view('partials/top_menu');
        echo view('partials/side_menu');
        echo view('pages/product/index');
        echo view('partials/footer');
    }
}
