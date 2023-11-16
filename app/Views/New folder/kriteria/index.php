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
                        <!-- <a href="<?= base_url('/'.$url.'/tambah')?>" class="btn btn-primary"> Tambah <?= $judul ?></a> -->

                        <h4><?= $judul ?></h4>
                    </div>
                    <div class="panel-body panel-body-table">
                        <form class="form-horizontal" method="POST" action="<?= base_url('/'.$url.'/ubah') ?>">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-actions">
                                    <thead>
                                        <tr>
                                            <th width="50">#</th>
                                            <th>Kriteria</th>
                                            <th>Variabel</th>
                                            <th>Bobot</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>                                            
                                        <?php 
                                        $no=0;
                                        $jumlah_bobot = 0;
                                        foreach ($model as $v) {
                                            $no++;
                                            $jumlah_bobot += $v['bobot'];
                                        ?>

                                        <tr id="trow_<?= $no ?>">
                                            <td class="text-center"><?= $no ?></td>
                                            <td><?= $v['nama_kriteria'] ?></td>
                                            <td><?= $v['nama_subkriteria'] ?></td>
                                            <td><?= ($v['bobot']) ?></td>
                                            <td>
                                                
                                            </td>
                                        </tr>
                                        <?php
                                            
                                        }
                                        ?>
                                        <tr>
                                            <td colspan="3"></td>
                                            <td><?= $jumlah_bobot ?></td>
                                            <td>
                                                <!-- <input type="submit" value="SIMPAN" class="btn btn-primary pull-right"> -->
                                            </td>
                                        </tr>
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