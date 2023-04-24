<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active"><i class="fa fa-dashboard"></i>
                Dashboard / Lihat Data Ekskul
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
                                <th> Id Ekskul </th>
                                <th> Nama Ekskul  </th>
                                <th> Gambar Ekskul </th>
                                
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
          
                            
                                $get_ekskul = "SELECT * From tbl_ekskul";
                
                                $run_ekskul = mysqli_query($koneksi,$get_ekskul);
          
                                while($row_ekskul=mysqli_fetch_array($run_ekskul)){
                                    
                                  $id_ekskul = $row_ekskul['id_ekskul'];
                                  $nama_ekskul = $row_ekskul['nama_ekskul'];
                                  $gambar_ekskul=$row_ekskul['ekskul_img'];
                                 
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $id_ekskul; ?> </td>
                                <td> <?php echo $nama_ekskul; ?> </td>
                                <td> <img src="../images/ekskul/<?php echo $gambar_ekskul; ?>" width="360" height="360"></td>    
                                <td> 
                                     
                                     <a href="index.php?delete_ekskul=<?php echo $id_ekskul; ?>">
                                     
                                        <i class="fa fa-trash-o"></i> Delete
                                    
                                     </a> 
                                     
                                </td>
                                <td> 
                                     
                                     <a href="index.php?edit_ekskul=<?php echo $id_ekskul; ?>">
                                     
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