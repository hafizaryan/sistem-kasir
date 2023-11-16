<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class MenuController extends BaseController
{
	public function index()
	{
		$data['judul'] = 'Menu';
		$data['url'] = 'menu';
		$data['key'] = 'id_menu';
		$data['model'] = $this->modelMenu
		->join('tempat_kuliner', 'tempat_kuliner.id_tempat_kuliner=menu.id_tempat_kuliner', 'left')
		// ->orderBy('no')
		->findAll();

		echo view('/menu/index', $data); 
	}

	public function tambah()
	{
		// $data['pangkat'] = $this->modelPangkat->findAll();
		// $data['jabatan'] = $this->modelJabatan->findAll();
		$id = 0;
		$data['id'] = $id;
		$data['judul'] = 'Tambah Tempat Kuliner';
		$data['url'] = 'tempat-kuliner/tambah';
		$data['key'] = 'id_tempat_kuliner';
		$data['model'] = $this->modelTempatKuliner
		// ->join('pangkat', 'pangkat.id_pangkat=pegawai.pang_gol_pegawai', 'left')
		// ->where('id_lokasi', $id)
		->find();
		echo view('menu/_form', $data);	
	}

	public function insertData()
	{
		$data = array(
            'nama' => $this->request->getPost('nama'),
            'rasa' => $this->request->getPost('rasa'),
            'harga' => $this->request->getPost('harga'),
            'pelayanan' => $this->request->getPost('pelayanan'),
            'lokasi' => $this->request->getPost('lokasi'),
            'waktu' => $this->request->getPost('waktu'),
            'kopi' => $this->request->getPost('kopi'),
            'masakan_tradisional' => $this->request->getPost('masakan_tradisional'),
            'masakan_jepang' => $this->request->getPost('masakan_jepang'),
            'aneka_mie' => $this->request->getPost('aneka_mie'),
            'aneka_nasi' => $this->request->getPost('aneka_nasi'),
            'jus' => $this->request->getPost('jus'),
            'milkshake' => $this->request->getPost('milkshake'),
            'teh' => $this->request->getPost('teh'),
            'masakan_padang' => $this->request->getPost('masakan_padang'),
        );
		
        
        $this->modelTempatKuliner->save($data);
		
        // print_r($data);
        // return redirect('kategori');
        return redirect()->to(base_url().'/tempat-kuliner');
	}

	public function ubah()
	{
    	$id = $this->req->uri->getSegment(3);

		// $data['pegawai'] = $this->modelPegawai->find($id_pegawai);
		// $data['pengguna'] = $this->modelUser->where('username', $data['pegawai']['nip_pegawai'])->findAll();
		// $data['pangkat'] = $this->modelPangkat->findAll();
		// $data['jabatan'] = $this->modelJabatan->findAll();
		$data['judul'] = 'Edit Kategori'; 
		$data['url'] = 'kategori/ubah';
		$data['id'] = $id;
		$data['key'] = 'id_kategori';
		$data['model'] = $this->modelTempatKuliner
		// ->join('pangkat', 'pangkat.id_pangkat=pegawai.pang_gol_pegawai', 'left')
		->where('id_kategori', $id)
		->find()[0];

		// print_r($data['model']);exit;
		
		echo view('menu/_form', $data);	
	}

	public function updateData()
	{
		$kriteria = $this->request->getPost('kriteria');
		print_r($kriteria);

		$jumlah_bobot = 0;
		foreach ($kriteria as $key => $value) {
			$jumlah_bobot += $value;
		}
		// exit;

		foreach ($kriteria as $key => $value) {
			$data = array(
				'id_kriteria'=> $key,
	            'bobot'=> $value,
	            'hasil_bobot'=> ROUND($value/$jumlah_bobot, 2),
	        );
        	$this->modelKriteria->save($data);
		}
        
        // exit;

        return redirect()->to(base_url().'/kriteria');
	}

	public function delete()
	{
    	$id = $this->req->uri->getSegment(3);
    	$this->modelTempatKuliner->delete($id);
        return redirect('kategori');
    	
	}
}
