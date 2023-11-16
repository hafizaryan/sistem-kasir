<?php

namespace App\Models;

use CodeIgniter\Model;

class AlternatifModel extends Model
{
    protected $table = 'tbl_alternatif';
    protected $primaryKey = 'id_alternatif';

    protected $useAutoIncrement = false;

    protected $returnType = 'array';
    protected $usSoftDeletes = true;

    protected $allowedFields = ['kode_alternatif','nama_alternatif', 'modal_awal', 'pengeluaran_perbulan', 'penghasilan_perbulan', 'pesaing', 'peminat'];

    protected $useTimestamps = false;
    protected $createdField = 'created_at';
    protected $updatedFiled = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
    
}