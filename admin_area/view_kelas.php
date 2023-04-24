<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>
<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active"><i class="fa fa-dashboard"></i>
                Dashboard / Lihat Data Kelas
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
                                <th> Nama Kelas </th>
                                <th> Nama Wali Kelas </th>
                                
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
          
                            
                                $get_kelas = "SELECT * From tbl_kelas";
                
                                $run_kelas = mysqli_query($koneksi,$get_kelas);
          
                                while($row_kelas=mysqli_fetch_array($run_kelas)){
                                    
                                  $id_kelas = $row_kelas['id_kelas'];
                                  $nama_kelas = $row_kelas['nama_kelas'];
                                  $id_wali_kelas = $row_kelas['id_wali_kelas'];
                            
                            ?>
                            
                                <tr><!-- tr begin -->
                                    <td> <?php echo $id_kelas; ?> </td>
                                    <td> <?php echo $nama_kelas; ?> </td>
                                    <td> <?php 
                                        
                                            $get_walkel = "SELECT * from data_guru where Nip_Guru='$id_wali_kelas'";
                                        
                                            $run_walkel = mysqli_query($koneksi,$get_walkel);
                                        
                                            $row_walkel = mysqli_fetch_array($run_walkel);
                                            $nama_walkel = $row_walkel['Nama_Guru'];
                                            echo $nama_walkel;
                                        
                                        ?> 
                                    </td>                    
                                    <td> 
                                        
                                        <a href="index.php?delete_kelas=<?php echo $id_kelas; ?>">
                                        
                                            <i class="fa fa-trash"></i> Delete
                                        
                                        </a> 
                                        
                                    </td>
                                    <td> 
                                        
                                        <a href="index.php?edit_kelas=<?php echo $id_kelas; ?>">
                                        
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