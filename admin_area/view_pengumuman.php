<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>
<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active"><i class="fa fa-dashboard"></i>
                Dashboard / Lihat Data Pengumuman
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
                                <th> ID Pengumuman</th>
                                <th> Nama Pengumuman </th>
                                <th> Deksripsi </th>
                                <th> Gambar </th>
                                
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
          
                            
                                $get_pengumuman = "SELECT * From pengumuman";
                
                                $run_pengumuman = mysqli_query($koneksi,$get_pengumuman);
          
                                while($row_pengumuman=mysqli_fetch_array($run_pengumuman)){
                                    
                                  $id_pengumuman = $row_pengumuman['id_pengumuman'];
                                  $judul_pengumuman = $row_pengumuman['judul_pengumuman'];
                                  $isi_pengumuman = $row_pengumuman['isi_pengumuman'];
                                  $gambar_pengumuman = $row_pengumuman['gambar_pengumuman'];
                                 
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $id_pengumuman; ?> </td>
                                <td> <?php echo $judul_pengumuman; ?> </td>
                                <td> <?php echo $isi_pengumuman; ?> </td>
                                <td> <img src="../images/pengumuman/<?php echo $gambar_pengumuman; ?>" width="400" height="360"></td>               
                                <td> 
                                     
                                     <a href="index.php?delete_pengumuman=<?php echo $id_pengumuman; ?>">
                                     
                                        <i class="fa fa-trash-o"></i> Delete
                                    
                                     </a> 
                                     
                                </td>
                                <td> 
                                     
                                     <a href="index.php?edit_pengumuman=<?php echo $id_pengumuman; ?>">
                                     
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