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
                                        <div class="input-group">
                                            <input type="text" name="harga" value="<?= $model['harga'] ?>" class="form-control" autofocus/>
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        </div>
                                    </div>
                                </div>        
                            </div>
                        </div>
                        <div class="col-md-12">
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
                        </div>
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
                        <div class="col-md-12">
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
                        </div>
                        <div class="col-md-12">
                            <div class="panel-body form-group-separated">          
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Kopi</label>
                                    <div class="col-md-6 col-xs-12 control-label">     
                                        <div class="input-group">
                                            <input type="text" name="kopi" value="<?= $model['kopi'] ?>" class="form-control" autofocus/>
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        </div>
                                    </div>
                                </div>        
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="panel-body form-group-separated">          
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Masakan Tradisional</label>
                                    <div class="col-md-6 col-xs-12 control-label">     
                                        <div class="input-group">
                                            <input type="text" name="masakan_tradisional" value="<?= $model['masakan_tradisional'] ?>" class="form-control" autofocus/>
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        </div>
                                    </div>
                                </div>        
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="panel-body form-group-separated">          
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Masakan Jepang</label>
                                    <div class="col-md-6 col-xs-12 control-label">     
                                        <div class="input-group">
                                            <input type="text" name="masakan_jepang" value="<?= $model['masakan_jepang'] ?>" class="form-control" autofocus/>
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        </div>
                                    </div>
                                </div>        
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="panel-body form-group-separated">          
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Aneka Mie</label>
                                    <div class="col-md-6 col-xs-12 control-label">     
                                        <div class="input-group">
                                            <input type="text" name="aneka_mie" value="<?= $model['aneka_mie'] ?>" class="form-control" autofocus/>
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        </div>
                                    </div>
                                </div>        
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="panel-body form-group-separated">          
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Aneka Nasi</label>
                                    <div class="col-md-6 col-xs-12 control-label">     
                                        <div class="input-group">
                                            <input type="text" name="aneka_nasi" value="<?= $model['aneka_nasi'] ?>" class="form-control" autofocus/>
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        </div>
                                    </div>
                                </div>        
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="panel-body form-group-separated">          
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Jus</label>
                                    <div class="col-md-6 col-xs-12 control-label">     
                                        <div class="input-group">
                                            <input type="text" name="jus" value="<?= $model['jus'] ?>" class="form-control" autofocus/>
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        </div>
                                    </div>
                                </div>        
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="panel-body form-group-separated">          
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Milkshake</label>
                                    <div class="col-md-6 col-xs-12 control-label">     
                                        <div class="input-group">
                                            <input type="text" name="milkshake" value="<?= $model['milkshake'] ?>" class="form-control" autofocus/>
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        </div>
                                    </div>
                                </div>        
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="panel-body form-group-separated">          
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Teh</label>
                                    <div class="col-md-6 col-xs-12 control-label">     
                                        <div class="input-group">
                                            <input type="text" name="teh" value="<?= $model['teh'] ?>" class="form-control" autofocus/>
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        </div>
                                    </div>
                                </div>        
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="panel-body form-group-separated">          
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Masakan Padang</label>
                                    <div class="col-md-6 col-xs-12 control-label">     
                                        <div class="input-group">
                                            <input type="text" name="masakan_padang" value="<?= $model['masakan_padang'] ?>" class="form-control" autofocus/>
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
