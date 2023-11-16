<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class TempatKulinerController extends BaseController
{
	public function index()
	{
		$data['judul'] = 'Tempat Kuliner';
		$data['url'] = 'tempat-kuliner';
		$data['key'] = 'id_tempat_kuliner';
		$data['model'] = $this->modelTempatKuliner
		// ->join('pangkat', 'pangkat.id_pangkat=pegawai.pang_gol_pegawai', 'left')
		// ->orderBy('no')
		->findAll();

		echo view('/tempat_kuliner/index', $data); 
	}

	public function tambah()
	{
		$id = 0;
		$data['id'] = $id;
		$data['judul'] = 'Tambah Tempat Kuliner';
		$data['url'] = 'tempat-kuliner/tambah';
		$data['key'] = 'id_tempat_kuliner';
		$data['model'] = $this->modelTempatKuliner
		// ->join('pangkat', 'pangkat.id_pangkat=pegawai.pang_gol_pegawai', 'left')
		// ->where('id_lokasi', $id)
		->find();

		$data['modelSubKriteria'] = $this->modelSubKriteria
		->findAll();

		$modelSubKriteria = [];
		foreach ($data['modelSubKriteria'] as $key => $value) {
			$modelSubKriteria[$value['id_kriteria']][] = $value;
		}

		$data['modelSubKriteria'] = $modelSubKriteria;

		echo view('tempat_kuliner/_form', $data);	
	}

	public function insertData()
	{

		$data = array(
            'nama' => $this->request->getPost('nama'),
            'rasa' => $this->request->getPost('rasa'),
            'harga' => $this->request->getPost('harga'),
            'pelayanan' => $this->request->getPost('pelayanan'),
            'lokasi' => $this->request->getPost('lokasi'),
            'waktu' => $this->request->getPost('waktu'),
            'kopi' => $this->request->getPost('kopi'),
            'masakan_tradisional' => $this->request->getPost('masakan_tradisional'),
            'masakan_jepang' => $this->request->getPost('masakan_jepang'),
            'aneka_mie' => $this->request->getPost('aneka_mie'),
            'aneka_nasi' => $this->request->getPost('aneka_nasi'),
            'jus' => $this->request->getPost('jus'),
            'milkshake' => $this->request->getPost('milkshake'),
            'teh' => $this->request->getPost('teh'),
            'masakan_padang' => $this->request->getPost('masakan_padang'),
            'bar' => $this->request->getPost('bar'),
            'bawa_pulang' => $this->request->getPost('bawa_pulang'),
            'kursi_roda' => $this->request->getPost('kursi_roda'),
            'kursi_tinggi' => $this->request->getPost('kursi_tinggi'),
            'musik_live' => $this->request->getPost('musik_live'),
            'parkir' => $this->request->getPost('parkir'),
            'pintu_kursi_roda' => $this->request->getPost('pintu_kursi_roda'),
            'ruang_vip' => $this->request->getPost('ruang_vip'),
            'tempat_duduk_diatap' => $this->request->getPost('tempat_duduk_diatap'),
            'tempat_duduk_terbuka' => $this->request->getPost('tempat_duduk_terbuka'),
            'tempat_nonton_bareng' => $this->request->getPost('tempat_nonton_bareng'),
            'toilet' => $this->request->getPost('toilet'),
            'toilet_kursi_roda' => $this->request->getPost('toilet_kursi_roda'),
            'wifi' => $this->request->getPost('wifi'),
            'lat' => $this->request->getPost('lat'),
            'lon' => $this->request->getPost('lon'),
        );
		
        
        $this->modelTempatKuliner->save($data);
		
        // print_r($data);
        // exit;
        // return redirect('kategori');
        return redirect()->to(base_url().'/tempat-kuliner');
	}

	public function ubah()
	{
    	$id = $this->req->uri->getSegment(3);

		$data['id'] = $id;
		$data['judul'] = 'Ubah Tempat Kuliner';
		$data['url'] = 'tempat-kuliner/ubah';
		$data['key'] = 'id_tempat_kuliner';
		$data['model'] = $this->modelTempatKuliner
		// ->join('pangkat', 'pangkat.id_pangkat=pegawai.pang_gol_pegawai', 'left')
		->where($data['key'], $id)
		->find()[0];

		$data['modelSubKriteria'] = $this->modelSubKriteria
		->findAll();

		$modelSubKriteria = [];
		foreach ($data['modelSubKriteria'] as $key => $value) {
			$modelSubKriteria[$value['id_kriteria']][] = $value;
		}

		$data['modelSubKriteria'] = $modelSubKriteria;

		// print_r($data['model']);exit;

		echo view('tempat_kuliner/_form', $data);	
	}

	public function updateData()
	{
		$data = array(
            'id_tempat_kuliner' => $this->request->getPost('id_tempat_kuliner'),
            'nama' => $this->request->getPost('nama'),
            'rasa' => $this->request->getPost('rasa'),
            'harga' => $this->request->getPost('harga'),
            'pelayanan' => $this->request->getPost('pelayanan'),
            'lokasi' => $this->request->getPost('lokasi'),
            'waktu' => $this->request->getPost('waktu'),
            'kopi' => $this->request->getPost('kopi'),
            'masakan_tradisional' => $this->request->getPost('masakan_tradisional'),
            'masakan_jepang' => $this->request->getPost('masakan_jepang'),
            'aneka_mie' => $this->request->getPost('aneka_mie'),
            'aneka_nasi' => $this->request->getPost('aneka_nasi'),
            'jus' => $this->request->getPost('jus'),
            'milkshake' => $this->request->getPost('milkshake'),
            'teh' => $this->request->getPost('teh'),
            'masakan_padang' => $this->request->getPost('masakan_padang'),
            'bar' => $this->request->getPost('bar'),
            'bawa_pulang' => $this->request->getPost('bawa_pulang'),
            'kursi_roda' => $this->request->getPost('kursi_roda'),
            'kursi_tinggi' => $this->request->getPost('kursi_tinggi'),
            'musik_live' => $this->request->getPost('musik_live'),
            'parkir' => $this->request->getPost('parkir'),
            'pintu_kursi_roda' => $this->request->getPost('pintu_kursi_roda'),
            'ruang_vip' => $this->request->getPost('ruang_vip'),
            'tempat_duduk_diatap' => $this->request->getPost('tempat_duduk_diatap'),
            'tempat_duduk_terbuka' => $this->request->getPost('tempat_duduk_terbuka'),
            'tempat_nonton_bareng' => $this->request->getPost('tempat_nonton_bareng'),
            'toilet' => $this->request->getPost('toilet'),
            'toilet_kursi_roda' => $this->request->getPost('toilet_kursi_roda'),
            'wifi' => $this->request->getPost('wifi'),
            'lat' => $this->request->getPost('lat'),
            'lon' => $this->request->getPost('lon'),
        );
		
        
        $this->modelTempatKuliner->save($data);
		
        // print_r($data);
        // exit;
        // return redirect('kategori');
        return redirect()->to(base_url().'/tempat-kuliner');
	}

	public function delete()
	{
    	$id = $this->req->uri->getSegment(3);
    	$this->modelTempatKuliner->delete($id);
        return redirect('tempat-kuliner');
    	
	}
}
