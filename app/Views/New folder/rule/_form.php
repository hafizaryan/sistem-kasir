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
                                    <label class="col-md-3 col-xs-12 control-label">Kode Rule</label>
                                    <div class="col-md-6 col-xs-12 control-label">     
                                        <div class="input-group">
                                            <input type="text" name="kode_rule" value="<?= $model['kode_rule'] ?>" class="form-control" autofocus/>
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        </div>
                                    </div>
                                </div>        
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="panel-body form-group-separated">          
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Rule</label>
                                    <div class="col-md-6 col-xs-12 control-label">     
                                        <div class="input-group">
                                            <input type="text" name="rule" value="<?= $model['rule'] ?>" class="form-control" autofocus/>
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        </div>
                                    </div>
                                </div>        
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="panel-body form-group-separated">          
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Jenis</label>
                                    <div class="col-md-6 col-xs-12 control-label">     
                                        <select class="form-control select" name="jenis">
                                            <?php 
                                                foreach ($modelJenis as $key => $value) :
                                            ?>
                                                    <option value="<?= $value['id_jenis'] ?>"><?= $value['kode_jenis'] ?> - <?= $value['nama_jenis'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
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
