<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
    <ul class="breadcrumb">
        <li><a href="<?= base_url('/dashboard')?>">Home</a></li>
        <li><a href="<?= base_url('/peserta/riwayat')?>">Peserta</a></li>
        <li class="active">Riwayat</li>
    </ul>
    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">                    
        <!-- START WIDGETS -->                                                                
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="pull-left"><?= $model[0]['nama_peserta'] ?></h3>
                        <form action="<?= base_url('booking/excel') ?>" method="POST" class="pull-right">
                            <button type="submit" class="btn btn-default btn-rounded btn-condensed btn-sm">Download Excel</button>
                        </form>
                    </div>
                    <div class="panel-body panel-body-table">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-actions">
                                <thead>
                                    <tr>
                                        <th width="50">#</th>
                                        <th>Tanggal</th>
                                        <th>Hari</th>
                                        <th>Jam</th>
                                        <th>Platform</th>
                                        <th>Paket</th>
                                        <th>Metode Bayar</th>
                                        <th>Nominal</th>
                                    </tr>
                                </thead>
                                <tbody>                                            
                                <?php 
                                $no=0;
                                $total = 0;
                                foreach ($model as $v) {
                                    $no++;
                                    $hari = date('w', strtotime($v['tanggal']));
                                    $tanggal = date('d-m-Y', strtotime($v['tanggal']));
                                    $total += $v['nominal'];
                                ?>
                                    <tr id="trow_<?= $no ?>">
                                        <td class="text-center"><?= $no ?></td>
                                        <td><?= $tanggal ?></td>
                                        <td><?= namaHari($hari) ?></td>
                                        <td><?= $v['jam'] ?></td>
                                        <td><?= $v['platform'] ?></td>
                                        <td><?= $v['paket'] ?></td>
                                        <td><?= $v['metode_bayar'] ?></td>
                                        <td>Rp<?= number_format($v['nominal']) ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                                <tr id="trow_">
                                    <td class="text-center"></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>Rp<?= number_format($total) ?></td>
                                </tr>
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

<?php 
    function namaHari($date){
        $hasil = '';
        switch ($date) {
            case '0':
                $hasil = 'Minggu';
                break;
            case '1':
                $hasil = 'Senin';
                break;
            case '2':
                $hasil = 'Selasa';
                break;
            case '3':
                $hasil = 'Rabu';
                break;
            case '4':
                $hasil = 'Kamis';
                break;
            case '5':
                $hasil = 'Jumat';
                break;
            case '6':
                $hasil = 'Sabtu';
                break;
            
            default:
                # code...
                $hasil = '-';
                break;
        }
        return $hasil;
    }
?>