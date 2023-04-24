<?php
 include('parsial/header.php');
 include('parsial/database.php');
?>
<div class="container-fluid "> <!--Awal Container-Fluid-->
    <div class="container"> <!--Awal Container text-center-->
        <div class="row" data-aos="fade-up" data-aos-duration="500">
            <h4 class="page-title object mt-4 mb-4 text-center" > Galeri Kegiatan </h4>
        </div>
        <div class="row">
        <?php                   
          $get_kegiatan = "SELECT * From tbl_kegiatan";

          $run_kegiatan = mysqli_query($koneksi,$get_kegiatan);

          while($row_kegiatan=mysqli_fetch_array($run_kegiatan)){
              
            $id_kegiatan = $row_kegiatan['id_kegiatan'];
            $judul_kegiatan = $row_kegiatan['judul_kegiatan'];
            $isi_kegiatan = $row_kegiatan['isi_kegiatan'];
            $gambar_kegiatan = $row_kegiatan['gambar_kegiatan'];
            $tgl_kegiatan = $row_kegiatan['tgl_kegiatan'];
           
            echo "
            <div class='col-lg-4 col-md-4 col-sm-6 mt-2 mb-3 text-center' data-aos='flip-left' data-aos-duration='800'>
                <div class='card mx-auto' style='width : 22rem; height:32rem;'>  <!--Awal Card -->
                    <img src='images/kegiatan/$gambar_kegiatan'>
                    <div class='card-body'> <!--Awal Card Body -->
                    <h5 class='card-title'> $judul_kegiatan </h5>
                    <p class='card-text'>$isi_kegiatan</p>
                    <p class='card-text'><small>Updated $tgl_kegiatan</small></p>
                    </div> <!--Akhir Card Body -->
                </div> <!--Akhir Card -->
            </div>
            ";
          }
        ?>
        </div>

    </div> <!--Akhir Container text-center-->
</div> <!--Akhir Container-Fluid-->
<?php
 include('parsial/footer.php');
?>