<?php 
    $warna1 = "#f78242";
    $warna2 = "#33414e";
    $warna3 = "#f6f6f6";
    $warna4 = "#FFFFFF";
    $warna5 = "#999999";
?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Sistem Penjualan Supermarket</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="<?= base_url()?>/images/elgoni.png" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="<?= base_url()?>/css/theme-default.css"/>
        <link rel="stylesheet" type="text/css" id="theme" href="<?= base_url()?>/css/fs.css"/>
        <style type="text/css">
            .xn-openable ul li{
                left: 25px;
            }
        </style>
        <!-- EOF CSS INCLUDE -->                   
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container" style="background: <?= $warna4 ?>">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar" style="background: <?= $warna1 ?>">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation" style="background: <?= $warna4 ?>">
                    <li class="xn-logox" style="background: <?= $warna4 ?>">
                        <a href="#">
                            <img src="https://cdn-icons-png.flaticon.com/512/384/384999.png" alt="Flashsoft Indonesia" width="250px" class="hidden-xs"/> 
                            &nbsp;&nbsp;<span style="color:<?= $warna1 ?>;display: nonex;">Sistem Penjualan Supermarket</span>
                        </a>
                        <a  class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile" style="background: <?= $warna4 ?>">
                        <a href="#" class="profile-mini">
                            <img src="<?= base_url()?>/adhitama.png" alt="Nasya Amirah Melyani"/>
                        </a>
                        <div class="profile" style="background: <?= $warna3 ?>;display: nonex;">
                            <div class="profile-imagex">
                            </div>
                            <div class="profile-data" style="display: none;">
                                <div class="profile-data-name"><?= isset(session('userData')['nama_pegawai']) ? session('userData')['nama_pegawai'] : session('userData')['username'] ?></div>
                                <div class="profile-data-title"><?= (session('userData')['level_user']) == 'pimpinan' ? 'Direktur' : 'Admin' ?></div>
                            </div>
                            <div class="profile-controls" style="display: none;">
                                <a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info"></span></a>
                                <a href="pages-messages.html" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                            </div>
                        </div>                                                                        
                    </li>
                    <!-- <li class="xn-title">Menu</li> -->
                    <li>
                        <a href="<?= base_url() ?>/dashboard"><span class="fa fa-home" style="color: <?= $warna5 ?>"></span> <span class="xn-text">Beranda</span></a>
                    </li>

                    <?php           
                    // if (true) {
                    if (session('userData')['level_user'] == 'admin' || session('userData')['level_user'] == 1) {
                    ?>
                        <li>
                            <a href="<?= base_url() ?>/user"><span class="fa fa-user-secret" style="color: <?= $warna5 ?>"></span> <span class="xn-text">User</span></a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>/barang"><span class="fa fa-folder-open-o" style="color: <?= $warna5 ?>"></span> <span class="xn-text">Barang</span></a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>/transaksi"><span class="fa fa-newspaper-o" style="color: <?= $warna5 ?>"></span> <span class="xn-text">Transaksi</span></a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>/stok"><span class="fa fa-newspaper-o" style="color: <?= $warna5 ?>"></span> <span class="xn-text">Stok</span></a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>/member"><span class="fa fa-newspaper-o" style="color: <?= $warna5 ?>"></span> <span class="xn-text">Member</span></a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>/kasir"><span class="fa fa-newspaper-o" style="color: <?= $warna5 ?>"></span> <span class="xn-text">Kasir</span></a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>/laporan"><span class="fa fa-newspaper-o" style="color: <?= $warna5 ?>"></span> <span class="xn-text">Laporan</span></a>
                        </li>

                        <!-- <li>
                            <a href="<?= base_url() ?>/solusi"><span class="fa fa-newspaper-o" style="color: <?= $warna5 ?>"></span> <span class="xn-text">Solusi</span></a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>/rule"><span class="fa fa-newspaper-o" style="color: <?= $warna5 ?>"></span> <span class="xn-text">Rule</span></a>
                        </li>  -->

                        
                    
                    <?php           
                    // if (true) {
                    }elseif (session('userData')['level_user'] == 'pemilik' || session('userData')['level_user'] == 1) {
                    ?>
                        <li>
                            <a href="<?= base_url() ?>/menu"><span class="fa fa-clone" style="color: <?= $warna5 ?>"></span> <span class="xn-text">Menu</span></a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>/proses"><span class="fa fa-clone" style="color: <?= $warna5 ?>"></span> <span class="xn-text">Proses</span></a>
                        </li>
                    <?php                    
                    }else{
                    ?>
                        <li>
                            <a href="<?= base_url() ?>/proses"><span class="fa fa-clone" style="color: <?= $warna5 ?>"></span> <span class="xn-text">Diagnosa</span></a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>/admin"><span class="fa fa-clone" style="color: <?= $warna5 ?>"></span> <span class="xn-text">Login</span></a>
                        </li>
                    <?php                    
                        }
                    ?>
 
                    <li><a href="<?= base_url() ?>/logout" class="mb-control" style="color: <?= $warna5 ?>"><span class="fa fa-sign-out" style="color: <?= $warna5 ?>"></span> Keluar</a></li>
                    
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel hidden-xs" style="background: #f1aeae">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent" style="color:<?= $warna2 ?>;"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
 
                    <!-- POWER OFF -->
                    <li class="xn-icon-button pull-right last">
                        <a href="#" title="Keluar" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out" style="color:<?= $warna2 ?>;"></span></a>
                    </li> 
                    <!-- END POWER OFF -->                    

                    <!-- LANG BAR -->

                    <!-- END LANG BAR -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     

                <!-- START BREADCRUMB -->
