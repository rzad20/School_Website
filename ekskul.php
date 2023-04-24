<?php
 include('parsial/header.php');
 include('parsial/database.php');
?>

<div class="container-fluid">
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h5 class="page-title mt-3" data-aos="fade-left">
                    Ekskul
                </h5>
            </div>
        </div>
        <div class="row">
        <?php 
          
                            
          $get_ekskul = "SELECT * From tbl_ekskul";

          $run_ekskul = mysqli_query($koneksi,$get_ekskul);

          while($row_ekskul=mysqli_fetch_array($run_ekskul)){
              
            $id_ekskul = $row_ekskul['id_ekskul'];
            $nama_ekskul = $row_ekskul['nama_ekskul'];
            $gambar_ekskul=$row_ekskul['ekskul_img'];
         echo "
         <div class='col-lg-6 col-md-6 col-sm-6'>
         <div class='card border border-secondary mt-5 mb-3'>
             <img src='images/ekskul/$gambar_ekskul' class='card-img-top rounded 0' alt=''>
             <div class='card-body'>
                 <h5 class='card-title text-center text-uppercase'>$nama_ekskul</h5>
             </div>
         </div>

        </div>
         ";  
        }
      ?>
            
        </div>
    </div>
    <?php
        include ('parsial/sidebar.php')
    ?>
</div>
</div>

<?php
 include('parsial/footer.php');
?>