<?php

namespace App\Models;

use CodeIgniter\Model;

class SolusiModel extends Model
{
    protected $table = 'solusi';
    protected $primaryKey = 'id_solusi';

    protected $useAutoIncrement = true;

    protected $returnType = 'array';
    protected $usSoftDeletes = true;

    protected $allowedFields = ['kode_solusi', 'keterangan'];

    protected $useTimestamps = false;
    protected $createdField = 'created_at';
    protected $updatedFiled = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
    
}