<!--                 <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>                    
                    <li class="active">Kontrak Kerja</li>
                </ul> -->
                <!-- END BREADCRUMB -->    

                <div class="navbar hidden-md hidden-lg" style="display:none;">
                  <a href="<?= base_url()?>/" class="active">
                    <i class="fa fa-home" aria-hidden="true" style="font-size: 20px;"></i>
                    <br>
                    Home
                  </a>
                  <a href="<?= base_url('do-blok/lokasi-mobile')?>">
                    <i class="fa fa-bookmark" aria-hidden="true" style="font-size: 20px;"></i>
                    <br>
                    DO
                  </a>
                  <a href="<?= base_url()?>/hari-stok/lokasi-mobile">
                    <i class="fa fa-history" aria-hidden="true" style="font-size: 20px;"></i>
                    <br>
                    Stok Gudang
                  </a>
                  <a href="<?= base_url()?>/jual-site-plan/lokasi-mobile">
                    <i class="fa fa-shopping-cart" aria-hidden="true" style="font-size: 20px;"></i>
                    <br>
                    Penjualan
                  </a>
                </div>                   
                
                <!-- Konten  -->
                <?= $this->renderSection('content') ?>

            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Ingin <strong>Keluar</strong> ?</div>
                    <div class="mb-content">
<!--                         <p>Yakin Ingin Keluar ?</p>                     -->
                        <!-- <p>Pilih No . Press Yes to logout current user.</p> -->
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="<?= base_url('/logout') ?>" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="<?= base_url() ?>/public/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>/public/js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>/public/js/plugins/bootstrap/bootstrap.min.js"></script>                
        <!-- END PLUGINS -->
        
        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='<?= base_url() ?>/public/js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="<?= base_url() ?>/public/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="<?= base_url() ?>/public/js/plugins/bootstrap/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>/public/js/plugins/bootstrap/bootstrap-timepicker.min.js"></script>

        <script type="text/javascript" src="<?= base_url() ?>/public/js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <!-- END THIS PAGE PLUGINS -->    

        <script type="text/javascript" src="<?= base_url() ?>/public/js/plugins/datatables/jquery.dataTables.min.js"></script>   
        
        <script type="text/javascript" src="<?= base_url() ?>/public/js/actions.js"></script>
 <!-- END THIS PAGE PLUGINS-->        

        
        <!-- START TEMPLATE -->
        <script type="text/javascript" src="<?= base_url() ?>/public/js/plugins.js"></script>        
        
        <!-- END TEMPLATE -->

                              
       
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         

    </body>
</html>
