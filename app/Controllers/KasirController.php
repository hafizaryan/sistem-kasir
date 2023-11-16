<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class KasirController extends BaseController
{
	public function index()
	{
		$data['judul'] = 'Kasir';
		$data['url'] = 'kasir';
		$data['key'] = 'id_kasir';
		$data['model'] = $this->modelKasir->findAll();

		echo view('/kasir/index', $data); 
	}

	public function tambah()
	{
		$id = 0;
		$data['id'] = $id;
		$data['judul'] = 'Tambah Kasir';
		$data['url'] = 'kasir/tambah';
		$data['key'] = 'id_kasir';
		$data['model'] = $this->modelKasir->find();

		echo view('kasir/tambah', $data);	
	}

	public function insertData()
	{

		$data = array(
            'nama_kasir' => $this->request->getPost('nama_kasir'),
        );
		
        
        $this->modelKasir->save($data);
		
        // print_r($data);
        // exit;
        // return redirect('kategori');
        return redirect()->to(base_url().'/kasir');
	}

	public function ubah()
	{
    	$id = $this->req->uri->getSegment(3);

		$data['id'] = $id;
		$data['judul'] = 'Ubah Kasir';
		$data['url'] = 'kasir/ubah';
		$data['key'] = 'id_kasir';
		$data['model'] = $this->modelKasir
		// ->join('pangkat', 'pangkat.id_pangkat=pegawai.pang_gol_pegawai', 'left')
		->where($data['key'], $id)
		->find()[0];


		// print_r($data['model']);exit;

		echo view('kasir/_form', $data);	
	}

	public function updateData()
	{
		$data = array(
            'id_kasir' => $this->request->getPost('id_kasir'),
            'nama_kasir' => $this->request->getPost('nama_kasir'),
        );
		
        
        $this->modelKasir->save($data);
		
        // print_r($data);
        // exit;
        // return redirect('kategori');
        return redirect()->to(base_url().'/kasir');
	}

	public function delete()
	{
    	$id = $this->req->uri->getSegment(3);
    	$this->modelKasir->delete($id);
        return redirect()->to(base_url().'/kasir');
    	
	}
}
