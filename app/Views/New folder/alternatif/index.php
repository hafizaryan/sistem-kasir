<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
    <ul class="breadcrumb">
        <li><a href="<?= base_url('/dashboard')?>">Home</a></li>
        <li class="active"><?= $judul ?></li>
    </ul>
    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">                    
        <!-- START WIDGETS -->                                                                
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="<?= base_url('/'.$url.'/tambah')?>" class="btn btn-primary"> Tambah <?= $judul ?></a>

                        <!-- <h4><?= $judul ?></h4> -->
                    </div>
                    <div class="panel-body panel-body-table">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-actions">
                                <thead>
                                    <tr>
                                        <th width="50">#</th>
                                        <th>Nama Alternatif</th>
                                        <th>Modal Awal</th>
                                        <th>Pengeluaran Perbulan</th>
                                        <th>Penghasilan Perbulan</th>
                                        <th>Pesaing</th>
                                        <th>Peminat</th>
                                        <th width="190">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>                                            
                                    <?php 
                                    $no=0;

                                    $jumlah_vs = 0;
                                    $arr_vs = [];
                                    foreach ($model as $v) {
                                    $no++;
                                    ?>

                                    <tr id="trow_<?= $no ?>">
                                        <td class="text-center"><?= $no ?></td>
                                        <td>A<?= $v['id_alternatif'] ?> - <?= $v['nama_alternatif'] ?></td>
                                        <td>
                                            <?= number_format($v['modal_awal']) ?>
                                        </td>
                                        <td>
                                            <?= number_format($v['pengeluaran_perbulan']) ?>
                                        </td>
                                        <td>
                                            <?= number_format($v['penghasilan_perbulan']) ?>
                                        </td>
                                        <td>
                                            <?= number_format($v['pesaing']) ?>
                                        </td>
                                        <td>
                                            <?= number_format($v['peminat']) ?>        
                                        </td>
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
                        
                    </div>
                </div>                                                
            </div>
        </div>                        
    </div>
    <!-- END PAGE CONTENT WRAPPER -->   
<?= $this->endSection() ?>  