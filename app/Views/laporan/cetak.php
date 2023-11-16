<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>


  <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap" style="text-align:center">                    
        <!-- START WIDGETS -->                                                                
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>CETAK</h2>
                        <img src="https://png.pngtree.com/png-vector/20220528/ourmid/pngtree-supermarket-logo-with-shopping-cart-png-image-png-image_4744377.png" width="50px">
                        <br>

                        SUPERMARKET RAIHAN MUKTI
                        
                        <br>JL. JENDRAL NO. 1, KEL.LABUH BARU, KEC. PAYUNG SEKAKI, KOTA PEKANBARU, 28292
                                                        <br>"CASH OUT"

                        <br>Nama Kasir : Nadlyne Aurora
                        <br>Bulan : Januari
                                   
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-actions">
                                    <thead>
                                        <tr>
                                            <th width="50">#</th>
                                            <th class="text-center">Tanggal</th>
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
                                            <td class="text-center"><?= $v['tanggal'] ?></td>
                                            <td><?= $v['jumlah'] ?></td>
                                            <td><?= $v['total'] ?></td>
                                            
                                        </tr>
                                        <?php
                                            
                                        }
                                        ?>
                                        <tr id="trow_<?= $no ?>">
                                            <td class="text-center"></td>
                                            <td class="text-center">Kalkulasi</td>
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

    <script>
        window.print();
    </script>
    <!-- END PAGE CONTENT WRAPPER -->   
