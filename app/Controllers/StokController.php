<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class StokController extends BaseController
{
	public function index()
	{
		$data['judul'] = 'Stok';
		$data['url'] = 'stok';
		$data['key'] = 'id_stok';
		$data['model'] = $this->modelStok->findAll();

		echo view('/stok/index', $data); 
	}

	public function tambah()
	{
		$id = 0;
		$data['id'] = $id;
		$data['judul'] = 'Tambah Stok';
		$data['url'] = 'stok/tambah';
		$data['key'] = 'id_stok';
		$data['model'] = $this->modelStok
		// ->join('pangkat', 'pangkat.id_pangkat=pegawai.pang_gol_pegawai', 'left')
		// ->where('id_lokasi', $id)
		->find();


		echo view('stok/tambah', $data);	
	}

	public function insertData()
	{

		$data = array(
            'nama_barang' => $this->request->getPost('nama_barang'),
            'stok_awal' => $this->request->getPost('stok_awal'),
            'barang_masuk' => $this->request->getPost('barang_masuk'),
            'barang_keluar' => $this->request->getPost('barang_keluar'),
            'stok_akhir' => $this->request->getPost('stok_akhir'),
        );
		
        
        $this->modelStok->save($data);
		
        // print_r($data);
        // exit;
        // return redirect('kategori');
        return redirect()->to(base_url().'/stok');
	}

	public function ubah()
	{
    	$id = $this->req->uri->getSegment(3);

		$data['id'] = $id;
		$data['judul'] = 'Ubah Stok';
		$data['url'] = 'stok/ubah';
		$data['key'] = 'id_stok';
		$data['model'] = $this->modelStok
		// ->join('pangkat', 'pangkat.id_pangkat=pegawai.pang_gol_pegawai', 'left')
		->where($data['key'], $id)
		->find()[0];


		// print_r($data['model']);exit;

		echo view('stok/_form', $data);	
	}

	public function updateData()
	{
		$data = array(
            'id_stok' => $this->request->getPost('id_stok'),
            'nama_barang' => $this->request->getPost('nama_barang'),
            'stok_awal' => $this->request->getPost('stok_awal'),
            'barang_masuk' => $this->request->getPost('barang_masuk'),
            'barang_keluar' => $this->request->getPost('barang_keluar'),
            'stok_akhir' => $this->request->getPost('stok_akhir'),
        );
		
        
        $this->modelStok->save($data);
		
        // print_r($data);
        // exit;
        // return redirect('kategori');
        return redirect()->to(base_url().'/stok');
	}

	public function delete()
	{
    	$id = $this->req->uri->getSegment(3);
    	$this->modelStok->delete($id);
        return redirect()->to(base_url().'/stok');
    	
	}
}
