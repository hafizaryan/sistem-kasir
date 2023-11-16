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

class PesertaController extends BaseController
{
	public function index()
	{
		$data['judul'] = 'Peserta';
		$data['url'] = 'peserta';
		$data['key'] = 'id_peserta';
		$data['model'] = $this->modelPeserta
		// ->join('pangkat', 'pangkat.id_pangkat=pegawai.pang_gol_pegawai', 'left')
		->orderBy('nama_peserta', 'ASC')
		->findAll();

		echo view('/peserta/index', $data); 
	}

	public function tambah()
	{
		$id = 0;
		$data['id'] = $id;
		$data['judul'] = 'Peserta';
		$data['url'] = 'peserta/tambah';
		$data['model'] = $this->modelPeserta->find($id);
		echo view('peserta/_form', $data);	
	}

	public function insertData()
	{
		$dataUser = [
			'username' => $this->request->getPost('username'),
			'nama_user' => $this->request->getPost('nama_peserta'),	
			'password' => '12345678',	
			'level_user' => 'peserta',	
			'status_user' => '1',						
		];
		
		$this->modelUser->save($dataUser);
		$id_user = $this->modelUser->insertID();

		$data = array(
            'id_user' => $id_user,
            'nama_peserta'=> $this->request->getPost('nama_peserta'),
            'jenis_kelamin'=> $this->request->getPost('jenis_kelamin'),
            'no_hp'=> $this->request->getPost('no_hp'),
            'instansi'=> $this->request->getPost('instansi'),
            'judul'=> $this->request->getPost('judul'),
            'keterangan'=> $this->request->getPost('keterangan'),
        );
        
        $this->modelPeserta->save($data);
		
        // return redirect()->to('/peserta');
        return redirect('peserta');
	}

	public function ubah()
	{
    	$id = $this->req->uri->getSegment(3);

		$data['id'] = $id;
		$data['judul'] = 'Peserta';
		$data['url'] = 'peserta/ubah';
		$data['model'] = $this->modelPeserta->find($id);
		$data['modelUser'] = $this->modelUser->find($data['model']['id_user']);
		echo view('peserta/_form', $data);		
	}

	public function updateData()
	{
		$dataUser = [
			'id_user' => $this->request->getPost('id_user'),
			'username' => $this->request->getPost('username'),			
		];
		
		$this->modelUser->save($dataUser);
		$id_user = $this->request->getPost('id_user');

		$data = array(
            'id_peserta' => $this->request->getPost('id'),
            'id_user' => $id_user,
            'nama_peserta'=> $this->request->getPost('nama_peserta'),
            'jenis_kelamin'=> $this->request->getPost('jenis_kelamin'),
            'no_hp'=> $this->request->getPost('no_hp'),
            'instansi'=> $this->request->getPost('instansi'),
            'judul'=> $this->request->getPost('judul'),
            'keterangan'=> $this->request->getPost('keterangan'),
        );
        
        $this->modelPeserta->save($data);
		
        // return redirect()->to('/peserta');
        return redirect('peserta');
	}

	public function delete()
	{
    	$id = $this->req->uri->getSegment(3);
    	$this->modelPeserta->delete($id);
        return redirect()->to(base_url().'/peserta');
    	
	}

	public function riwayat()
	{
		$data['judul'] = 'Peserta';
		$data['url'] = 'peserta/riwayat';
		$data['key'] = 'id_peserta';
		$data['model'] = $this->modelPeserta
		// ->join('pangkat', 'pangkat.id_pangkat=pegawai.pang_gol_pegawai', 'left')
		->orderBy('nama_peserta', 'ASC')
		->findAll();

		$model = [];
		foreach ($data['model'] as $key => $value) {
			$model2 = [];
			foreach ($value as $key2 => $value2) {
				$model2[$key2] = $value2;
			}

			$modelBooking = $this->modelBooking
	        ->join('peserta', 'peserta.id_user=booking.id_user', 'left')
	        ->join('user', 'user.id_user=booking.id_user', 'left')
	        ->where('peserta.id_peserta', $value['id_peserta'])
	        ->orderBy('tanggal', 'ASC')
			->findAll();
			$nominal = 0;
			// print_r($modelBooking);exit;
			foreach ($modelBooking as $key3 => $value3) {
				$nominal += $value3['nominal'];
			}
			$model2['pertemuan'] = count($modelBooking);
			$model2['nominal'] = $nominal;
			$model2['tanggal_mulai'] = $modelBooking[0]['tanggal'];
			$model2['platform'] = $modelBooking[0]['platform'];
			$model[] = $model2;
		}

		$data['model'] = $model;

		echo view('/peserta/riwayat', $data); 
	}

	public function riwayatDetail()
	{
    	$id = $this->req->uri->getSegment(3);
		$data['judul'] = 'Booking';
		$data['url'] = 'peserta/riwayat-detail';
		$data['key'] = 'id_peserta';
		$data['id'] = $id;
		$data['model'] = $this->modelBooking
        ->join('peserta', 'peserta.id_user=booking.id_user', 'left')
        ->join('user', 'user.id_user=booking.id_user', 'left')
        ->where('peserta.id_peserta', $id)
        ->orderBy('tanggal', 'ASC')
		->findAll();

		echo view('/peserta/riwayat_detail', $data); 
	}
}
