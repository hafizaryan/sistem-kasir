<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class MemberController extends BaseController
{
	public function index()
	{
		$data['judul'] = 'Member';
		$data['url'] = 'member';
		$data['key'] = 'id_member';
		$data['model'] = $this->modelMember->findAll();

		echo view('/member/index', $data); 
	}

	public function tambah()
	{
		$id = 0;
		$data['id'] = $id;
		$data['judul'] = 'Tambah Member';
		$data['url'] = 'member/tambah';
		$data['key'] = 'id_member';
		$data['model'] = $this->modelMember->find();

		echo view('member/tambah', $data);	
	}

	public function insertData()
	{

		$data = array(
            'nama_member' => $this->request->getPost('nama_member'),
        );
		
        
        $this->modelMember->save($data);
		
        // print_r($data);
        // exit;
        // return redirect('kategori');
        return redirect()->to(base_url().'/member');
	}

	public function ubah()
	{
    	$id = $this->req->uri->getSegment(3);

		$data['id'] = $id;
		$data['judul'] = 'Ubah Member';
		$data['url'] = 'member/ubah';
		$data['key'] = 'id_member';
		$data['model'] = $this->modelMember
		// ->join('pangkat', 'pangkat.id_pangkat=pegawai.pang_gol_pegawai', 'left')
		->where($data['key'], $id)
		->find()[0];


		// print_r($data['model']);exit;

		echo view('member/_form', $data);	
	}

	public function updateData()
	{
		$data = array(
            'id_member' => $this->request->getPost('id_member'),
            'nama_member' => $this->request->getPost('nama_member'),
        );
		
        
        $this->modelMember->save($data);
		
        // print_r($data);
        // exit;
        // return redirect('kategori');
        return redirect()->to(base_url().'/member');
	}

	public function delete()
	{
    	$id = $this->req->uri->getSegment(3);
    	$this->modelMember->delete($id);
        return redirect()->to(base_url().'/member');
    	
	}
}
