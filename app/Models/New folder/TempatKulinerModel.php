<?php

namespace App\Models;

use CodeIgniter\Model;

class TempatKulinerModel extends Model
{
    protected $table = 'tempat_kuliner';
    protected $primaryKey = 'id_tempat_kuliner';

    protected $useAutoIncrement = true;

    protected $returnType = 'array';
    protected $usSoftDeletes = true;

    protected $allowedFields = ['nama', 'harga', 'rasa', 'pelayanan', 'lokasi', 'waktu', 'kopi', 'masakan_tradisional', 'masakan_jepang', 'aneka_mie', 'aneka_nasi', 'jus', 'milkshake', 'teh', 'masakan_padang', 'bar', 'bawa_pulang', 'kursi_roda', 'kursi_tinggi', 'musik_live', 'parkir', 'pintu_kursi_roda', 'ruang_vip', 'tempat_duduk_diatap', 'tempat_duduk_terbuka', 'tempat_nonton_bareng', 'toilet', 'toilet_kursi_roda', 'wifi'];

    protected $useTimestamps = false;
    protected $createdField = 'created_at';
    protected $updatedFiled = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
    
}