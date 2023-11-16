<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'sku';

    protected $useAutoIncrement = false;

    protected $returnType = 'array';
    protected $usSoftDeletes = true;

    protected $allowedFields = ['sku','id_city', 'id_kategori', 'nama_produk', 'tipe', 'foto', 'id_satuan', 'harga'];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedFiled = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = true;
    
}