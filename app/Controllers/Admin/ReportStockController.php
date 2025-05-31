<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ItemModel;
use App\Models\UnitModel;
use App\Models\MenuModel;
use App\Models\MenuItemsModel;
use App\Models\WilayahModel;


class ReportStockController extends BaseController
{
    protected $itemModel;
    protected $unitModel;
    protected $menuModel;
    protected $menuItemsModel;
    protected $wilayahModel;
    public function __construct()
    {
        $this->itemModel = new ItemModel();
        $this->unitModel = new UnitModel();
        $this->menuModel = new MenuModel();
        $this->menuItemsModel = new MenuItemsModel();
        $this->wilayahModel = new WilayahModel();
    }
    public function index()
    {
        // unit model
        $units = $this->unitModel->findAll();
        $data['units'] = $units;

        // wilayah model
        $wilayah = $this->wilayahModel->withParent()->findAll();
        $data['wilayah'] = $wilayah;

        $header['title'] = 'Report Stock';
        echo view('partials/header', $header);
        echo view('partials/top_menu');
        echo view('partials/side_menu');
        echo view('pages/report_stock/index', $data);
        echo view('partials/footer');
    }

    public function read()
    {

        $data = $this->itemModel->select('item.*, unit.*')
            ->join('unit', 'unit.id = item.unit_id')
            ->findAll();

        $total = count($data);  // Total data menu
        $filterRecords = count($data); // Filtered records

        return $this->response->setJSON([
            "draw" => intval($this->request->getGet('draw')),
            "recordsTotal" => $total,
            "recordsFiltered" => $filterRecords,
            "data" => $data
        ]);
    }
}
