<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class SolusiController extends BaseController
{
	public function index()
	{
		$data['judul'] = 'Solusi';
		$data['url'] = 'solusi';
		$data['key'] = 'id_solusi';
		$data['model'] = $this->modelSolusi
		// ->join('pangkat', 'pangkat.id_pangkat=pegawai.pang_gol_pegawai', 'left')
		// ->orderBy('no')
		->findAll();

		echo view('/solusi/index', $data); 
	}

	public function tambah()
	{
		$id = 0;
		$data['id'] = $id;
		$data['judul'] = 'Tambah Solusi';
		$data['url'] = 'solusi/tambah';
		$data['key'] = 'id_solusi';
		$data['model'] = $this->modelSolusi
		// ->join('pangkat', 'pangkat.id_pangkat=pegawai.pang_gol_pegawai', 'left')
		// ->where('id_lokasi', $id)
		->find();

		echo view('solusi/_form', $data);	
	}

	public function insertData()
	{

		$data = array(
            'kode_solusi' => $this->request->getPost('kode_solusi'),
            'keterangan' => $this->request->getPost('keterangan'),
        );
		
        
        $this->modelSolusi->save($data);
		
        // print_r($data);
        // exit;
        // return redirect('kategori');
        return redirect()->to(base_url().'/solusi');
	}

	public function ubah()
	{
    	$id = $this->req->uri->getSegment(3);

		$data['id'] = $id;
		$data['judul'] = 'Ubah Solusi';
		$data['url'] = 'solusi/ubah';
		$data['key'] = 'id_solusi';
		$data['model'] = $this->modelSolusi
		// ->join('pangkat', 'pangkat.id_pangkat=pegawai.pang_gol_pegawai', 'left')
		->where($data['key'], $id)
		->find()[0];

		// print_r($data['model']);exit;

		echo view('solusi/_form', $data);	
	}

	public function updateData()
	{
		$data = array(
            'id_solusi' => $this->request->getPost('id_solusi'),
            'kode_solusi' => $this->request->getPost('kode_solusi'),
            'keterangan' => $this->request->getPost('keterangan'),
        );
		
        
        $this->modelSolusi->save($data);
		
        // print_r($data);
        // exit;
        // return redirect('kategori');
        return redirect()->to(base_url().'/solusi');
	}

	public function delete()
	{
    	$id = $this->req->uri->getSegment(3);
    	$this->modelSolusi->delete($id);
        return redirect('solusi');
    	
	}
}
