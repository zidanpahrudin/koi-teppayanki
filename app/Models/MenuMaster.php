<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuMaster extends Model
{
    protected $table            = 'menu_master';
    protected $primaryKey       = 'menu_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields = ['menu_code', 'menu_name', 'menu_short_name', 'price', 'description', 'flag_tax', 'flag_other_tax', 'flag_open_price', 'print_zero_value', 'theme_menu_on_pos', 'sales_account', 'cogs_account', 'discount_account'];

    public function menuExtras()
    {
        return $this->hasMany('App\Models\MenuExtras', 'menu_id', 'menu_id');
    }

    // Relasi dengan MenuMasterIcons
    public function menuMasterIcons()
    {
        return $this->hasMany('App\Models\MenuMasterIcons', 'menu_id', 'menu_id');
    }

    // Relasi dengan MenuMasterTags
    public function menuMasterTags()
    {
        return $this->hasMany('App\Models\MenuMasterTags', 'menu_id', 'menu_id');
    }

    // Relasi dengan RelatedMenuMaster
    public function relatedMenuMaster()
    {
        return $this->hasMany('App\Models\RelatedMenuMaster', 'menu_id', 'menu_id');
    }

    public function getMenuWithItems($menu_id)
    {
        return $this->select('menu_master.menu_id, menu_master.menu_name, menu_items_in_group.item_name')
            ->join('menu_items_in_group', 'menu_master.menu_id = menu_items_in_group.menu_id', 'left')
            ->where('menu_master.menu_id', $menu_id)
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
