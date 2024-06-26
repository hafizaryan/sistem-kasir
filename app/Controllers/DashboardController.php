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

class DashboardController extends BaseController
{

	public function index()
	{

		// $this->lisensi();
		if (!isset(session('userData')['level_user'])) {
	        return redirect()->to(base_url().'/login');
	    }
	 
		$grafik = [];
		$data['grafik'] = $grafik;
		return view('dashboard', $data);
	}


}
