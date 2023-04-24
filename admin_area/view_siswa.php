<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>
<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active"><i class="fa fa-dashboard"></i>
                Dashboard / Lihat Data Siswa
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
                                <th> NIS </th>
                                <th> Nama Siswa </th>
                                <th> Gambar </th>
                                <th> Tanggal Lahir </th>
                                <th>Alamat </th>
                                <th>Jenis Kelamin</th>
                                <th> Kelas</th>
                                
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
          
                            
                                $get_siswa = "SELECT * From tabel_siswa";
                
                                $run_siswa = mysqli_query($koneksi,$get_siswa);
          
                                while($row_siswa=mysqli_fetch_array($run_siswa)){
                                    
                                  $nis_siswa = $row_siswa['NIS'];
                                  $nama_siswa = $row_siswa['Nama_Siswa'];
                                  $gambar_siswa = $row_siswa['Siswa_img'];
                                  $tgl_lahir = $row_siswa['Tgl_Lahir'];
                                  $alamat = $row_siswa['alamat'];
                                  $jk_kelamin = $row_siswa['jenis_kelamin'];
                                  $id_kelas = $row_siswa['Id_Kelas'];
                                 
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $nis_siswa; ?> </td>
                                <td> <?php echo $nama_siswa; ?> </td>
                                <td> <img src="../images/siswa/<?php echo $gambar_siswa; ?>" width="90" height="110"></td>
                                <td> <?php echo $tgl_lahir; ?> </td>
                                <td> <?php echo $alamat; ?> </td>
                                <td> <?php echo $jk_kelamin; ?> </td>
                                <td> <?php 
                                    
                                        $get_kelas = "SELECT * from tbl_kelas where id_kelas='$id_kelas'";
                                    
                                        $run_kelas = mysqli_query($koneksi,$get_kelas);
                                    
                                        $row_kelas = mysqli_fetch_array($run_kelas);
                                        $nama_kelas = $row_kelas['nama_kelas'];
                                        echo $nama_kelas;
                                    
                                     ?> 
                                </td>                         
                                <td> 
                                     
                                     <a href="index.php?delete_siswa=<?php echo $nis_siswa; ?>">
                                     
                                        <i class="fa fa-trash-o"></i> Delete
                                    
                                     </a> 
                                     
                                </td>
                                <td> 
                                     
                                     <a href="index.php?edit_siswa=<?php echo $nis_siswa; ?>">
                                     
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
<?php 
    
                                }

?>