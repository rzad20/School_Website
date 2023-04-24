<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>
<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active"><i class="fa fa-dashboard"></i>
                Dashboard / Lihat Data Kepsek
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
                                <th> Nama Guru </th>
                                <th> Jabatan </th>
                                
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
          
                            
                                $get_kepsek = "SELECT * From kepala_sekolah";
                
                                $run_kepsek = mysqli_query($koneksi,$get_kepsek);
          
                                while($row_kepsek=mysqli_fetch_array($run_kepsek)){
                                    
                                  $id = $row_kepsek['id'];
                                  $nip_guru = $row_kepsek['nip_guru'];
                                  $jabatan = $row_kepsek['Jabatan'];
                            
                            ?>
                            
                                <tr><!-- tr begin -->
                                    <td> <?php echo $id; ?> </td>
                                    <td> <?php 
                                        
                                            $get_kepsek = "SELECT * from data_guru where Nip_Guru='$nip_guru'";
                                        
                                            $run_kepsek = mysqli_query($koneksi,$get_kepsek);
                                        
                                            $row_kepsek = mysqli_fetch_array($run_kepsek);
                                            $nama_kepsek = $row_kepsek['Nama_Guru'];
                                            echo $nama_kepsek;
                                        
                                        ?> 
                                    </td>         
                                    <td> <?php echo $jabatan; ?> </td>                
                                    <td> 
                                        
                                        <a href="index.php?delete_product=<?php echo $id; ?>">
                                        
                                            <i class="fa fa-trash-o"></i> Delete
                                        
                                        </a> 
                                        
                                    </td>
                                    <td> 
                                        
                                        <a href="index.php?edit_product=<?php echo $id; ?>">
                                        
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