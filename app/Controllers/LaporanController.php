<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class LaporanController extends BaseController
{
	public function index()
	{
		if(isset($_GET['bulan'])){
			$data['model'] = $this->modelTransaksi->like('tanggal', '_____'.$_GET['bulan'], 'after')->findAll(); 
			// echo $_GET['bulan'];
			$data['cetak'] = '?bulan='.$_GET ['bulan'];
		}
		else{
			$data['model'] = $this->modelTransaksi->findAll();
			$data['cetak'] = '';
		}
		$data['judul'] = 'Transaksi';
		$data['url'] = 'transaksi';
		$data['key'] = 'id_transaksi';
		

		echo view('/laporan/index', $data); 
	}

	public function cetak()
	{
		if(isset($_GET['bulan'])){
			$data['model'] = $this->modelTransaksi->like('tanggal', '_____'.$_GET['bulan'], 'after')->findAll(); 
			// echo $_GET['bulan'];
		}
		else{
			$data['model'] = $this->modelTransaksi->findAll();
		}
		$data['judul'] = 'Transaksi';
		$data['url'] = 'transaksi';
		$data['key'] = 'id_transaksi';
		

		echo view('/laporan/cetak', $data); 
	}

	

	

	
	

	
	
}