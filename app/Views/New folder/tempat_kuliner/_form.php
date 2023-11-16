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
                <form class="form-horizontal" method="POST" action="<?= base_url('/'.$url) ?>">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong><?= $judul ?></strong></h3>
                            <input type="hidden" name="<?= $key ?>" value="<?= $id ?>" class="form-control"/>
                        </div>
                        <div class="col-md-12">
                            <div class="panel-body form-group-separated">          
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Nama</label>
                                    <div class="col-md-6 col-xs-12 control-label">     
                                        <div class="input-group">
                                            <input type="text" name="nama" value="<?= $model['nama'] ?>" class="form-control" autofocus/>
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        </div>
                                    </div>
                                </div>        
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="panel-body form-group-separated">          
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Harga</label>
                                    <div class="col-md-6 col-xs-12 control-label">     
                                        <select class="form-control select" name="harga">
                                            <?php 
                                                // print_r($modelSubKriteria[8]);
                                                foreach ($modelSubKriteria[8] as $key => $value) :
                                            ?>
                                                    <option value="<?= $value['bobot'] ?>"><?= $value['nama_subkriteria'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>        
                            </div>
                        </div>
                        <!-- <div class="col-md-12">
                            <div class="panel-body form-group-separated">          
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Rasa</label>
                                    <div class="col-md-6 col-xs-12 control-label">     
                                        <div class="input-group">
                                            <input type="text" name="rasa" value="<?= $model['rasa'] ?>" class="form-control" autofocus/>
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        </div>
                                    </div>
                                </div>        
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="panel-body form-group-separated">          
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Pelayanan</label>
                                    <div class="col-md-6 col-xs-12 control-label">     
                                        <div class="input-group">
                                            <input type="text" name="pelayanan" value="<?= $model['pelayanan'] ?>" class="form-control" autofocus/>
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        </div>
                                    </div>
                                </div>        
                            </div>
                        </div> -->
                        <div class="col-md-12">
                            <div class="panel-body form-group-separated">          
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Lokasi</label>
                                    <div class="col-md-6 col-xs-12 control-label">     
                                        <div class="input-group">
                                            <input type="text" name="lokasi" value="<?= $model['lokasi'] ?>" class="form-control" autofocus/>
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        </div>
                                    </div>
                                </div>        
                            </div>
                        </div>
                       <!--  <div class="col-md-12">
                            <div class="panel-body form-group-separated">          
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Waktu</label>
                                    <div class="col-md-6 col-xs-12 control-label">     
                                        <div class="input-group">
                                            <input type="text" name="waktu" value="<?= $model['waktu'] ?>" class="form-control" autofocus/>
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        </div>
                                    </div>
                                </div>        
                            </div>
                        </div> -->
                        <div class="col-md-12">
                            <div class="panel-body form-group-separated">          
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Kopi</label>
                                    <div class="col-md-6 col-xs-12 control-label">     
                                        <select class="form-control select" name="kopi">
                                            <option value="Ya">Ya</option>
                                            <option value="">Tidak</option>
                                        </select>
                                </div>        
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="panel-body form-group-separated">          
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Masakan Tradisional</label>
                                    <div class="col-md-6 col-xs-12 control-label">     
                                        <select class="form-control select" name="masakan_tradisional">
                                            <option value="Ya">Ya</option>
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>        
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="panel-body form-group-separated">          
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Masakan Jepang</label>
                                    <div class="col-md-6 col-xs-12 control-label">     
                                        <select class="form-control select" name="masakan_jepang">
                                            <option value="Ya">Ya</option>
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>        
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="panel-body form-group-separated">          
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Aneka Mie</label>
                                    <div class="col-md-6 col-xs-12 control-label">     
                                        <select class="form-control select" name="aneka_mie">
                                            <option value="Ya">Ya</option>
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>        
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="panel-body form-group-separated">          
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Aneka Nasi</label>
                                    <div class="col-md-6 col-xs-12 control-label">     
                                        <select class="form-control select" name="aneka_nasi">
                                            <option value="Ya">Ya</option>
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>        
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="panel-body form-group-separated">          
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Jus</label>
                                    <div class="col-md-6 col-xs-12 control-label">     
                                        <select class="form-control select" name="jus">
                                            <option value="Ya">Ya</option>
                                            <option value="">Tidak</option>
                                        </select>
                                </div>        
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="panel-body form-group-separated">          
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Milkshake</label>
                                    <div class="col-md-6 col-xs-12 control-label">     
                                        <select class="form-control select" name="milkshake">
                                            <option value="Ya">Ya</option>
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>        
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="panel-body form-group-separated">          
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Teh</label>
                                    <div class="col-md-6 col-xs-12 control-label">     
                                        <select class="form-control select" name="teh">
                                            <option value="Ya">Ya</option>
                                            <option value="">Tidak</option>
                                        </select>
                                </div>        
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="panel-body form-group-separated">          
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Masakan Padang</label>
                                    <div class="col-md-6 col-xs-12 control-label">     
                                        <select class="form-control select" name="masakan_padang">
                                            <option value="Ya">Ya</option>
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>        
                            </div>
                        </div>

                       

                        <div class="col-md-12">
                            <div class="panel-body form-group-separated">          
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Bar</label>
                                    <div class="col-md-6 col-xs-12 control-label">     
                                        <select class="form-control select" name="bar">
                                            <option value="Ya">Ya</option>
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>        
                            </div>
                        </div><div class="col-md-12">
                            <div class="panel-body form-group-separated">          
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Bawa Pulang</label>
                                    <div class="col-md-6 col-xs-12 control-label">     
                                        <select class="form-control select" name="bawa_pulang">
                                            <option value="Ya">Ya</option>
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>        
                            </div>
                        </div><div class="col-md-12">
                            <div class="panel-body form-group-separated">          
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Kursi Roda</label>
                                    <div class="col-md-6 col-xs-12 control-label">     
                                        <select class="form-control select" name="kursi_roda">
                                            <option value="Ya">Ya</option>
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>        
                            </div>
                        </div><div class="col-md-12">
                            <div class="panel-body form-group-separated">          
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Kursi Tinggi</label>
                                    <div class="col-md-6 col-xs-12 control-label">     
                                        <select class="form-control select" name="kursi_tinggi">
                                            <option value="Ya">Ya</option>
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>        
                            </div>
                        </div><div class="col-md-12">
                            <div class="panel-body form-group-separated">          
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Musik Live</label>
                                    <div class="col-md-6 col-xs-12 control-label">     
                                        <select class="form-control select" name="musik_live">
                                            <option value="Ya">Ya</option>
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>        
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="panel-body form-group-separated">          
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Parkir</label>
                                    <div class="col-md-6 col-xs-12 control-label">     
                                        <select class="form-control select" name="parkir">
                                            <option value="Ya">Ya</option>
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>        
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="panel-body form-group-separated">          
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Pintu Kursi Roda</label>
                                    <div class="col-md-6 col-xs-12 control-label">     
                                        <select class="form-control select" name="pintu_kursi_roda">
                                            <option value="Ya">Ya</option>
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>        
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="panel-body form-group-separated">          
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Ruang VIP</label>
                                    <div class="col-md-6 col-xs-12 control-label">     
                                        <select class="form-control select" name="ruang_vip">
                                            <option value="Ya">Ya</option>
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>        
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="panel-body form-group-separated">          
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Tempat Duduk Diatap</label>
                                    <div class="col-md-6 col-xs-12 control-label">     
                                        <select class="form-control select" name="tempat_duduk_diatap">
                                            <option value="Ya">Ya</option>
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>        
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="panel-body form-group-separated">          
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Tempat Duduk Terbuka</label>
                                    <div class="col-md-6 col-xs-12 control-label">     
                                        <select class="form-control select" name="tempat_duduk_terbuka">
                                            <option value="Ya">Ya</option>
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>        
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="panel-body form-group-separated">          
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Tempat Nonton Bareng</label>
                                    <div class="col-md-6 col-xs-12 control-label">     
                                        <select class="form-control select" name="tempat_nonton_bareng">
                                            <option value="Ya">Ya</option>
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>        
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="panel-body form-group-separated">          
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Toilet</label>
                                    <div class="col-md-6 col-xs-12 control-label">     
                                        <select class="form-control select" name="toilet">
                                            <option value="Ya">Ya</option>
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>        
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="panel-body form-group-separated">          
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Toilet Kursi Roda</label>
                                    <div class="col-md-6 col-xs-12 control-label">     
                                        <select class="form-control select" name="toilet_kursi_roda">
                                            <option value="Ya">Ya</option>
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>        
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="panel-body form-group-separated">          
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Wifi</label>
                                    <div class="col-md-6 col-xs-12 control-label">     
                                        <select class="form-control select" name="wifi">
                                            <option value="Ya">Ya</option>
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>        
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="panel-body form-group-separated">          
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Latitude</label>
                                    <div class="col-md-6 col-xs-12 control-label">     
                                        <div class="input-group">
                                            <input type="text" name="lat" value="<?= $model['lat'] ?>" class="form-control" autofocus/>
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        </div>
                                    </div>
                                </div>        
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="panel-body form-group-separated">          
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Longitude</label>
                                    <div class="col-md-6 col-xs-12 control-label">     
                                        <div class="input-group">
                                            <input type="text" name="lon" value="<?= $model['lon'] ?>" class="form-control" autofocus/>
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        </div>
                                    </div>
                                </div>        
                            </div>
                        </div>
                        <div class="panel-footer">
                            <!-- <button class="btn btn-default">Kembali</button>                                     -->
                            <input type="submit" value="SIMPAN" class="btn btn-primary pull-right">
                        </div>
                    </div>
                </form>                        
            </div>
        </div>                        
    </div>
    <!-- END PAGE CONTENT WRAPPER -->                                
<?= $this->endSection() ?>
