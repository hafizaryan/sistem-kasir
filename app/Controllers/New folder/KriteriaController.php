<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class KriteriaController extends BaseController
{
	public function index()
	{
		$data['judul'] = 'Kriteria';
		$data['url'] = 'kriteria';
		$data['key'] = 'id_kriteria';
		$data['model'] = $this->modelSubKriteria
		->join('tbl_kriteria', 'tbl_kriteria.id_kriteria=tbl_subkriteria.id_kriteria', 'left')
		// ->orderBy('no')
		->findAll();

		echo view('/kriteria/index', $data); 
	}

	public function tambah()
	{
		// $data['pangkat'] = $this->modelPangkat->findAll();
		// $data['jabatan'] = $this->modelJabatan->findAll();
		$id = 0;
		$data['id'] = $id;
		$data['judul'] = 'Tambah Kategori';
		$data['url'] = 'kategori/tambah';
		$data['key'] = 'id_kategori';
		$data['model'] = $this->modelAlternatif
		// ->join('pangkat', 'pangkat.id_pangkat=pegawai.pang_gol_pegawai', 'left')
		->where('id_lokasi', $id)
		->find();
		echo view('kategori/_form', $data);	
	}

	public function insertData()
	{

		$dataLokasi = array(
            'nama_kategori' => $this->request->getPost('nama_kategori'),
        );
		
        
        $this->modelAlternatif->save($dataLokasi);
		
        // print_r($dataLokasi);
        // return redirect('kategori');
        return redirect()->to(base_url().'/kategori');
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
		$data['model'] = $this->modelAlternatif
		// ->join('pangkat', 'pangkat.id_pangkat=pegawai.pang_gol_pegawai', 'left')
		->where('id_kategori', $id)
		->find()[0];

		// print_r($data['model']);exit;
		
		echo view('kategori/_form', $data);	
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
    	$this->modelAlternatif->delete($id);
        return redirect('kategori');
    	
	}
}
