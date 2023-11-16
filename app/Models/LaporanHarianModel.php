<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanHarianModel extends Model
{
    protected $table = 'laporanharian';
    protected $primaryKey = 'id_barang';

    protected $useAutoIncrement = true;

    protected $returnType = 'array';
    protected $usSoftDeletes = true;

    protected $allowedFields = ['tanggal', 'nama_barang','jumlah', 'satuan', 'harga', 'total'];

    protected $useTimestamps = false;
    protected $createdField = 'created_at';
    protected $updatedFiled = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
    
}