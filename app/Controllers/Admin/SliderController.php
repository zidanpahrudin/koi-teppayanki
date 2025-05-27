<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\SliderModel;

class SliderController extends BaseController
{
    protected $sliderModel;

    public function __construct()
    {
        $this->sliderModel = new SliderModel();
    }

    public function index()
    {
        $header['title'] = 'Slider';
        echo view('partials/header', $header);
        echo view('partials/top_menu');
        echo view('partials/side_menu');
        echo view('pages/slider/index');
        echo view('partials/footer');
    }

    public function read()
    {
        $data = $this->sliderModel->where('is_active', 1)->findAll();
        $total = count($data);

        foreach ($data as $key => $slider) {
            $data[$key]['image_url'] = base_url($slider['image_url']);
        }

        return $this->response->setJSON([
            "draw" => intval($this->request->getGet('draw')),
            "recordsTotal" => $total,
            "recordsFiltered" => $total,
            "data" => $data
        ]);
    }

    public function create()
    {
        $validation = \Config\Services::validation();
        $image = $this->request->getFile('image_url');

        if ($image->isValid() && !$image->hasMoved()) {
            $allowedTypes = ['image/png', 'image/jpeg', 'image/jpg'];
            if (!in_array($image->getClientMimeType(), $allowedTypes)) {
                return $this->response->setJSON([
                    'success' => false,
                    'message' => 'File harus dalam format PNG, JPG, atau JPEG'
                ]);
            }

            $imageName = $image->getRandomName();
            $image->move('assets/dist/img/slider', $imageName);
            $imageUrl = 'assets/dist/img/slider/' . $imageName;
        } else {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Gagal mengupload gambar'
            ]);
        }

        if (!$this->validate([
            'title' => 'required',
        ])) {
            return $this->response->setJSON([
                'success' => false,
                'errors' => $validation->getErrors()
            ]);
        }

        $this->sliderModel->save([
            'title'     => $this->request->getPost('title'),
            'image_url' => $imageUrl,
            'is_active' => $this->request->getPost('is_active') ?? 1,
        ]);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Slider berhasil ditambahkan'
        ]);
    }

    public function readById($id)
    {
        $data = $this->sliderModel->find($id);

        if ($data) {
            return $this->response->setJSON([
                'success' => true,
                'data' => $data
            ]);
        }

        return $this->response->setJSON([
            'success' => false,
            'message' => 'Data tidak ditemukan'
        ]);
    }

    public function update($id)
    {
        $validation = \Config\Services::validation();

        if (!$this->validate([
            'title' => 'required',
        ])) {
            return $this->response->setJSON([
                'success' => false,
                'errors' => $validation->getErrors()
            ]);
        }

        $data = [
            'title'     => $this->request->getPost('title'),
            'is_active' => $this->request->getPost('is_active') ?? 1,
        ];

        // optional image upload
        $image = $this->request->getFile('image_url');
        if ($image && $image->isValid() && !$image->hasMoved()) {
            $imageName = $image->getRandomName();
            $image->move('assets/dist/img/slider', $imageName);
            $data['image_url'] = 'assets/dist/img/slider/' . $imageName;
        }

        $this->sliderModel->update($id, $data);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Slider berhasil diupdate'
        ]);
    }

    public function delete($id)
    {
        $this->sliderModel->update($id, [
            'is_active' => 0
        ]);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Slider berhasil dihapus'
        ]);
    }
}
