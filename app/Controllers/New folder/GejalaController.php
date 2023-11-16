<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class GejalaController extends BaseController
{
	public function index()
	{
		$data['judul'] = 'Gejala';
		$data['url'] = 'gejala';
		$data['key'] = 'id_gejala';
		$data['model'] = $this->modelGejala
		// ->join('pangkat', 'pangkat.id_pangkat=pegawai.pang_gol_pegawai', 'left')
		// ->orderBy('no')
		->findAll();

		echo view('/gejala/index', $data); 
	}

	public function tambah()
	{
		$id = 0;
		$data['id'] = $id;
		$data['judul'] = 'Tambah Gejala';
		$data['url'] = 'gejala/tambah';
		$data['key'] = 'id_gejala';
		$data['model'] = $this->modelGejala
		// ->join('pangkat', 'pangkat.id_pangkat=pegawai.pang_gol_pegawai', 'left')
		// ->where('id_lokasi', $id)
		->find();


		echo view('gejala/_form', $data);	
	}

	public function insertData()
	{

		$data = array(
            'kode_gejala' => $this->request->getPost('kode_gejala'),
            'nama_gejala' => $this->request->getPost('nama_gejala'),
        );
		
        
        $this->modelGejala->save($data);
		
        // print_r($data);
        // exit;
        // return redirect('kategori');
        return redirect()->to(base_url().'/gejala');
	}

	public function ubah()
	{
    	$id = $this->req->uri->getSegment(3);

		$data['id'] = $id;
		$data['judul'] = 'Ubah Gejala';
		$data['url'] = 'gejala/ubah';
		$data['key'] = 'id_gejala';
		$data['model'] = $this->modelGejala
		// ->join('pangkat', 'pangkat.id_pangkat=pegawai.pang_gol_pegawai', 'left')
		->where($data['key'], $id)
		->find()[0];


		// print_r($data['model']);exit;

		echo view('gejala/_form', $data);	
	}

	public function updateData()
	{
		$data = array(
            'id_gejala' => $this->request->getPost('id_gejala'),
            'kode_gejala' => $this->request->getPost('kode_gejala'),
            'nama_gejala' => $this->request->getPost('nama_gejala'),
        );
		
        
        $this->modelGejala->save($data);
		
        // print_r($data);
        // exit;
        // return redirect('kategori');
        return redirect()->to(base_url().'/gejala');
	}

	public function delete()
	{
    	$id = $this->req->uri->getSegment(3);
    	$this->modelGejala->delete($id);
        return redirect('gejala');
    	
	}
}
