<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\PromoBannerModel;

class PromoBannerController extends BaseController
{
    public function index()
    {
        $header['title'] = 'Promo Banner';

        echo view('partials/header', $header);
        echo view('partials/top_menu');
        echo view('partials/side_menu');
        echo view('pages/promo_banner/index');
        echo view('partials/footer');
    }

    public function read()
{
        $promoBannerModel = new PromoBannerModel();
        $data = $promoBannerModel->where('is_active', 1)->findAll();

        $total = count($data);
        $filterRecords = count($data); // You can adjust filtering if needed

        // Map the data to include the proper field names that match your table structure
        foreach ($data as $key => $banner) {
            $data[$key]['image_url'] = base_url(  $banner['image_url']); // Assuming 'image_url' stores the file name
        }

        return $this->response->setJSON([
            "draw" => intval($this->request->getGet('draw')),
            "recordsTotal" => $total,
            "recordsFiltered" => $filterRecords,
            "data" => $data
        ]);
    }


    public function create()
    {
        $promoBannerModel = new PromoBannerModel();
        $validation = \Config\Services::validation();

        // upload file image
        $image = $this->request->getFile('image_url');
        if ($image->isValid() && !$image->hasMoved()) {
            // Validate file extension and size
            $allowedTypes = ['image/png', 'image/jpeg', 'image/jpg'];
            if (!in_array($image->getClientMimeType(), $allowedTypes)) {
                return $this->response->setJSON([
                    'success' => false,
                    'message' => 'File harus dalam format PNG, JPG, atau JPEG'
                ]);
            }

            // Set the max size (in KB), adjust this to your needs
            // if ($image->getSize() > 5048) { // 5MB limit
            //     return $this->response->setJSON([
            //         'success' => false,
            //         'message' => 'Ukuran gambar terlalu besar, maksimal 5MB'
            //     ]);
            // }

            // Generate a random name and move the image to the desired folder
            $imageName = $image->getRandomName();
            $image->move('assets/dist/img/promo', $imageName);

            // Set image_url to the path of the uploaded file
            $imageUrl = 'assets/dist/img/promo/' . $imageName;
        } 
        else {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Gagal mengupload gambar'
            ]);
        }

        if (!$this->validate([
            'title' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul harus diisi'
                ]
            ],
            'display_position' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Posisi tampilan harus diisi'
                ]
            ],
            'orientation' => [
                'rules' => 'required|in_list[portrait,landscape,square]',
                'errors' => [
                    'required' => 'Orientasi harus diisi',
                    'in_list' => 'Orientasi tidak valid'
                ]
            ]
        ])) {
            return $this->response->setJSON([
                'success' => false,
                'errors' => $validation->getErrors()
            ]);
        }

        // Save the data including the image URL
        $promoBannerModel->save([
            'title'            => $this->request->getPost('title'),
            'orientation'      => $this->request->getPost('orientation'),
            'redirect_url'     => $this->request->getPost('redirect_url'),
            'display_position' => $this->request->getPost('display_position'),
            'sort_order'       => $this->request->getPost('sort_order') ?? 0,
            'is_active'        => $this->request->getPost('is_active') ?? 1,
            'notes'            => $this->request->getPost('notes'),
            'pic'              => '1',
            'image_url'        => $imageUrl  // Save the image URL
        ]);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Promo Banner berhasil ditambahkan'
        ]);
    }



    public function readById($id)
    {
        $promoBannerModel = new PromoBannerModel();
        $data = $promoBannerModel->find($id);

        if ($data) {
            return $this->response->setJSON([
                'success' => true,
                'data' => $data
            ]);
        } else {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Data tidak ditemukan'
            ]);
        }
    }


    public function update($id)
    {
        $promoBannerModel = new PromoBannerModel();
        $validation = \Config\Services::validation();

        $image = $this->request->getFile('image_url');
        if ($image->isValid() && !$image->hasMoved()) {
            // Validate file extension and size
            $allowedTypes = ['image/png', 'image/jpeg', 'image/jpg'];
            if (!in_array($image->getClientMimeType(), $allowedTypes)) {
                return $this->response->setJSON([
                    'success' => false,
                    'message' => 'File harus dalam format PNG, JPG, atau JPEG'
                ]);
            }

            // Generate a random name and move the image to the desired folder
            $imageName = $image->getRandomName();
            $image->move('assets/dist/img/promo', $imageName);

            // Set image_url to the path of the uploaded file
            $imageUrl = 'assets/dist/img/promo/' . $imageName;
        } 
        else {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Gagal mengupload gambar'
            ]);
        }

        if (!$this->validate([
            'title' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul harus diisi'
                ]
            ],
            'display_position' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Posisi tampilan harus diisi'
                ]
            ],
            'orientation' => [
                'rules' => 'required|in_list[portrait,landscape,square]',
                'errors' => [
                    'required' => 'Orientasi harus diisi',
                    'in_list' => 'Orientasi tidak valid'
                ]
            ]
        ])) {
            return $this->response->setJSON([
                'success' => false,
                'errors' => $validation->getErrors()
            ]);
        }

        $promoBannerModel->update($id, [
            'title'            => $this->request->getPost('title'),
            'image_url'        => $imageUrl,
            'orientation'      => $this->request->getPost('orientation'),
            'redirect_url'     => $this->request->getPost('redirect_url'),
            'display_position' => $this->request->getPost('display_position'),
            'sort_order'       => $this->request->getPost('sort_order') ?? 0,
            'is_active'        => $this->request->getPost('is_active') ?? 1,
            'notes'            => $this->request->getPost('notes'),
            'pic'              => '1',
        ]);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Promo Banner berhasil diupdate'
        ]);
    }


    public function delete($id)
    {
        $promoBannerModel = new PromoBannerModel();
        $promoBannerModel->update($id, [
            'is_active' => 0
        ]);
    
        return $this->response->setJSON([
            'success' => true,
            'message' => 'Promo Banner berhasil dihapus'
        ]);
    }
    
}
