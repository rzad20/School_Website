<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>
<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active"><i class="fa fa-dashboard"></i>
                Dashboard / Lihat Data Kegiatan
            </li>
        </ol>
    </div>
</div>

<div class="row"> <!----Awal Row 2--->
    <div class="col-lg-12"> <!----Awal Col-Lg-12--->
        <div class="panel panel-default"> <!----Awal Panel Default--->
            <div class="panel-heading">  <!----Awal Panel Heading--->
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> ID Kegiatan</th>
                                <th> Nama Kegiatan </th>
                                <th> Deksripsi </th>
                                <th> Tanggal Kegiatan </th>
                                <th> Gambar </th>
                                
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
          
                            
                                $get_kegiatan = "SELECT * From tbl_kegiatan";
                
                                $run_kegiatan = mysqli_query($koneksi,$get_kegiatan);
          
                                while($row_kegiatan=mysqli_fetch_array($run_kegiatan)){
                                    
                                  $id_kegiatan = $row_kegiatan['id_kegiatan'];
                                  $judul_kegiatan = $row_kegiatan['judul_kegiatan'];
                                  $isi_kegiatan = $row_kegiatan['isi_kegiatan'];
                                  $gambar_kegiatan = $row_kegiatan['gambar_kegiatan'];
                                  $tgl_kegiatan = $row_kegiatan['tgl_kegiatan'];
                                 
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $id_kegiatan; ?> </td>
                                <td> <?php echo $judul_kegiatan; ?> </td>
                                <td> <?php echo $isi_kegiatan; ?> </td>
                                <td> <?php echo $tgl_kegiatan; ?> </td>
                                <td> <img src="../images/kegiatan/<?php echo $gambar_kegiatan; ?>" width="400" height="360"></td>               
                                <td> 
                                     
                                     <a href="index.php?delete_kegiatan=<?php echo $id_kegiatan; ?>">
                                     
                                        <i class="fa fa-trash-o"></i> Delete
                                    
                                     </a> 
                                     
                                </td>
                                <td> 
                                     
                                     <a href="index.php?edit_kegiatan=<?php echo $id_kegiatan; ?>">
                                     
                                        <i class="fa fa-pencil"></i> Edit
                                    
                                     </a> 
                                    
                                </td>
                            </tr><!-- tr finish -->
                            
                            <?php } ?>
                            
                        </tbody><!-- tbody finish -->
                        
                    </table><!-- table table-striped table-bordered table-hover finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->
            </div> <!----Akhir Panel Heading--->
        </div> <!----Akhir Panel Default--->
    </div> <!----Akhir Col-Lg-12--->
</div> <!----Akhir Row 2--->
<?php } ?>