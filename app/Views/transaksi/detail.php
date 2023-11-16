<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<div style="background:#f1aeae;height:300px;padding:3%">
        <h1 style="color:white">Transaksi Detail</h1>
        <h4 style="color:white">Daftar Detail Transaksi Toko</h4>
    <!--<ul class="breadcrumb">
        <li><a href="<?= base_url('/dashboard')?>">Home</a></li>
        <li class="active"><?= $judul ?></li>
    </ul>-->
    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">                    
        <!-- START WIDGETS -->                                                                
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="<?= base_url('/transaksi/tambah_barang/'.$id)?>" class="btn btn-primary pull-right"> Tambah <?= $judul ?></a>

                        <h4><?= $judul ?></h4>
                    </div>
                    <div class="panel-body panel-body-table">
                        <form class="form-horizontal" method="POST" action="<?= base_url('/'.$url.'/ubah') ?>">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-actions">
                                    <thead>
                                        <tr>
                                            <th width="50">#</th>
                                            <th>Nama Barang</th>
                                            <th>Jumlah</th>
                                            <th>Harga</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>                                            
                                        <?php 
                                        $no=0;
                                        foreach ($model as $v) {
                                            $no++;
                                        ?>

                                        <tr id="trow_<?= $no ?>">
                                            <td class="text-center"><?= $no ?></td>
                                            <td><?= $v['nama_barang'] ?></td>
                                            <td><?= $v['jumlah'] ?></td>
                                            <td><?= $v['harga'] ?></td>
                                            <td>
                                                <a href="<?= base_url()?>/<?= $url ?>/ubah/<?=$v[$key]?>" class="btn btn-default btn-rounded btn-condensed btn-sm">UBAH</a>

                                                <a class="btn btn-danger btn-rounded btn-condensed btn-sm" href="<?= base_url()?>/<?= $url ?>/hapus/<?=$v[$key]?>" onClick="return confirm('Hapus Data Ini ?')">HAPUS</a>
                                            </td>
                                        </tr>
                                        <?php
                                            
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div> 
                        </form>                
                        
                    </div>
                </div>                                                
            </div>
        </div>                        
    </div>
    <!-- END PAGE CONTENT WRAPPER -->   
<?= $this->endSection() ?>  