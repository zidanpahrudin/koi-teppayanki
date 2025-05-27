<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;
use Firebase\JWT\JWT;



class AuthController extends BaseController
{
    public function index()
    {
        $user = new UserModel();
        // input for login form
        $data = [
            'title' => 'Login',
            'validation' => \Config\Services::validation()
        ];

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'email' => 'required|valid_email',
                'password' => 'required|min_length[6]|max_length[255]',
            ];
        
            if (!$this->validate($rules)) {
                return redirect()->to('/auth/login')->withInput();
            }
        
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $userModel = new \App\Models\UserModel(); // Ensure UserModel is used
            // Fetch user details
            $user = $userModel->select('users.*, roles.name as role_name')
                ->join('roles', 'roles.id = users.role_id', 'left')
                ->where('users.email', $email)
                ->first();

            // Check if user exists
            if (!$user || !isset($user['password']) || !password_verify($password, $user['password'])) {
                session()->setFlashdata('error', 'Email or password is incorrect.');
                return redirect()->to('/login');
            }

            // Fetch menus separately as an array of objects
            $menuModel = new \App\Models\MenuModel(); // Ensure MenuModel is used
            $query = $menuModel
                ->select('menus.name as menu_name, menus.url as menu_url, menus.icon as menu_icon, menus.menu_group as menu_group')
                ->join('menu_permissions', 'menu_permissions.menu_id = menus.id', 'left')
                ->join('roles', 'roles.id = menu_permissions.role_id', 'left')
                ->where('roles.id', $user['role_id'])
                ->where('menus.is_active', 1)
                ->orderBy('menus.menu_group', 'asc')
                ->orderBy('menus.order', 'asc')
                ->get();

            // Convert menu data into an array of objects
            $user['menus'] = $query->getResultArray();
            if (!$user || !password_verify($password, $user['password'])) {
                session()->setFlashdata('error', 'Email or password is incorrect.');
                return redirect()->to('/login');
            }
        
            // Generate JWT Token
            $key = getenv('JWT_SECRET');
            $payload = [
                'iss' => base_url(), // Issuer
                'iat' => time(), // Issued at time
                'exp' => time() + 3600, // Expiry time (1 hour)
                'uid' => $user['id'],
                'email' => $user['email'],
                'name' => $user['name']
            ];
        
            $token = JWT::encode($payload, $key, 'HS256');
        
            // Store Token in Session
            session()->set('token', $token);
            session()->set('user', $payload);
            session()->set('user_menus', $query->getResultArray());
            
            $curl = curl_init();
            // store token esb url in env
            $esb_url = trim(getenv('Base_URL_ESB'));
            // set username and password
            $username_esb = trim(getenv('USERNAME_ESB'));
            $password_esb = trim(getenv('PASSWORD_ESB'));
            // fetch

            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://services.esb.co.id/core/auth/login',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS =>'{
                    "username": "' . $username_esb . '",
                    "password": "' . $password_esb . '"
                }',
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json'
                ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);
            // set in session result 
            $response = json_decode($response, true);
            if ($response['message'] == 'OK') {
                session()->set('esb_token', $response['result']);
            } else {
                session()->set('esb_token', null);
            }
            
            return redirect()->to('/dashboard');
        }
        return view('auth/login');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/auth/login');
    }
}
