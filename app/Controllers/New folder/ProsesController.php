<?php
namespace App\Controllers;


use CodeIgniter\Controller;

class ProsesController extends BaseController
{
	public function index()
	{
		$data['judul'] = 'Gejala';
		$data['url'] = 'proses';
		$data['key'] = 'id_gejala';
		$data['model'] = $this->modelGejala
		// ->orderBy('no')
		->findAll();

		echo view('/proses/index', $data); 
	}

	public function hasil()
	{
		// print_r($this->request->getPost('cek'));exit;
		$data['judul'] = 'Diagnosa';
		$data['url'] = 'proses';
		$data['key'] = 'id_kriteria';
		$data['modelRule'] = $this->modelRule
		->join('jenis', 'jenis.id_jenis=rule.jenis', 'left')
		->findAll();
		$data['modelSolusi'] = $this->modelSolusi->findAll();
		$data['modelGejala'] = $this->modelGejala->findAll();

		$modelGejala = [];
		foreach ($data['modelGejala'] as $key => $value) {
			$modelGejala[$value['kode_gejala']] = $value['nama_gejala'];
		}
		// print_r($modelGejala);exit;

		$data['modelGejala'] = $modelGejala;
		
		$data['modelInput'] = $this->request->getPost('cek');

		echo view('/proses/hasil', $data); 	
        // return redirect()->to(base_url().'/proses-user/hasil');
	}

	
	public function rute()
	{

    	$id = $this->req->uri->getSegment(3);

		$data['judul'] = 'Rute';
		$data['url'] = 'proses';
		$data['key'] = 'id_kriteria';
		$data['model'] = $this->modelTempatKuliner
		// ->join('pangkat', 'pangkat.id_pangkat=pegawai.pang_gol_pegawai', 'left')
		// ->orderBy('no')
		->findAll();

		$data['modelSubKriteria'] = $this->modelSubKriteria
		->findAll();

		$modelSubKriteria = [];
		foreach ($data['modelSubKriteria'] as $key => $value) {
			$modelSubKriteria[$value['id_kriteria']][] = $value;
		}

		$data['modelSubKriteria'] = $modelSubKriteria;

		$data['modelTempatKuliner'] = $this->modelTempatKuliner
		->where('id_tempat_kuliner', $id)
		->findAll();

		echo view('/proses/rute', $data); 	
        // return redirect()->to(base_url().'/proses-user/hasil');
	}


}
