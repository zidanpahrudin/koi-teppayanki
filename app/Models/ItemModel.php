<?php

namespace App\Models;

use CodeIgniter\Model;
use Ulid\Ulid;

class ItemModel extends Model
{
    protected $table            = 'item';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'item_name',
        'item_code',
        'unit_id',
        'created_at',
        'updated_at',
    ];

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
    protected $beforeInsert   = [
        'beforeSave',
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
        // coba ulidnya di pangkas jadi 6 karakter
        if (!isset($data['data']['item_code']) || empty($data['data']['item_code'])) {
            $data['data']['item_code'] = (string) Ulid::generate();
        }

        return $data;
    }
}
