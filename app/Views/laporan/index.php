<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
    <div style="background:#f1aeae;height:300px;padding:3%">
        <h1 style="color:white">Laporan Keuangan</h1>
        <h4 style="color:white">Daftar Laporan Keuangan Toko</h4>
        <!-- <ul class="breadcrumb" style="background:#f1aeae;color:#FFFFFF">
            <li><a href="<?= base_url('/dashboard')?>">Home</a></li>
            <li class="active"><?= $judul ?></li>
        </ul> -->
    </div>
   
    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap" style="background:#fff;margin-top:-150px;padding:2%;margin-left:2%;margin-right:2%;width:95%;border-radius:50px;">                              
        <!-- START WIDGETS -->                                                                
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        

                    <a href="<?= base_url()?>/laporan/cetak/<?= $cetak?>" class="btn btn-default btn-rounded btn-condensed btn-sm pull-right">CETAK</a>
                        <h4><?= $judul ?></h4>
                    </div>
                    <div class="panel-body panel-body-table">
                        <div class="row">
                            <div class="col-md-12">                            
                                <form class="form-horizontal" method="GET" action="<?= base_url('/laporan') ?>">
                                    <div class="panel panel-default">
                                        <div class="col-md-12">
                                            <div class="panel-body form-group-separated">          
                                                <div class="form-group">
                                                    <label class="col-md-3 col-xs-12 control-label">Nama Bulan</label>
                                                    <div class="col-md-2 col-xs-12 control-label">     
                                                        <div class="input-group">

                                                            <select name="bulan" class="form-control">
                                                                <option value="01">Januari</option>
                                                                <option value="02">Februari</option>
                                                                <option value="03">Maret</option>
                                                                <option value="04">April</option>
                                                                <option value="05">Mei</option>
                                                                <option value="06">Juni</option>
                                                                <option value="07">Juli</option>
                                                                <option value="08">Agustus</option>
                                                                <option value="09">September</option>
                                                                <option value="10">Oktober</option>
                                                                <option value="11">November</option>
                                                                <option value="12">Desember</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-xs-12 control-label">     
                                                        <div class="input-group">
                                                             <input type="submit" value="CARI" class="btn btn-primary control-label">
                                                     </div>
                                                    </div>
                                                </div>        
                                            </div>
                                        </div>
                                        
                                        <div class="panel-footer">
                                            <!-- <button class="btn btn-default">Kembali</button>                                     -->
                                        </div>
                                    </div>
                                </form>                        
                            </div>
                        </div>               
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-actions">
                                    <thead>
                                        <tr>
                                            <th width="50">#</th>
                                            <th>Tanggal</th>
                                            <th>Jumlah</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>                                            
                                        <?php 
                                        $no=0;
                                        $jumlah = 0;
                                        $total = 0;
                                        foreach ($model as $v) {
                                            $no++;
                                            $jumlah = $jumlah + $v['jumlah'];
                                            $total = $total + $v['total'];
                                        ?>

                                        <tr id="trow_<?= $no ?>">
                                            <td class="text-center"><?= $no ?></td>
                                            <td><?= $v['tanggal'] ?></td>
                                            <td><?= $v['jumlah'] ?></td>
                                            <td><?= $v['total'] ?></td>
                                            
                                        </tr>
                                        <?php
                                            
                                        }
                                        ?>
                                        <tr id="trow_<?= $no ?>">
                                            <td class="text-center"></td>
                                            <td>Kalkulasi</td>

                                            <td><?=$jumlah ?></td>
                                            <td><?=$total ?></td>
                                            
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