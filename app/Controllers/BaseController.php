<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use Config\Services;

// use App\Models\LokasiModel;
use App\Models\UserModel;
use App\Models\BarangModel;
use App\Models\TransaksiModel;
use App\Models\StokModel;
use App\Models\MemberModel;
use App\Models\KasirModel;
use App\Models\LaporanHarianModel;
use App\Models\TransaksiDetailModel;

class BaseController extends Controller
{

	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = ['form','url'];

	/**
	 * Constructor.
	 */
	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.:
		// $this->session = \Config\Services::session();
		$this->req = Services::request();
		$this->session = Services::session();
		$this->calendar = Services::calendar();

		// Inisiasi object Model 
		$this->modelUser = new UserModel();	
		$this->modelBarang = new BarangModel();
		$this->modelTransaksi = new TransaksiModel();
		$this->modelStok = new StokModel();
		$this->modelMember = new MemberModel();
		$this->modelKasir = new KasirModel();
		$this->modelLaporanHarian = new LaporanHarianModel();
		$this->modelTransaksiDetail = new TransaksiDetailModel();
	}

}
