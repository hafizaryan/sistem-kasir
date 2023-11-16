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
                        <a href="<?= base_url('/'.$url.'/tambah')?>" class="btn btn-primary pull-right"> Tambah <?= $judul ?></a>

                        <h4><?= $judul ?></h4>
                    </div>
                    <div class="panel-body panel-body-table">
                        <form class="form-horizontal" method="POST" action="<?= base_url('/'.$url.'/ubah') ?>">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-actions">
                                    <thead>
                                        <tr>
                                            <th width="50">#</th>
                                            <th>Nama</th>
                                            <th>Harga</th>
                                            <th>Rasa</th>
                                            <th>Pelayanan</th>
                                            <th>Lokasi</th>
                                            <th>Waktu</th>
                                            <th>Kategori</th>
                                            <th>Fasilitas</th>
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
                                            <td><?= $v['nama'] ?></td>
                                            <td><?= $v['harga'] ?></td>
                                            <td><?= ($v['rasa']) ?></td>
                                            <td><?= ($v['pelayanan']) ?></td>
                                            <td><?= ($v['lokasi']) ?></td>
                                            <td><?= ($v['waktu']) ?></td>
                                            <td width="300px;">
                                                <table style="width:100%;">
                                                    <tr>
                                                        <td>Kopi</td>
                                                        <td>: <?= ($v['kopi']) ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Masakan Tradisional</td>
                                                        <td>: <?= ($v['masakan_tradisional']) ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Masakan Jepang</td>
                                                        <td>: <?= ($v['masakan_jepang']) ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Aneka Mie</td>
                                                        <td>: <?= ($v['aneka_mie']) ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Aneka Nasi</td>
                                                        <td>: <?= ($v['aneka_nasi']) ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jus</td>
                                                        <td>: <?= ($v['jus']) ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Milkshake</td>
                                                        <td>: <?= ($v['milkshake']) ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Teh</td>
                                                        <td>: <?= ($v['teh']) ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Masakan Padang</td>
                                                        <td>: <?= ($v['masakan_padang']) ?></td>
                                                    </tr>
                                                </table> 
                                            </td>

                                        <td width="300px;">
                                            <table style="width:100%;">
                                                <tr>
                                                    <td>Bar</td>
                                                    <td>: <?= $bar = ($v['bar']=='Ya')?'Ya':'Tidak' ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Bawa Pulang</td>
                                                    <td>: <?= $bawa_pulang = ($v['bawa_pulang']=='Ya')?'Ya':'Tidak' ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Kursi Roda</td>
                                                    <td>: <?= $kursi_roda = ($v['kursi_roda']=='Ya')?'Ya':'Tidak' ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Kursi Tinggi</td>
                                                    <td>: <?= $kursi_tinggi = ($v['kursi_tinggi']=='Ya')?'Ya':'Tidak' ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Musik Live</td>
                                                    <td>: <?= $musik_live = ($v['musik_live']=='Ya')?'Ya':'Tidak' ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Parkir</td>
                                                    <td>: <?= $parkir = ($v['parkir']=='Ya')?'Ya':'Tidak' ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Pintu Kursi Roda</td>
                                                    <td>: <?= $pintu_kursi_roda = ($v['pintu_kursi_roda']=='Ya')?'Ya':'Tidak' ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Ruang VIP</td>
                                                    <td>: <?= $ruang_vip = ($v['ruang_vip']=='Ya')?'Ya':'Tidak' ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Tempat Duduk Diatap</td>
                                                    <td>: <?= $tempat_duduk_diatap = ($v['tempat_duduk_diatap']=='Ya')?'Ya':'Tidak' ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Tempat Duduk Terbuka</td>
                                                    <td>: <?= $tempat_duduk_terbuka = ($v['tempat_duduk_terbuka']=='Ya')?'Ya':'Tidak' ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Tempat Nonton Bareng</td>
                                                    <td>: <?= $tempat_nonton_bareng = ($v['tempat_nonton_bareng']=='Ya')?'Ya':'Tidak' ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Toilet</td>
                                                    <td>: <?= $toilet = ($v['toilet']=='Ya')?'Ya':'Tidak' ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Toilet Kursi Roda</td>
                                                    <td>: <?= $toilet_kursi_roda = ($v['toilet_kursi_roda']=='Ya')?'Ya':'Tidak' ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Wifi</td>
                                                    <td>: <?= $wifi = ($v['wifi']=='Ya')?'Ya':'Tidak' ?></td>
                                                </tr>
                                            </table>
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
                        </form>                
                        
                    </div>
                </div>                                                
            </div>
        </div>                        
    </div>
    <!-- END PAGE CONTENT WRAPPER -->   
<?= $this->endSection() ?>  