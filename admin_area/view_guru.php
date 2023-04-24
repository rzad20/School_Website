<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>
<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active"><i class="fa fa-dashboard"></i>
                Dashboard / Lihat Data Guru
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
                                <th> NIP </th>
                                <th> Nama Guru </th>
                                <th> Gambar </th>
                                <th> Tanggal Lahir </th>
                                <th>Alamat </th>
                                <th> Mapel Diampu</th>
                                
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
          
                            
                                $get_guru = "SELECT * From data_guru";
                
                                $run_guru = mysqli_query($koneksi,$get_guru);
          
                                while($row_guru=mysqli_fetch_array($run_guru)){
                                    
                                  $nip_guru = $row_guru['Nip_Guru'];
                                  $nama_guru = $row_guru['Nama_Guru'];
                                  $gambar_guru = $row_guru['img_guru'];
                                  $tgl_lahir = $row_guru['Tgl_lahir'];
                                  $alamat = $row_guru['Alamat'];
                                  $id_mapel1 = $row_guru['id_mapel1'];
                                 
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $nip_guru; ?> </td>
                                <td> <?php echo $nama_guru; ?> </td>
                                <td> <img src="../images/wargasekolah/<?php echo $gambar_guru; ?>" width="90" height="110"></td>
                                <td> <?php echo $tgl_lahir; ?> </td>
                                <td> <?php echo $alamat; ?> </td>
                                <td> <?php 
                                    
                                        $get_mapel1 = "SELECT * from tbl_mata_pelajaran where id_mk='$id_mapel1'";
                                    
                                        $run_mapel1 = mysqli_query($koneksi,$get_mapel1);
                                    
                                        $row_mapel1 = mysqli_fetch_array($run_mapel1);
                                        $nama_mapel1 = $row_mapel1['nama_mapel'];
                                        echo $nama_mapel1;
                                    
                                     ?> 
                                </td>                         
                                <td> 
                                     
                                     <a href="index.php?delete_guru=<?php echo $nip_guru; ?>">
                                     
                                        <i class="fa fa-trash-o"></i> Delete
                                    
                                     </a> 
                                     
                                </td>
                                <td> 
                                     
                                     <a href="index.php?edit_guru=<?php echo $nip_guru; ?>">
                                     
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