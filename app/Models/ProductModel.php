<?php

namespace App\Models;

use CodeIgniter\Model;
use Ulid\Ulid;

class ProductModel extends Model
{
    protected $table            = 'product';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id',
        'product_id',
        'product_name',
        'product_code',
        'category_id',
        'sub_category_id',
        'bom_id',
        'bom_name',
        'category_type_id',
        'category_name',
        'flag_active',
        'created_at',
        'updated_at'
    ];

    protected bool $allowEmptyInserts = false;

    // Dates
    protected $useTimestamps = true;
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
    protected $beforeInsert   = [
        'beforeSave'
    ];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    protected function beforeSave(array $data)
    {
        if (!isset($data['data']['product_code']) || empty($data['data']['product_code'])) {
            $data['data']['product_code'] = (string) Ulid::generate();
        }

        $data['data']['product_id'] = $data['data']['id'];

        return $data;
    }
}
