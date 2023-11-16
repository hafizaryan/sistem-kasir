<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">
        
        <!-- START WIDGETS -->                                        
            
        <div class="row">
            <div class="col-md-12">                            
                <form class="form-horizontal" method="POST" action="<?= base_url('/'.$url) ?>">
                    <?= csrf_field() ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?= $judul ?></h3>
                        </div>                                 
                        <div class="col-md-12">
                            <div class="panel-body">
                            </div>
                            <div class="panel-body form-group-separated">

                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Username</label>
                                    <div class="col-md-6 col-xs-12 control-label">             
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                            <input type="hidden" name="id_user" value="<?= $model['id_user'] ?>" class="form-control" autofocus=""/>
                                            <input type="text" name="username" value="<?= $model['username'] ?>" class="form-control" autofocus=""/>
                                        </div>                                 
                                    </div>
                                </div>                                              
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Nama Pengguna</label>
                                    <div class="col-md-6 col-xs-12 control-label">             
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                            <input type="text" name="nama_user" value="<?= $model['nama_user'] ?>" class="form-control"/>
                                        </div>                                 
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Password</label>
                                    <div class="col-md-6 col-xs-12 control-label">             
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                            <input type="password" name="password" value=""  class="form-control"/>
                                        </div>                                 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="status_user" value="1"  class="form-control"/>
                                    <label class="col-md-3 col-xs-12 control-label">Level Akses</label>
                                    <div class="col-md-6 col-xs-12 control-label">             
                                        <select class="form-control select" name="level_user">
                                            <?php if(isset( $model['level_user'])): ?>
                                                <option value="<?= $model['level_user'] ?>"><?= ucfirst($model['level_user']) ?></option>
                                            <?php endif; ?>
                                            <option value="admin">Admin</option>
                                            <option value="pimpinan">Pimpinan</option>
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
