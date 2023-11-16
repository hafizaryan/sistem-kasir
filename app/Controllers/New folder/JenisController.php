<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class JenisController extends BaseController
{
	public function index()
	{
		$data['judul'] = 'Jenis';
		$data['url'] = 'jenis';
		$data['key'] = 'id_jenis';
		$data['model'] = $this->modelJenis
		// ->join('pangkat', 'pangkat.id_pangkat=pegawai.pang_gol_pegawai', 'left')
		// ->orderBy('no')
		->findAll();

		echo view('/jenis/index', $data); 
	}

	public function tambah()
	{
		$id = 0;
		$data['id'] = $id;
		$data['judul'] = 'Tambah Jenis';
		$data['url'] = 'jenis/tambah';
		$data['key'] = 'id_jenis';
		$data['model'] = $this->modelJenis
		// ->join('pangkat', 'pangkat.id_pangkat=pegawai.pang_gol_pegawai', 'left')
		// ->where('id_lokasi', $id)
		->find();

		echo view('jenis/_form', $data);	
	}

	public function insertData()
	{

		$data = array(
            'kode_jenis' => $this->request->getPost('kode_jenis'),
            'nama_jenis' => $this->request->getPost('nama_jenis'),
        );
		
        
        $this->modelJenis->save($data);
		
        // print_r($data);
        // exit;
        // return redirect('kategori');
        return redirect()->to(base_url().'/jenis');
	}

	public function ubah()
	{
    	$id = $this->req->uri->getSegment(3);

		$data['id'] = $id;
		$data['judul'] = 'Ubah Jenis';
		$data['url'] = 'jenis/ubah';
		$data['key'] = 'id_jenis';
		$data['model'] = $this->modelJenis
		// ->join('pangkat', 'pangkat.id_pangkat=pegawai.pang_gol_pegawai', 'left')
		->where($data['key'], $id)
		->find()[0];

		
		// print_r($data['model']);exit;

		echo view('jenis/_form', $data);	
	}

	public function updateData()
	{
		$data = array(
            'id_jenis' => $this->request->getPost('id_jenis'),
            'kode_jenis' => $this->request->getPost('kode_jenis'),
            'nama_jenis' => $this->request->getPost('nama_jenis'),
        );
		
        
        $this->modelJenis->save($data);
		
        // print_r($data);
        // exit;
        // return redirect('kategori');
        return redirect()->to(base_url().'/jenis');
	}

	public function delete()
	{
    	$id = $this->req->uri->getSegment(3);
    	$this->modelJenis->delete($id);
        return redirect('jenis');
    	
	}
}
