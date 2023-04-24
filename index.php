<?php
include 'parsial/header.php';
include 'parsial/database.php';
?>
<div class="container"> <!--awal container -->
  <div class="row">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/slider1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/slider2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/slider3.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</div> <!--akhir container -->

<div class="container text-center"> <!--awal container -->
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="row"> <!--awal row -->
          <div class="col-lg-12"> <!--awal col-lg-12 -->
              <h4 class="page-title object mt-4 mb-4" > Kegiatan Terbaru </h4>
          </div>  <!--akhir col-lg-12 -->
        </div> <!--akhir row -->

        <div class="row "> <!--awal row -->
        <?php                   
          $get_kegiatan = "SELECT * From tbl_kegiatan LIMIT 0,6";

          $run_kegiatan = mysqli_query($koneksi,$get_kegiatan);

          while($row_kegiatan=mysqli_fetch_array($run_kegiatan)){
              
            $id_kegiatan = $row_kegiatan['id_kegiatan'];
            $judul_kegiatan = $row_kegiatan['judul_kegiatan'];
            $isi_kegiatan = $row_kegiatan['isi_kegiatan'];
            $gambar_kegiatan = $row_kegiatan['gambar_kegiatan'];
            $tgl_kegiatan = $row_kegiatan['tgl_kegiatan'];
            echo "
              <div class='col-lg-6 col-md-6 col-sm-12 mt-2 mb-3 text-center' data-aos='flip-left' data-aos-duration='800'>
                      <div class='card mx-auto' style='width : 22rem; height:32rem;'>  <!--Awal Card -->
                          <img src='images/kegiatan/$gambar_kegiatan'>
                          <div class='card-body'>
                          <h5 class='card-title'> $judul_kegiatan </h5>
                          <p class='card-text'>$isi_kegiatan</p>
                          <p class='card-text'><small>Updated $tgl_kegiatan</small></p>
                          </div> <!--Akhir Card Body -->
                      </div> <!--Akhir Card -->
              </div>
              ";
          }
          ?>
          </div> <!--akhir row -->
    </div>


      <?php
        include 'parsial/sidebar.php';
      ?>


</div>

</div> <!--akhir container -->

<?php
include 'parsial/footer.php';
?>