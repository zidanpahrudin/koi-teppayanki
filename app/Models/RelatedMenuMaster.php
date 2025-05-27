<?php

namespace App\Models;

use CodeIgniter\Model;

class RelatedMenuMaster extends Model
{
    protected $table            = 'related_menu_master';
    protected $primaryKey       = 'related_menu_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields = ['menu_id', 'related_menu_id'];

    public function menuMaster()
    {
        return $this->belongsTo('App\Models\MenuMaster', 'menu_id', 'menu_id');
    }

    // Relasi kedua dengan menu_master (related_menu_id)
    public function relatedMenuMaster()
    {
        return $this->belongsTo('App\Models\MenuMaster', 'related_menu_id', 'menu_id');
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
