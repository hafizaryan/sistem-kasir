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

class LoginController extends BaseController
{

	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = [];


	public function index()
	{
		if (isset(session('userData')['level_user'])) {
	        return redirect()->to(base_url().'/');
	    }
		$this->session->set('isLoggedIn', false);
		$this->session->set('userData', array());

		return view('login');
	}

	public function login()
	{
		$rules = [
			'username' => 'required',
			'password' => 'required'
		];

		if (!$this->validate($rules)) {

			return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
		}

		$user = $this->modelUser->where('username', $this->request->getPost('username'))->first();

		if (is_null($user) || ! password_verify($this->request->getPost('password'), $user['password_hash'])){

			return redirect()->back()->withInput()->with('error', lang('Auth.passwordSalah'));
		
		}


		// $pegawai = $this->modelPegawai->where('id_user', $user['id_user'])->first();
		// $peserta = $this->modelPeserta->where('id_user', $user['id_user'])->first();

		if ($user['status_user']==0) {
			// echo "Non aktif";
			return redirect()->back()->withInput()->with('error', lang('Auth.nonAktif'));	
		}

		// login OK, save user data to session
		$this->session->set('isLoggedIn', true);
		// if (!is_null($peserta)) {

		// 	$this->session->set('userData', [
	    //         'id' 			=> $user["id_user"],
	    //         'id_peserta' 			=> $peserta["id_peserta"],
	    //         'username' 			=> $user["username"],
	    //         'nama' 			=> $user["nama_user"],
	    //         'level_user' => $user["level_user"]
	    //     ]);		

		// }else{
			$this->session->set('userData', [
	            'id' 			=> $user["id_user"],
	            'username' 			=> $user["username"],
	            'nama' 			=> $user["nama_user"],
	            'level_user' => $user["level_user"]
	         ]);

		// }


		return redirect()->to(base_url('dashboard'));

	}
}
