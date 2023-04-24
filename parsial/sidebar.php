
<?php 
 include('parsial/database.php');
?>
<div class="col-lg-3 col-md-3 col-sm-12 sidebar" data-aos="fade-left" data-aos-duration="1250">
    <div class="card border border-secondary mt-5 mb-3">
        <img src="images/wargasekolah/kepalasekolah.jpg" class="card-img-top rounded 0" alt="">
        <div class="card-body">
            <h5 class="card-title text-center text-uppercase">Muallim (cDr) H. Fadli Ramadan, M.Pd</h5>
            <p class="card-text text-center mt-0 text-muted"> Kepala Sekolah </p>
            <p class="card-text text-justify">
                "Hingga Saat ini keberadaan SMP Islam Terpadu Ibnu Salim ditengah-tengah
                masyarakat sangat dibutuhkan, SMP Islam terpadu Ibnu Salim hadir untuk
                mendidik siswanya agar menjadi generasi yang Cerdas, Berkarakter dan
                Bermartabat"
            </p>
        </div>
    </div>
    <h5 class="page-title">
    Pengumuman
    </h5>
        <?php
        $get_pengumuman = "SELECT * From pengumuman";
                        
        $run_pengumuman = mysqli_query($koneksi,$get_pengumuman);

        while($row_pengumuman=mysqli_fetch_array($run_pengumuman)){
            
        $id_pengumuman = $row_pengumuman['id_pengumuman'];
        $judul_pengumuman = $row_pengumuman['judul_pengumuman'];
        $isi_pengumuman = $row_pengumuman['isi_pengumuman'];
        $gambar_pengumuman = $row_pengumuman['gambar_pengumuman'];
        echo "
        <div class='card border border-secondary mt-5 mb-3'>
        <img src='images/pengumuman/pengumuman.png' class='card-img-top rounded 0' alt=''>
        <div class='card-body'>
            <h5 class='card-title text-center text-uppercase'>
                $judul_pengumuman
            </h5>
            <p class='card-text text-justify'>
                $isi_pengumuman
            </p>
        </div>
    </div>
    ";
        }
        ?>
    

</div>
