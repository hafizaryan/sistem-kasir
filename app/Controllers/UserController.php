<?php
namespace App\Controllers;


use CodeIgniter\Controller;

class UserController extends BaseController
{


	public function index()
	{
		$data['user'] = $this->modelUser
		// ->join('pegawai', 'pegawai.id_user=user.id_user', 'left')
		->findAll();

		echo view('/user/index', $data); 

	}

	public function tambah()
	{
    	$id = 18;
		$data['judul'] = 'Tambah User';
		$data['url'] = 'user/tambah';
		$data['id'] = $id;
		$data['model'] = $this->modelUser
		// ->join('pangkat', 'pangkat.id_pangkat=pegawai.pang_gol_pegawai', 'left')
		->where('id_user', $id)
		->find()[0];

		echo view('/user/_form', $data);
	}

	public function insertData()
	{
		$getRule = $this->modelUser->getRule('insertData');
		$this->modelUser->setValidationRules($getRule);

		$data = [
			'username' => $this->request->getPost('username'),
			'nama_user' => $this->request->getPost('nama_user'),	
			'password' => $this->request->getPost('password'),	
			'level_user' => $this->request->getPost('level_user'),	
			'status_user' => $this->request->getPost('status_user'),						
		];

		if (!$this->modelUser->save($data)) {
			return redirect()->back()->withInput()->with('errors', $this->modelUser->errors());
		}

		return $this->index();
	}

	public function logout()
	{
		$this->session->set('userData', array('username', 'level_user'));
		return redirect()->to(base_url());
	}

	public function logoutUser()
	{
		$this->session->destroy();
		return redirect()->to(base_url());
	}

	public function ubah()
	{
    	$id = $this->req->uri->getSegment(3);
		$data['judul'] = 'Edit User';
		$data['url'] = 'user/ubah';
		$data['id'] = $id;
		$data['model'] = $this->modelUser
		
		->where('id_user', $id)
		->find()[0];
		
		echo view('user/_form', $data);	
	}

	public function updateData()
	{
		$data = array(
			'id_user'=> $this->request->getPost('id_user'),            
            'username'=> $this->request->getPost('username'),
            'nama_user'=> $this->request->getPost('nama_user'),
            'password'=> $this->request->getPost('password'),
            'level_user'=> $this->request->getPost('level_user'),
         
        );
		
        
        $this->modelUser->save($data);

        // print_r($data);exit;

        return redirect()->to(base_url().'/user');
	}

	public function delete()
	{
    	$id = $this->req->uri->getSegment(3);
    	$this->modelUser->delete($id);
        return redirect('user');
    	
	}

	public function akses()
	{
    	$id = $this->req->uri->getSegment(3);
    	$tanggal = $this->req->uri->getSegment(4);
		$data = array(
			'id_user'=> $id,            
            'tanggal_akses'=> $tanggal
        );
        // print_r($data);exit;
        $this->modelUser->save($data);
        return redirect()->to(base_url().'/user');
	}
}
