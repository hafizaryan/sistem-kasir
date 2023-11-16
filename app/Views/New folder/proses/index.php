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

                        <h4><?= $judul ?></h4>
                    </div>
                    <div class="panel-body panel-body-table">
                        <form class="form-horizontal" method="POST" action="<?= base_url('/'.$url.'') ?>">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-actions">
                                    <thead>
                                        <tr>
                                            <th width="50">#</th>
                                            <th>Kode Gejala</th>
                                            <th>nama Gejala</th>
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
                                            <td><?= $v['kode_gejala'] ?></td>
                                            <td><?= $v['nama_gejala'] ?></td>
                                            <td>
                                                <input type="checkbox" name="cek[]" value="<?= $v['kode_gejala'] ?>">
                                            </td>
                                        </tr>
                                        <?php
                                            
                                        }
                                        ?>
                                    </tbody>
                                </table>

                                 <div class="panel-footer">
                                    <!-- <button class="btn btn-default">Kembali</button>                                     -->
                                    <input type="submit" value="Proses" class="btn btn-primary pull-right">
                                </div>
                            </div> 
                        </form>                
                        
                    </div>
                </div>                                                
            </div>
        </div>                        
    </div>
    <!-- END PAGE CONTENT WRAPPER -->   
<?= $this->endSection() ?>  