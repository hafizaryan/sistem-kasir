<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class TransaksiController extends BaseController
{
	public function index()
	{
		$data['judul'] = 'Transaksi';
		$data['url'] = 'transaksi';
		$data['key'] = 'id_transaksi';
		$data['model'] = $this->modelTransaksi
		// ->join('pangkat', 'pangkat.id_pangkat=pegawai.pang_gol_pegawai', 'left')
		// ->orderBy('no')
		->findAll();

		echo view('/transaksi/index', $data); 
	}

	public function tambah()
	{
		$id = 0;
		$data['id'] = $id;
		$data['judul'] = 'Tambah Transaksi';
		$data['url'] = 'transaksi/tambah';
		$data['key'] = 'id_transaksi';
		$data['model'] = $this->modelTransaksi
		// ->join('pangkat', 'pangkat.id_pangkat=pegawai.pang_gol_pegawai', 'left')
		// ->where('id_lokasi', $id)
		->find();


		echo view('transaksi/tambah', $data);	
	}

	public function insertData()
	{

		$data = array(
            'tanggal' => $this->request->getPost('tanggal'),
            'jumlah' => $this->request->getPost('jumlah'),
            'total' => $this->request->getPost('total'),
        );
		
        
        $this->modelTransaksi->save($data);
		$id_transaksi = $this->modelTransaksi->insertID();
		
        // print_r($data);
        // exit;
        // return redirect('kategori');
        return redirect()->to(base_url().'/transaksi/tambah_barang/'.$id_transaksi);
	}

	public function ubah()
	{
    	$id = $this->req->uri->getSegment(3);

		$data['id'] = $id;
		$data['judul'] = 'Ubah Transaksi';
		$data['url'] = 'transaksi/ubah';
		$data['key'] = 'id_transaksi';
		$data['model'] = $this->modelTransaksi
		->where($data['key'], $id)
		->find()[0];


		// print_r($data['model']);exit;

		echo view('transaksi/_form', $data);	
	}

	public function updateData()
	{
		$data = array(
            'id_transaksi' => $this->request->getPost('id_transaksi'),
            'tanggal' => $this->request->getPost('tanggal'),
            'jumlah' => $this->request->getPost('jumlah'),
            'total' => $this->request->getPost('total'),
        );
		
        
        $this->modelTransaksi->save($data);
		
        // print_r($data);
        // exit;
        // return redirect('kategori');
        return redirect()->to(base_url().'/transaksi');
	}

	public function delete()
	{
    	$id = $this->req->uri->getSegment(3);
    	$this->modelTransaksi->delete($id);
        return redirect()->to(base_url().'/transaksi');
    	
	}
	public function tambah_barang()
	{
    	$id = $this->req->uri->getSegment(3);

		$data['id'] = $id;
		$data['judul'] = 'Ubah Transaksi';
		$data['url'] = 'transaksi/tambah_barang';
		$data['key'] = 'id_transaksi';


		// print_r($data['model']);exit;

		echo view('transaksi/tambah_barang', $data);
	}

	public function detail()
	{
		$id = $this->req->uri->getSegment(3);
		$data['id'] = $id;
		$data['judul'] = 'TransaksiDetail';
		$data['url'] = 'transaksi';
		$data['key'] = 'id_transaksi';
		$data['model'] = $this->modelTransaksiDetail
		->where('id_transaksi', $id)
		->findAll();

		echo view('/transaksi/detail', $data); 
	}

	public function insert_tambah_barang()
	{
		$id_transaksi = $this->request->getPost('id_transaksi');
		$data = array(
            'id_transaksi' => $this->request->getPost('id_transaksi'),
            'nama_barang' => $this->request->getPost('nama_barang'),
            'harga' => $this->request->getPost('harga'),
			'jumlah' => $this->request->getPost('jumlah'),
        );
		
        print_r($data);
        $this->modelTransaksiDetail->save($data);
		
        return redirect()->to(base_url().'/transaksi/detail/'.$id_transaksi);
	}

	public function cetak()
	{
		$id = $this->req->uri->getSegment(3);
		$data['id'] = $id;
		$data['judul'] = 'TransaksiDetail';
		$data['url'] = 'transaksi';
		$data['key'] = 'id_transaksi';
		$data['model'] = $this->modelTransaksiDetail
		->where('id_transaksi', $id)
		->findAll();

		echo view('/transaksi/cetak', $data); 
	}
}