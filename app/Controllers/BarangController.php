<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class BarangController extends BaseController
{
	public function index()
	{
		$data['judul'] = 'Barang';
		$data['url'] = 'barang';
		$data['key'] = 'id_barang';
		$data['model'] = $this->modelBarang
		->findAll();

		echo view('/barang/index', $data); 
	}

	public function tambah()
	{
		$id = 0;
		$data['id'] = $id;
		$data['judul'] = 'Tambah Barang';
		$data['url'] = 'barang/tambah';
		$data['key'] = 'id_barang';
		$data['model'] = $this->modelBarang
		->find();


		echo view('barang/tambah', $data);	
	}

	public function insertData()
	{
		$file = $this->request->getFile('gambar');
		$fileName = time() . $file->getClientName();
		if ($file->isValid() && !$file->hasMoved()){
			$file->move(ROOTPATH . 'public/uploads/', $fileName);
			session()->setFlashData('message', 'Berhasil Upload');
		} else {
			session()->setFlashData('message', 'Gagal Upload');
		}

		$data = array(
            'nama_barang' => $this->request->getPost('nama_barang'),
            'barcode' => $this->request->getPost('barcode'),
            'harga' => $this->request->getPost('harga'),
			'gambar' => $fileName,
        );
		
        
        $this->modelBarang->save($data);
        return redirect()->to(base_url().'/barang');
	}

	public function ubah()
	{
    	$id = $this->req->uri->getSegment(3);

		$data['id'] = $id;
		$data['judul'] = 'Ubah Barang';
		$data['url'] = 'barang/ubah';
		$data['key'] = 'id_barang';
		$data['model'] = $this->modelBarang
		->where($data['key'], $id)
		->find()[0];

		echo view('barang/_form', $data);	
	}
	
	public function updateData()
	{
		$file = $this->request->getFile('gambar');
		$fileName = time() . $file->getClientName();
		if ($file->isValid() && !$file->hasMoved()){
			$file->move(ROOTPATH . 'public/uploads/', $fileName);
			session()->setFlashData('message', 'Berhasil Upload');
		} else {
			session()->setFlashData('message', 'Gagal Upload');
		}
		
		$data = array(
            'id_barang' => $this->request->getPost('id_barang'),
            'nama_barang' => $this->request->getPost('nama_barang'),
            'barcode' => $this->request->getPost('barcode'),
            'harga' => $this->request->getPost('harga'),
            'gambar' => $fileName,

        );
		
        
        $this->modelBarang->save($data);
        return redirect()->to(base_url().'/barang');
	}

	public function delete()
	{
    	$id = $this->req->uri->getSegment(3);
    	$this->modelBarang->delete($id);
        return redirect()->to(base_url().'/barang');
    	
	}
}

