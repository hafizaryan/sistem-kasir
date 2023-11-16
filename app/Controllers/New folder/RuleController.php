<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class RuleController extends BaseController
{
	public function index()
	{
		$data['judul'] = 'Rule';
		$data['url'] = 'rule';
		$data['key'] = 'id_rule';
		$data['model'] = $this->modelRule
		->join('jenis', 'jenis.id_jenis=rule.jenis', 'left')
		// ->orderBy('no')
		->findAll();

		echo view('/rule/index', $data); 
	}

	public function tambah()
	{
		$id = 0;
		$data['id'] = $id;
		$data['judul'] = 'Tambah Rule';
		$data['url'] = 'rule/tambah';
		$data['key'] = 'id_rule';
		$data['model'] = $this->modelRule
		// ->join('pangkat', 'pangkat.id_pangkat=pegawai.pang_gol_pegawai', 'left')
		// ->where('id_lokasi', $id)
		->find();

		$data['modelJenis'] = $this->modelJenis->findAll();

		echo view('rule/_form', $data);	
	}

	public function insertData()
	{

		$data = array(
            'kode_rule' => $this->request->getPost('kode_rule'),
            'rule' => $this->request->getPost('rule'),
            'jenis' => $this->request->getPost('jenis'),
        );
		
        
        $this->modelRule->save($data);
		
        // print_r($data);
        // exit;
        // return redirect('kategori');
        return redirect()->to(base_url().'/rule');
	}

	public function ubah()
	{
    	$id = $this->req->uri->getSegment(3);

		$data['id'] = $id;
		$data['judul'] = 'Ubah Rule';
		$data['url'] = 'rule/ubah';
		$data['key'] = 'id_rule';
		$data['model'] = $this->modelRule
		// ->join('pangkat', 'pangkat.id_pangkat=pegawai.pang_gol_pegawai', 'left')
		->where($data['key'], $id)
		->find()[0];

		$data['modelJenis'] = $this->modelJenis->findAll();

		// print_r($data['model']);exit;

		echo view('rule/_form', $data);	
	}

	public function updateData()
	{
		$data = array(
            'id_rule' => $this->request->getPost('id_rule'),
            'kode_rule' => $this->request->getPost('kode_rule'),
            'rule' => $this->request->getPost('rule'),
            'jenis' => $this->request->getPost('jenis'),
        );
		
        
        $this->modelRule->save($data);
		
        // print_r($data);
        // exit;
        // return redirect('kategori');
        return redirect()->to(base_url().'/rule');
	}

	public function delete()
	{
    	$id = $this->req->uri->getSegment(3);
    	$this->modelRule->delete($id);
        return redirect('rule');
    	
	}
}
