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
                        <!-- <a href="<?= base_url('/'.$url.'/tambah')?>" class="btn btn-primary pull-right"> Tambah <?= $judul ?></a> -->

                        <h4><?= $judul ?></h4>
                    </div>
                    <div class="panel-body panel-body-table">
                        <h1 align="center">Hasil Diagnosa</h1>
                        <p align="center">Sistem Pakar Diagnosa Kecanduan Game</p`>
                        &nbsp;
                        <div class="table-responsive">
                            <!-- <h2>Proses</h2> -->
                            <table class="table table-bordered table-striped table-actions" style="display: none;">
                                <thead>
                                    <tr>
                                        <th width="50">#</th>
                                        <th>Gejala</th>
                                    </tr>
                                </thead>
                                <tbody>                                            
                                    <?php 
                                    $no=0;
                                    // print_r($modelInput);exit;
                                    foreach ($modelInput as $k=>$v) {
                                        $no++;
                                    ?>

                                    <tr id="trow_<?= $no ?>">
                                        <td class="text-center"><?= $no ?></td>
                                        <td><?php echo $v; ?></td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div> 

                         <div class="table-responsive">
                            <!-- <h2>Proses</h2> -->
                            <table class="table table-bordered table-striped table-actions" style="display:none;">
                                <thead>
                                    <tr>
                                        <th width="50">#</th>
                                        <th>Jenis</th>
                                    </tr>
                                </thead>
                                <tbody>                                            
                                    <?php 
                                    $no=0;
                                        $rule_hasil = [];
                                    foreach ($modelRule as $k=>$v) {
                                        $no++;
                                    ?>
                                        <!-- <td> -->
                                            <?php 
                                                // echo $v['nama_jenis'];
                                                $rule = $v['rule'];
                                                $arr_rule = explode(',', $rule);
                                                $hasil = false;
                                                foreach ($arr_rule as $key => $value) {
                                                // echo '<br>';
                                                    // echo $value;
                                                    foreach ($modelInput as $k=>$value_gejala) {
                                                        if($value_gejala == $value){
                                                            // echo ' benar';
                                                            $rule_hasil[] = $v['jenis'];
                                                            $hasil = true;
                                                            break(2);
                                                        }
                                                    }
                                                    // echo '<br>';
                                                }
                                            ?>        
                                        <!-- </td> -->

                                        <?php if($hasil): ?>
                                            <tr id="trow_<?= $no ?>">
                                                <td class="text-center"><?= $no ?></td>
                                                <td>
                                                    <?= $v['nama_jenis'] ?>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>

                            
                            <?php $hasil = count($rule_hasil) ?>
                            <h1 align="center">
                                <?php 
                                    $solusi = false;
                                    if($hasil >= 3){
                                        echo 'Kecanduan Game';
                                        $solusi = true;
                                    }else{
                                        echo 'Tidak Kecanduan Game';
                                    }
                                ?>
                            </h1>
                            <h4 align="center">Hasil diagnosa dengan 
                                <?php echo $hasil = count($rule_hasil) ?> Jenis Kecanduan</h4>


                            <table class="table table-bordered table-striped table-actions">
                                <thead>
                                    <tr>
                                        <th width="50">#</th>
                                        <th>Jenis</th>
                                    </tr>
                                </thead>
                                <tbody>                                            
                                    <?php 
                                    $no=0;
                                        $rule_hasil = [];
                                    foreach ($modelRule as $k=>$v) {
                                        $no++;
                                    ?>
                                        <!-- <td> -->
                                            <?php 
                                                // echo $v['nama_jenis'];
                                                $rule = $v['rule'];
                                                $arr_rule = explode(',', $rule);
                                                $hasil = false;
                                                foreach ($arr_rule as $key => $value) {
                                                // echo '<br>';
                                                    // echo $value;
                                                    foreach ($modelInput as $k=>$value_gejala) {
                                                        if($value_gejala == $value){
                                                            // echo ' benar';
                                                            $rule_hasil[] = $v['jenis'];
                                                            $hasil = true;
                                                            break(2);
                                                        }
                                                    }
                                                    // echo '<br>';
                                                }
                                            ?>        
                                        <!-- </td> -->

                                        <?php if($hasil): ?>
                                            <tr id="trow_<?= $no ?>">
                                                <td class="text-center"><?= $no ?></td>
                                                <td>
                                                    <?= $v['nama_jenis'] ?>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>


                            <?php if($solusi): ?>
                                <br>
                                <h4>Solusi yang kami berikan :</h4>
                                <table class="table table-bordered table-striped table-actions">
                                    <thead>
                                        <tr>
                                            <th width="50">#</th>
                                            <th>Solusi</th>
                                        </tr>
                                    </thead>
                                    <tbody>                                            
                                        <?php 
                                        $no=0;
                                        foreach ($modelSolusi as $k=>$v) {
                                            $no++;
                                        ?>
                                        <tr id="trow_<?= $no ?>">
                                            <td class="text-center"><?= $no ?></td>
                                            <td><?php echo $rule = $v['keterangan']; ?></td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            <?php endif; ?>
                        </div> 
                        
                    </div>
                </div>                                                
            </div>
        </div>                        
    </div>
    <!-- END PAGE CONTENT WRAPPER -->   
<?= $this->endSection() ?>  