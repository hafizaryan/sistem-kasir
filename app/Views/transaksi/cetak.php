<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap"style="text-align:center">                    
        <!-- START WIDGETS -->                                                                
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>CETAK</h2>
                        <img src="https://png.pngtree.com/png-vector/20220528/ourmid/pngtree-supermarket-logo-with-shopping-cart-png-image-png-image_4744377.png" width="50px">
                        <br>

                        SUPERMARKET NASYA
                        
                        <br>JL. JENDRAL NO. 1, KEL.LABUH BARU, KEC. PAYUNG SEKAKI, KOTA PEKANBARU, 28292
                                                        <br>"CASH OUT"

                        <br>Nama Kasir : Nadlyne Aurora
                        <br>Tanggal : 2023-01-03 13:27:00
                        
                        <div class="table-responsive" style="text-align:center">
                            <table class="table table-bordered table-striped table-actions" style="display:inline" border="0">
                                <thead>
                                    <tr>
                                        <th width="50">#</th>
                                        <th>Nama Barang</th>
                                        <th>Jumlah</th>
                                        <th>Harga</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>                                            
                                    <?php 
                                    $no=0;
                                    $jumlah =0;
                                    $total=0;
                                    foreach ($model as $v) {
                                        $no++;
                                        $jumlah =$jumlah+$v['jumlah'];
                                        $total=$total+($v['jumlah'] * $v['harga']);
                                    ?>

                                    <tr id="trow_<?= $no ?>">
                                        <td class="text-center"><?= $no ?></td>
                                        <td><?= $v['nama_barang'] ?></td>
                                        <td><?= $v['jumlah'] ?></td>
                                        <td><?= number_format ($v['harga']) ?></td>
                                        <td><?php echo number_format ($v['jumlah'] * $v['harga']) ?></td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                    <tr>
                                    <th></th>
                                    <th>Total</th>
                                    <th><?php echo $jumlah?></th>
                                    <th></th>
                                    <th>Rp.<?php echo number_format ($total); ?></th>
                                    </tr>
                                </tbody>
                            </table>
                            <h2>THANK YOU FOR YOUR SHOPPING</h2>
                        </div> 
                    
                </div>                                                
            </div>
        </div>                        
    </div>

    <script>
        window.print();
    </script>
    <!-- END PAGE CONTENT WRAPPER -->   
 