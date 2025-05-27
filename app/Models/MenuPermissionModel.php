<?php

namespace App\Models;

use CodeIgniter\Model;
use Ulid\Ulid;

class MenuPermissionModel extends Model
{
    protected $table            = 'menu_permissions';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = false;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id',
        'role_id',
        'menu_id',
        'created_at',
        'updated_at',
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
    protected $beforeUpdate   = [
        'beforeSave'
    ];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    protected function beforeSave(array $data)
    {
        if (!isset($data['data']['id']) || empty($data['data']['id'])) {
            $data['data']['id'] = (string) Ulid::generate();
        }

        return $data;
    }
}
