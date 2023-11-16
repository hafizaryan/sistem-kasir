<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
    <ul class="breadcrumb">
        <li><a href="<?= base_url('/dashboard')?>">Home</a></li>
        <li class="active">Peserta</li>
    </ul>
    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">                    
        <!-- START WIDGETS -->                                                                
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    </div>
                    <div class="panel-body panel-body-table">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-actions">
                                <thead>
                                    <tr>
                                        <th width="50">#</th>
                                        <th>Nama Peserta</th>
                                        <th>Platform</th>
                                        <th>Tanggal Mulai</th>
                                        <th>Pertemuan</th>
                                        <th>Nominal</th>
                                        <th width="190">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>                                            
                                <?php 
                                $no=0;

                                foreach ($model as $v) {
                                    $no++;
                                    if ($v['platform'] == 'Web') {
                                        $css = 'btn-primary';
                                    }else if ($v['platform'] == 'Android') {
                                        $css = 'btn-success';
                                    }else if ($v['platform'] == 'Python') {
                                        $css = 'btn-warning';
                                    }else{
                                        $css = 'btn-danger';
                                    }
                                ?>
                                    <tr id="trow_<?= $no ?>">
                                        <td class="text-center"><?= $no ?></td>
                                        <td><strong><?= $v['nama_peserta'] ?></strong></td>
                                        <td align="center">
                                            <button class="btn <?= $css ?> btn-rounded btn-condensed btn-sm"><?= $v['platform'] ?></button>
                                        </td>
                                        <td align="center"><?= $v['tanggal_mulai'] ?></td>
                                        <td><?= $v['pertemuan'] ?>x Pertemuan</td>
                                        <td align="right">Rp.<?= number_format($v['nominal']) ?></td>
                                        <td>
                                            <a href="<?= base_url().'/'.$url ?>-detail/<?=$v[$key]?>" class="btn btn-default btn-rounded btn-condensed btn-sm"><span class="fa fa-pencil"></span> Detail</a>
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