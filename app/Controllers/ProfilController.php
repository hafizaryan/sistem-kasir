<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class ProfilController extends BaseController
{
	public function index()
	{
		$data['judul'] = 'Profil';
		echo view('/profil/index', $data); 
	}

	public function tentang()
	{
		$data['judul'] = 'Profil';
		$data['jurusan'] = 'Sistem Informasi';
		$data['nama'] = 'Nasya Amirah';
		echo view('/profil/tentang', $data); 

	}

}
