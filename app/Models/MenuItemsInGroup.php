<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuItemsInGroup extends Model
{
    protected $table            = 'menu_items_in_group';
    protected $primaryKey       = 'item_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields = ['menu_group_id', 'menu_id', 'additional_price', 'default_item'];

    public function menuGroup()
    {
        return $this->belongsTo('App\Models\MenuGroup', 'menu_group_id', 'menu_group_id');
    }

    // Relasi ke menu_master
    public function menuMaster()
    {
        return $this->belongsTo('App\Models\MenuMaster', 'menu_id', 'menu_id');
    }

    public function getItemsWithGroup()
    {
        return $this->select('menu_items_in_group.item_id, menu_group.menu_group_name, menu_master.menu_name')
            ->join('menu_group', 'menu_items_in_group.menu_group_id = menu_group.menu_group_id', 'left')
            ->join('menu_master', 'menu_items_in_group.menu_id = menu_master.menu_id', 'left')
            ->findAll();
    }

    public function getItemsByGroup($menu_group_id)
    {
        return $this->select('menu_items_in_group.item_id, menu_group.menu_group_name, menu_master.menu_name')
            ->join('menu_group', 'menu_items_in_group.menu_group_id = menu_group.menu_group_id', 'left')
            ->join('menu_master', 'menu_items_in_group.menu_id = menu_master.menu_id', 'left')
            ->where('menu_items_in_group.menu_group_id', $menu_group_id)
            ->findAll();
    }

    protected bool $allowEmptyInserts = false;

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
