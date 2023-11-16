<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" rel="stylesheet"> -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>


    <div style="background:#f1aeae;height:300px;padding:3%">
        <h1 style="color:white">Barang</h1>
        <h4 style="color:white">Daftar barang toko</h4>
    </div>

    <!-- <ul class="breadcrumb">
        <li><a href="<?= base_url('/dashboard')?>">Home</a></li>
        <li class="active"><?= $judul ?></li>
    </ul> -->
    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap" style="background:#fff;margin-top:-150px;padding:2%;margin-left:2%;margin-right:2%;width:95%;border-radius:50px;">                     
        <!-- START WIDGETS -->                                                                
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="<?= base_url('/'.$url.'/tambah')?>" class="btn btn-primary pull-right"> Tambah <?= $judul ?></a>

                        <h4><?= $judul ?></h4>
                    </div>
                    <div class="panel-body panel-body-table">
                        <form class="form-horizontal" method="POST" action="<?= base_url('/'.$url.'/ubah') ?>">
                            <div class="table-responsive">
                                <table id="example" class="table table-bordered table-striped table-actions">
                                    <thead>
                                        <tr>
                                            <th width="50">#</th>
                                            <th>Nama Barang</th>
                                            <th width="200px">Gambar</th>
                                            <th>Barcode</th>
                                            <th>Stok</th>
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
                                            <td><img src="<?= base_url('/uploads/'.$v['gambar'])?>" width="100%" style="float:left;"></td>
                                            <td><?= $v['barcode'] ?></td>
                                            <td>99+</td>
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