<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">
        
        <!-- START WIDGETS -->                                                                
        <div class="row">
            <div class="col-md-12">                            
                <form class="form-horizontal" method="POST" action="<?= base_url('/'.$url) ?>">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Tambah</strong> <?= $judul; ?></h3>
                        </div>

                        <div class="col-md-12">
                            <div class="panel-body">
                                <p>Pangkat/ Golongan</p>
                                <input type="hidden" name="id" value="<?= $id ?>" class="form-control"/>
                            </div>
                            <div class="panel-body form-group-separated">
                                <div class="form-group">
                                    <div class="col-md-6 col-xs-12 control-label">               
                                        <div class="input-group">
                                            <input type="hidden" name="id_user" value="<?= $model['id_user'] ?>" class="form-control"/>
                                        </div>                                            
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body form-group-separated">
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Username</label>
                                    <div class="col-md-6 col-xs-12 control-label">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                            <input type="text" name="username" value="<?= $modelUser['username'] ?>" class="form-control" autofocus/>
                                        </div>                                              
                                    </div>
                                </div>                           
                            </div>

                            <div class="panel-body form-group-separated">
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Nama Peserta</label>
                                    <div class="col-md-6 col-xs-12 control-label">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                            <input type="text" name="nama_peserta" value="<?= $model['nama_peserta'] ?>" class="form-control"/>
                                        </div>                                              
                                    </div>
                                </div>                           
                            </div>
                            <div class="panel-body form-group-separated">
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Jenis Kelamin</label>
                                    <div class="col-md-6 col-xs-12 control-label">                                            
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                            <input type="text" name="jenis_kelamin" value="<?= $model['jenis_kelamin'] ?>" class="form-control"/>
                                        </div>                                              
                                    </div>
                                </div>                           
                            </div>
                            <div class="panel-body form-group-separated">
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">No Hp</label>
                                    <div class="col-md-6 col-xs-12 control-label">                                            
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                            <input type="text" name="no_hp" value="<?= $model['no_hp'] ?>" class="form-control"/>
                                        </div>                                              
                                    </div>
                                </div>                           
                            </div>
                            <div class="panel-body form-group-separated">
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Instansi</label>
                                    <div class="col-md-6 col-xs-12 control-label">                                            
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                            <input type="text" name="instansi" value="<?= $model['instansi'] ?>" class="form-control"/>
                                        </div>                                              
                                    </div>
                                </div>                           
                            </div>
                            <div class="panel-body form-group-separated">
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Judul</label>
                                    <div class="col-md-6 col-xs-12 control-label">                                            
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                            <input type="text" name="judul" value="<?= $model['judul'] ?>" class="form-control"/>
                                        </div>                                              
                                    </div>
                                </div>                           
                            </div>
                            <div class="panel-body form-group-separated">
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Keterangan</label>
                                    <div class="col-md-6 col-xs-12 control-label">                                            
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                            <input type="text" name="keterangan" value="<?= $model['keterangan'] ?>" class="form-control"/>
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
