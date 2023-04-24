<?php
 include('parsial/header.php');
 include('parsial/database.php');
?>
<section id="teacher">
    <div class="container-fluid"> <!--Awal Container Fluid-->
        <div class="container"> <!--Awal Container-->

            <div class="row" data-aos="fade-up" data-aos-duration="800"> <!--Awal row 1-->
                <h4 class="page-title object mt-4 mb-4 text-center" > Guru dan Staff </h4>
            </div > <!--Akhir Row 1-->

            <div class="row text-center">  <!--Awal row 2-->
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
                        $get_mapel1 = "SELECT * from tbl_mata_pelajaran where id_mk='$id_mapel1'";
                                    
                                        $run_mapel1 = mysqli_query($koneksi,$get_mapel1);
                                    
                                        $row_mapel1 = mysqli_fetch_array($run_mapel1);
                                        $nama_mapel1 = $row_mapel1['nama_mapel'];
                    echo "
                    <div class='col-lg-4 col-md-4 d-flex align-items-stretch'>
                        <div class='card mx-auto mb-3' data-aos='zoom-in' data-aos-duration='1000'>
                            <div class='card-img'>
                                <img class='teacher-image' src='images/wargasekolah/$gambar_guru'>
                            </div>
                            <div class='card-body mx-5'>
                                <h5 class='card-title'>  $nama_guru  </h5>
                                <p class='fst-italic'>Guru $nama_mapel1</p>
                                <small class='mb-5'>Lulusan Universitas Negeri Medan</small>
                            </div>
                        </div>
                    </div> <!--Akhir Col-->
                    ";
                }
            ?>

            </div> <!--Akhir Row 2-->


        </div> <!--Akhir Container-->
    </div> <!--Akhir Container Fluid-->
</section>

<?php
 include('parsial/footer.php');
?>

