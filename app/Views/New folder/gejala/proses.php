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
                    </div>
                    <div class="panel-body panel-body-table">
                        <h4>Vektor S</h4>
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
                                        <td><?= $v['nis'] ?>x</td>
                                        <td>
                                            <?= number_format($v['modal_awal']).' - '.(round($kriteria['modal_awal'],2)) ?><br>
                                            <?= $modal_awal = ROUND(pow($v['modal_awal'], -(round($kriteria['modal_awal'],2))) ,7) ?>
                                        </td>
                                        <td>
                                            <?= number_format($v['pengeluaran_perbulan']).' - '.(round($kriteria['pengeluaran_perbulan'],2)) ?><br>
                                            <?= $pengeluaran_perbulan = ROUND(pow($v['pengeluaran_perbulan'], -(round($kriteria['pengeluaran_perbulan'],2))) ,7) ?>
                                        </td>
                                        <td>
                                            <?= number_format($v['penghasilan_perbulan']).' - '.(round($kriteria['penghasilan_perbulan'],2)) ?><br>
                                            <?= $penghasilan_perbulan = ROUND(pow($v['penghasilan_perbulan'], (round($kriteria['penghasilan_perbulan'],2))) ,7) ?>
                                        </td>
                                        <td>
                                            <?= number_format($v['pesaing']).' - '.(round($kriteria['pesaing'],2)) ?><br>
                                            <?= $pesaing = ROUND(pow($v['pesaing'], -(round($kriteria['pesaing'],2))) ,7) ?>
                                        </td>
                                        <td>
                                            <?= number_format($v['peminat']).' - '.(round($kriteria['peminat'],2)) ?><br>
                                            <?= $peminat = ROUND(pow($v['peminat'], (round($kriteria['peminat'],2))) ,7) ?>        
                                        </td>
                                        <td>
                                            <?php 
                                                $vs = ROUND($modal_awal * $pengeluaran_perbulan * $penghasilan_perbulan * $pesaing * $peminat, 7);
                                                echo $vs;
                                                $arr_vs[] = $vs;
                                            ?>
                                           <!--  <a href="<?= base_url()?>/<?= $url ?>/ubah/<?=$v[$key]?>" class="btn btn-default btn-rounded btn-condensed btn-sm">UBAH</a>

                                            <a class="btn btn-danger btn-rounded btn-condensed btn-sm" href="<?= base_url()?>/<?= $url ?>/hapus/<?=$v[$key]?>" onClick="return confirm('Hapus Data Ini ?')">HAPUS</a> -->
                                        </td>
                                    </tr>
                                    <?php
                                        $jumlah_vs += $vs;
                                    }
                                    ?>
                                    <tr>
                                        <td colspan="7"></td>
                                        <td><?= $jumlah_vs ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>                   
                        <?php
                            // $rank = []; 
                            // foreach ($model as $v) {
                            // $no++;
                        ?>
                                    <?php //$arr_vs[$no-1]/$jumlah_vs ?>
                        <?php
                            // }
                        ?>

                        <!-- Perhitungan Vektor V -->
                                    <?php 
                                    $no=0;
                                    $arr_rank = [];
                                    foreach ($model as $v) {
                                        $no++;
                                        $a = [];
                                        $a['nis'] = $v['nis'];
                                        $a['nama_siswa'] = $v['nama_siswa'];
                                        $a['vektor_s'] = $arr_vs[$no-1];
                                        $a['vektor_v'] = $arr_vs[$no-1]/$jumlah_vs;
                                        $arr_rank[] = $a;
                                    ?>

                                    
                                    <?php
                                        $jumlah_vs += $vs;
                                    }
                                    ?>
                                        
                        <?php  
                            // print_r($arr_rank);
                            $b = arsort(array_column($arr_rank, 'vektor_v'));
                            echo '<br>';
                            echo '<br>';
                            // print_r($arr_rank);
                            $keys = array_column($arr_rank, 'vektor_v');
                            array_multisort($keys, SORT_DESC, $arr_rank);
                            // print_r($arr_rank);
                        ?>

                        <h4>Vektor V</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-actions">
                                <thead>
                                    <tr>
                                        <th width="50">#</th>
                                        <th>Nama Alternatif</th>
                                        <th>Vektor S</th>
                                        <th>Vektor V</th>
                                        <th width="190">Rank</th>
                                    </tr>
                                </thead>
                                <tbody>                                            
                                    <?php 
                                    $no=0;
                                    foreach ($arr_rank as $v) {
                                        $no++;
                                    ?>

                                    <tr id="trow_<?= $no ?>">
                                        <td class="text-center"><?= $no ?></td>
                                        <td><?= $v['nis'] ?> - <?= $v['nama_siswa'] ?></td>
                                        <td>
                                            <?= $v['vektor_s'] ?>
                                        </td>
                                        <td>
                                            <?= $v['vektor_v'] ?>
                                        </td>
                                        <td><?= $no ?></td>
                                    </tr>
                                    <?php
                                        $jumlah_vs += $vs;
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