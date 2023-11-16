<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
    <ul class="breadcrumb">
        <li><a href="<?= base_url('/dashboard')?>">Home</a></li>
        <li><a href="<?= base_url('/lokasi')?>">Lokasi</a></li>
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
                                    <label class="col-md-3 col-xs-12 control-label">Nama Alternatif</label>
                                    <div class="col-md-6 col-xs-12 control-label">     
                                        <div class="input-group">
                                            <input type="text" name="nama_alternatif" value="<?= $model['nama_alternatif'] ?>" class="form-control" autofocus/>
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        </div>
                                    </div>
                                </div>       
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Modal Awal</label>
                                    <div class="col-md-6 col-xs-12 control-label">     
                                        <div class="input-group">
                                            <input type="text" name="modal_awal" value="<?= $model['modal_awal'] ?>" class="form-control" autofocus/>
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        </div>
                                    </div>
                                </div>       
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Pengeluaran Perbulan</label>
                                    <div class="col-md-6 col-xs-12 control-label">     
                                        <div class="input-group">
                                            <input type="text" name="pengeluaran_perbulan" value="<?= $model['pengeluaran_perbulan'] ?>" class="form-control" autofocus/>
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        </div>
                                    </div>
                                </div>       
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Penghasilan Perbulan</label>
                                    <div class="col-md-6 col-xs-12 control-label">     
                                        <div class="input-group">
                                            <input type="text" name="penghasilan_perbulan" value="<?= $model['penghasilan_perbulan'] ?>" class="form-control" autofocus/>
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        </div>
                                    </div>
                                </div>       
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Pesaing</label>
                                    <div class="col-md-6 col-xs-12 control-label">     
                                        <div class="input-group">
                                            <input type="text" name="pesaing" value="<?= $model['pesaing'] ?>" class="form-control" autofocus/>
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        </div>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Peminat</label>
                                    <div class="col-md-6 col-xs-12 control-label">     
                                        <div class="input-group">
                                            <input type="text" name="peminat" value="<?= $model['peminat'] ?>" class="form-control" autofocus/>
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
