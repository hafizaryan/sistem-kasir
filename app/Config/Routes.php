<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('LoginController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */
// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/login', 'LoginController::index');
$routes->get('/logout', 'UserController::logout');
// $routes->get('/shop/logout', 'UserController::logoutUser');
$routes->post('/login', 'LoginController::login');    


$routes->get('/','DashboardController::index');
$routes->get('/dashboard','DashboardController::index');


// Kasir

$routes->get('/barang','BarangController::index');
$routes->get('/barang/tambah','BarangController::tambah');
$routes->post('/barang/tambah','BarangController::insertData');
$routes->get('/barang/ubah/(:any)','BarangController::ubah');
$routes->post('/barang/ubah','BarangController::updateData');
$routes->get('/barang/hapus/(:any)','BarangController::delete');

$routes->get('/transaksi','TransaksiController::index');
$routes->get('/transaksi/tambah','TransaksiController::tambah');
$routes->post('/transaksi/tambah','TransaksiController::insertData');
$routes->get('/transaksi/ubah/(:any)','TransaksiController::ubah');
$routes->post('/transaksi/ubah','TransaksiController::updateData');
$routes->get('/transaksi/hapus/(:any)','TransaksiController::delete');

$routes->get('/stok','StokController::index');
$routes->get('/stok/tambah','StokController::tambah');
$routes->post('/stok/tambah','StokController::insertData');
$routes->get('/stok/ubah/(:any)','StokController::ubah');
$routes->post('/stok/ubah','StokController::updateData');
$routes->get('/stok/hapus/(:any)','StokController::delete');

$routes->get('/member','MemberController::index');
$routes->get('/member/tambah','MemberController::tambah');
$routes->post('/member/tambah','MemberController::insertData');
$routes->get('/member/ubah/(:any)','MemberController::ubah');
$routes->post('/member/ubah','MemberController::updateData');
$routes->get('/member/hapus/(:any)','MemberController::delete');

$routes->get('/kasir','KasirController::index');
$routes->get('/kasir/tambah','KasirController::tambah');
$routes->post('/kasir/tambah','KasirController::insertData');
$routes->get('/kasir/ubah/(:any)','KasirController::ubah');
$routes->post('/kasir/ubah','KasirController::updateData');
$routes->get('/kasir/hapus/(:any)','KasirController::delete');

$routes->get('/laporanharian','LaporanHarianController::index');
$routes->get('/laporanharian/tambah','LaporanHarianController::tambah');
$routes->post('/laporanharian/tambah','LaporanHarianController::insertData');
$routes->get('/laporanharian/ubah/(:any)','LaporanHarianController::ubah');
$routes->post('/laporanharian/ubah','LaporanHarianController::updateData');
$routes->get('/laporanharian/hapus/(:any)','LaporanHarianController::delete');

$routes->get('/profil','ProfilController::index');
$routes->get('/tentang','ProfilController::tentang');

$routes->get('/transaksi/tambah_barang/(:any)','TransaksiController::tambah_barang');
$routes->post('/transaksi/tambah_barang','TransaksiController::insert_tambah_barang');

$routes->get('/transaksi/detail/(:any)','TransaksiController::detail');
$routes->get('/transaksi/cetak/(:any)','TransaksiController::cetak');

$routes->get('/laporan','LaporanController::index');
$routes->get('/laporan/cetak','LaporanController::cetak');


$routes->get('/user','UserController::index');
$routes->get('/user/tambah','UserController::tambah');
$routes->post('/user/tambah','UserController::insertData');
$routes->get('/user/ubah/(:any)','UserController::ubah');
$routes->post('/user/ubah','UserController::updateData');
$routes->get('/user/hapus/(:any)','UserController::delete');

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
