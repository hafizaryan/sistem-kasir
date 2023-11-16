<?php
namespace App\Controllers;


use CodeIgniter\Controller;

class AlternatifController extends BaseController
{
	public function index()
	{
		$data['judul'] = 'Alternatif';
		$data['url'] = 'alternatif';
		$data['key'] = 'id_alternatif';
		$data['model'] = $this->modelAlternatif
		// ->join('pangkat', 'pangkat.id_pangkat=pegawai.pang_gol_pegawai', 'left')
		->orderBy('id_alternatif')
		->findAll();


		$data['modelKriteria'] = $this->modelKriteria
		->findAll();

		$a = [];
		foreach ($data['modelKriteria'] as $key => $value) {
			switch ($value['nama_kriteria']) {
				case 'Modal Awal':
					$a['modal_awal'] = $value['hasil_bobot'];
					break;
				case 'Pengeluaran Perbulan':
					$a['pengeluaran_perbulan'] = $value['hasil_bobot'];
					break;
				case 'Penghasilan Perbulan':
					$a['penghasilan_perbulan'] = $value['hasil_bobot'];
					break;

				case 'Pesaing':
					$a['pesaing'] = $value['hasil_bobot'];
					break;
				
				default:
					$a['peminat'] = $value['hasil_bobot'];
					break;
			}
		}

		// print_r($a);exit;
		$data['kriteria'] = $a;

		echo view('/alternatif/index', $data); 
	}

	public function proses()
	{
		$data['judul'] = 'Tahapan Pengambilan Keputusan';
		$data['url'] = 'alternatif';
		$data['key'] = 'nis';
		$data['model'] = $this->modelAlternatif
		// ->join('pangkat', 'pangkat.id_pangkat=pegawai.pang_gol_pegawai', 'left')
		->orderBy('id_alternatif')
		->findAll();


		$data['modelKriteria'] = $this->modelKriteria
		->findAll();

		$a = [];
		foreach ($data['modelKriteria'] as $key => $value) {
			switch ($value['nama_kriteria']) {
				case 'Modal Awal':
					$a['modal_awal'] = $value['hasil_bobot'];
					break;
				case 'Pengeluaran Perbulan':
					$a['pengeluaran_perbulan'] = $value['hasil_bobot'];
					break;
				case 'Penghasilan Perbulan':
					$a['penghasilan_perbulan'] = $value['hasil_bobot'];
					break;

				case 'Pesaing':
					$a['pesaing'] = $value['hasil_bobot'];
					break;
				
				default:
					$a['peminat'] = $value['hasil_bobot'];
					break;
			}
		}

		// print_r($a);exit;
		$data['kriteria'] = $a;

		echo view('/alternatif/proses', $data); 
	}

	public function tambah()
	{
		$id = 0;

		$data['judul'] = 'Tambah Alternatif'; 
		$data['url'] = 'alternatif/ubah';
		$data['id'] = $id;
		$data['key'] = 'id_alternatif';
		$data['model'] = $this->modelAlternatif
		// ->join('pangkat', 'pangkat.id_pangkat=pegawai.pang_gol_pegawai', 'left')
		->where('id_alternatif', $id)
		->find()[0];

		// print_r($data['model']);exit;
		
		echo view('alternatif/_form', $data);
	}

	public function insertData()
	{

		$data = array(
			// 'id_alternatif'=> $this->request->getPost('id_alternatif'),            
            'nama_alternatif'=> $this->request->getPost('nama_alternatif'),
            'modal_awal'=> $this->request->getPost('modal_awal'),
            'pengeluaran_perbulan'=> $this->request->getPost('pengeluaran_perbulan'),
            'penghasilan_perbulan'=> $this->request->getPost('penghasilan_perbulan'),
            'pesaing'=> $this->request->getPost('pesaing'),
            'peminat'=> $this->request->getPost('peminat'),
        );
        
        $this->modelAlternatif->save($data);

        return redirect()->to(base_url().'/alternatif');
	}

	public function ubah()
	{
    	$id = $this->req->uri->getSegment(3);

		$data['judul'] = 'Edit Alternatif'; 
		$data['url'] = 'alternatif/ubah';
		$data['id'] = $id;
		$data['key'] = 'id_alternatif';
		$data['model'] = $this->modelAlternatif
		// ->join('pangkat', 'pangkat.id_pangkat=pegawai.pang_gol_pegawai', 'left')
		->where('id_alternatif', $id)
		->find()[0];

		// print_r($data['model']);exit;
		
		echo view('alternatif/_form', $data);	
	}

	public function updateData()
	{

		$data = array(
			'id_alternatif'=> $this->request->getPost('id_alternatif'),            
            'nama_alternatif'=> $this->request->getPost('nama_alternatif'),
            'modal_awal'=> $this->request->getPost('modal_awal'),
            'pengeluaran_perbulan'=> $this->request->getPost('pengeluaran_perbulan'),
            'penghasilan_perbulan'=> $this->request->getPost('penghasilan_perbulan'),
            'pesaing'=> $this->request->getPost('pesaing'),
            'peminat'=> $this->request->getPost('peminat'),
        );
        
        $this->modelAlternatif->save($data);

        return redirect()->to(base_url().'/alternatif');
	}

	public function delete()
	{
    	$id = $this->req->uri->getSegment(3);
    	$this->modelAlternatif->delete($id);
        return redirect('alternatif');
    	
	}
}
