<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<div style="background:#f1aeae;height:300px;padding:3%">
        <h1 style="color:white">Admin</h1>
        <h4 style="color:white">Daftar Admin Toko</h4>
    </div>
    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap" style="background:#fff;margin-top:-150px;padding:2%;margin-left:2%;margin-right:2%;width:95%;border-radius:50px;">                    
        <!-- START WIDGETS -->                                                                
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="<?= base_url('/user/tambah')?>" class="btn btn-primary"> Tambah User</a>
                    </div>
                    <div class="panel-body panel-body-table">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-actions">
                                <thead>
                                    <tr>
                                        <th width="50">#</th>
                                        <th>Username</th>
                                        <th>Nama</th>
                                        <th>Level Akses</th>
                                        <th>Akses</th>
                                        <th width="190">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>                                            
                                <?php 
                                $no=0;

                                foreach ($user as $v) {
                                    $no++;
                                    $start = strtotime($v['tanggal_akses']);
                                    $end   = strtotime(date('Y-m-d H:i:s'));
                                    $diff  = $end - $start;
                                    $a = floor($diff / (60 * 60 * 24));
                                    if($a <= 0){
                                        $akses = true;
                                    }else{
                                        $akses = false;
                                    }
                                ?>

                                    <tr id="trow_<?= $no ?>">
                                        <td class="text-center"><?= $no ?></td>
                                        <td><?= $v['username'] ?></td>
                                        <td><?= $v['nama_user'] ?></td>
                                        <td><?= $v['level_user'] ?></td>
                                        <td><?= $akses?'Akses':'-' ?></td>
                                        <td>
                                            <?php if($akses): ?>
                                                <a href="<?= base_url()?>/user/akses/<?=$v['id_user']?>/2021-01-01" class="btn btn-danger btn-rounded btn-condensed btn-sm">Batal</a>
                                            <?php else: ?>
                                                <a href="<?= base_url()?>/user/akses/<?=$v['id_user']?>/<?= date('Y-m-d') ?>" class="btn btn-default btn-rounded btn-condensed btn-sm">Akses</a>
                                            <?php endif; ?>

                                            <a href="<?= base_url()?>/user/ubah/<?=$v['id_user']?>" class="btn btn-default btn-rounded btn-condensed btn-sm"><span class="fa fa-pencil"></span></a>


                                            <a class="btn btn-danger btn-rounded btn-condensed btn-sm" href="<?= base_url()?>/user/hapus/<?=$v['id_user']?>" onClick="return confirm('Hapus Data Ini ?')"><span class="fa fa-times"></span></a>
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