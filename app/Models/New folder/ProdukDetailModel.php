<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukDetailModel extends Model
{
    protected $table = 'produk_detail';
    protected $primaryKey = 'id_produk_detail';

    protected $useAutoIncrement = true;

    protected $returnType = 'array';
    protected $usSoftDeletes = true;

    protected $allowedFields = ['sku', 'id_satuan', 'harga', 'status'];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedFiled = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = true;
    
}