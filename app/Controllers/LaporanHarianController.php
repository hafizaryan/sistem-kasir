<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class LaporanHarianController extends BaseController
{
	public function index()
	{
		$data['judul'] = 'LaporanHarian';
		$data['url'] = 'laporanharian';
		$data['key'] = 'id_barang';
		$data['model'] = $this->modelLaporanHarian->findAll();

		echo view('/laporanharian/index', $data); 
	}

	public function tambah()
	{
		$id = 0;
		$data['id'] = $id;
		$data['judul'] = 'Tambah LaporanHarian';
		$data['url'] = 'laporanharian/tambah';
		$data['key'] = 'id_barang';
		$data['model'] = $this->modelLaporanHarian->find();

		echo view('laporanharian/tambah', $data);	
	}

	public function insertData()
	{

		$data = array(
            'tanggal' => $this->request->getPost('tanggal'),
            'nama_barang' => $this->request->getPost('nama_barang'),
            'jumlah' => $this->request->getPost('jumlah'),
            'satuan' => $this->request->getPost('satuan'),
            'harga' => $this->request->getPost('harga'),
            'total' => $this->request->getPost('total'),
        );
		
        
        $this->modelLaporanHarian->save($data);
		
        // print_r($data);
        // exit;
        // return redirect('kategori');
        return redirect()->to(base_url().'/laporanharian');
	}

	public function ubah()
	{
    	$id = $this->req->uri->getSegment(3);

		$data['id'] = $id;
		$data['judul'] = 'Ubah LaporanHarian';
		$data['url'] = 'laporanharian/ubah';
		$data['key'] = 'id_barang';
		$data['model'] = $this->modelLaporanHarian
		// ->join('pangkat', 'pangkat.id_pangkat=pegawai.pang_gol_pegawai', 'left')
		->where($data['key'], $id)
		->find()[0];


		// print_r($data['model']);exit;

		echo view('laporanharian/_form', $data);	
	}

	public function updateData()
	{
		$data = array(
			'id_barang' => $this->request->getPost('id_barang'),
            'tanggal' => $this->request->getPost('tanggal'),
            'nama_barang' => $this->request->getPost('nama_barang'),
            'jumlah' => $this->request->getPost('jumlah'),
            'satuan' => $this->request->getPost('satuan'),
            'harga' => $this->request->getPost('harga'),
            'total' => $this->request->getPost('total'),
        );
		
        
        $this->modelLaporanHarian->save($data);
		
        // print_r($data);
        // exit;
        // return redirect('kategori');
        return redirect()->to(base_url().'/laporanharian');
	}

	public function delete()
	{
    	$id = $this->req->uri->getSegment(3);
    	$this->modelLaporanHarian->delete($id);
        return redirect()->to(base_url().'/laporanharian');
    	
	}
}
