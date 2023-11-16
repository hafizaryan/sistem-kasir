<?php
namespace App\Controllers;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 *
 * @package CodeIgniter
 */

use CodeIgniter\Controller;

class SatuanController extends BaseController
{
	public function index()
	{
		$data['judul'] = 'Satuan';
		$data['url'] = 'satuan';
		$data['key'] = 'id_satuan';
		$data['model'] = $this->modelSatuan
		// ->join('pangkat', 'pangkat.id_pangkat=pegawai.pang_gol_pegawai', 'left')
		->findAll();

		echo view('/satuan/index', $data); 
	}

	public function tambah()
	{
		// $data['pangkat'] = $this->modelPangkat->findAll();
		// $data['jabatan'] = $this->modelJabatan->findAll();
		$id = 0;
		$data['id'] = $id;
		$data['judul'] = 'Tambah Satuan';
		$data['url'] = 'satuan/tambah';
		$data['key'] = 'id_satuan';
		$data['model'] = $this->modelSatuan
		// ->join('pangkat', 'pangkat.id_pangkat=pegawai.pang_gol_pegawai', 'left')
		->where($data['key'], $id)
		->find();
		echo view('satuan/_form', $data);	
	}

	public function insertData()
	{

		$data = array(
            'nama_satuan' => $this->request->getPost('nama_satuan'),
        );
		
        
        $this->modelSatuan->save($data);
		
        // print_r($dataLokasi);
        // return redirect('kategori');
        return redirect()->to(base_url().'/satuan');
	}

	public function ubah()
	{
    	$id = $this->req->uri->getSegment(3);

		// $data['pegawai'] = $this->modelPegawai->find($id_pegawai);
		// $data['pengguna'] = $this->modelUser->where('username', $data['pegawai']['nip_pegawai'])->findAll();
		// $data['pangkat'] = $this->modelPangkat->findAll();
		// $data['jabatan'] = $this->modelJabatan->findAll();
		$data['judul'] = 'Edit Satuan'; 
		$data['url'] = 'satuan/ubah';
		$data['id'] = $id;
		$data['key'] = 'id_satuan';
		$data['model'] = $this->modelSatuan
		// ->join('pangkat', 'pangkat.id_pangkat=pegawai.pang_gol_pegawai', 'left')
		->where($data['key'], $id)
		->find()[0];

		// print_r($data['model']);exit;
		
		echo view('satuan/_form', $data);	
	}

	public function updateData()
	{
		$data = array(
			'id_satuan'=> $this->request->getPost('id_satuan'),            
            'nama_satuan'=> $this->request->getPost('nama_satuan'),
        );
        
        $this->modelSatuan->save($data);

        return redirect()->to(base_url().'/satuan');
	}

	public function delete()
	{
    	$id = $this->req->uri->getSegment(3);
    	$this->modelSatuan->delete($id);
        return redirect('satuan');
    	
	}
}
