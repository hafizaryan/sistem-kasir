<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">                    
        <!-- START WIDGETS -->                                                                
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="<?= base_url('/'.$url.'/tambah')?>" class="btn btn-primary"> Tambah <?= $judul?></a>
                    </div>
                    <div class="panel-body panel-body-table">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-actions">
                                <thead>
                                    <tr>
                                        <th width="50">#</th>
                                        <th>Nama Peserta</th>
                                        <th>Jenis Kelamin</th>
                                        <th>No Hp</th>
                                        <th>Instansi</th>
                                        <th width="190">Aksi</th>
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
                                        <td><strong><?= $v['nama_peserta'] ?></strong></td>
                                        <td><strong><?= $v['jenis_kelamin'] ?></strong></td>
                                        <td><strong><?= $v['no_hp'] ?></strong></td>
                                        <td><strong><?= $v['instansi'] ?></strong></td>
                                        <td>
                                            <a href="<?= base_url().'/'.$url ?>/ubah/<?=$v[$key]?>" class="btn btn-default btn-rounded btn-condensed btn-sm"><span class="fa fa-pencil"></span></a>


                                            <a class="btn btn-danger btn-rounded btn-condensed btn-sm" href="<?= base_url().'/'.$url ?>/hapus/<?=$v[$key]?>" onClick="return confirm('Hapus Data Ini ?')"><span class="fa fa-times"></span></a>
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