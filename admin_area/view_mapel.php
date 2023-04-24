<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>
<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active"><i class="fa fa-dashboard"></i>
                Dashboard / Lihat Data Mapel
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
                                <th> ID </th>
                                <th> Nama Mata Pelajaran </th>
                                
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
          
                            
                                $get_mapel = "SELECT * From tbl_mata_pelajaran";
                
                                $run_mapel = mysqli_query($koneksi,$get_mapel);
          
                                while($row_mapel=mysqli_fetch_array($run_mapel)){
                                    
                                  $id_mapel = $row_mapel['id_mk'];
                                  $nama_mapel = $row_mapel['nama_mapel'];
                            
                            ?>
                            
                                <tr><!-- tr begin -->
                                    <td> <?php echo $id_mapel; ?> </td>
                                    <td> <?php echo $nama_mapel; ?> </td>                 
                                    <td> 
                                        
                                        <a href="index.php?delete_mapel=<?php echo $id_mapel; ?>">
                                        
                                            <i class="fa fa-trash"></i> Delete
                                        
                                        </a> 
                                        
                                    </td>
                                    <td> 
                                        
                                        <a href="index.php?edit_mapel=<?php echo $id_mapel; ?>">
                                        
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