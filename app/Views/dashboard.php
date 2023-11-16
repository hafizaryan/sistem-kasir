<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<div style="background:#f1aeae;height:300px;padding:3%">
        <h1 style="color:white">Dashboard</h1>
        <h4 style="color:white">Supermarket Raihan Mukti</h4>
    </div>


    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap" style="background:#fff;height: 100vh;margin-top:-150px;padding:2%;margin-left:2%;margin-right:2%;width:95%;border-radius:50px;">                    
        <!-- START WIDGETS -->                                                                
        <div class="row">
            <div class="col-md-4 pull-left" style="float:left;">
                 <!-- Slider -->
                <div id="myCarousel" class="carousel slide col-md-12" data-ride="carousel" style="background:#FFFFFF;">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                      <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                      <div class="item active">
                        <img src="https://i.ytimg.com/vi/zlvHwAcnIRM/maxresdefault.jpg" alt="Raihan Mukti" style="width:100%;">
                      </div>

                      <div class="item">
                        <img src="https://i.pinimg.com/564x/5b/83/37/5b8337948a74d0e2d789ae3c750b5722.jpg" alt="Raihan Mukti" style="width:100%;">
                      </div>

                      <div class="item">
                        <img src="https://i.pinimg.com/564x/b2/b5/a0/b2b5a09209336ea9b3a8adfab28414a8.jpg" alt="Raihan Mukti" style="width:100%;">
                      </div>
                    
                      <!-- <div class="item">
                        <img src="<?= base_url()?>/public/images/promo.png" alt="Raihan Mukti" style="width:100%;">
                      </div> -->
                    </div>

                    <!-- Left and right controls -->
                    <!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right"></span>
                      <span class="sr-only">Next</span>
                    </a> -->
                  <!-- </div> -->
                </div>
            </div>
            <div class="col-md-8 pull-left">
                <div class="panel panel-default" style="padding:2%;">
                    <div class="col-md-3">
                        <img src="https://png.pngtree.com/png-vector/20220528/ourmid/pngtree-supermarket-logo-with-shopping-cart-png-image-png-image_4744377.png" width="100%" style="float:left;">
                    </div>
                    <div class="col-md-9" style="padding: 1%;">
                        <h4>Sistem Penjualan Supermarket</h4>
                        <p>Selamat Datang di Supermarket Raihan Mukti</p>
                        <p>Menyediakan berbagai barang kebutuhan harian. Harga yang ramah dikantong, dijamin ga bikin kantong bolong</p>
                   </div>
               </div>
            </div>
        </div>
    </div>

    <!-- PAGE CONTENT WRAPPER -->
    
<?= $this->endSection() ?>


