<?php
 include('parsial/header.php');
 include('parsial/database.php');
 $get_siswa = "SELECT * from tabel_siswa";
 $run_siswa = mysqli_query($koneksi,$get_siswa);
 $count_siswa = mysqli_num_rows($run_siswa);

 $get_lk = "SELECT * from tabel_siswa where jenis_kelamin='laki-laki'";
 $run_lk = mysqli_query($koneksi,$get_lk);
 $count_lk = mysqli_num_rows($run_lk);

 $get_pr = "SELECT * from tabel_siswa where jenis_kelamin='perempuan'";
 $run_pr = mysqli_query($koneksi,$get_pr);
 $count_pr = mysqli_num_rows($run_pr);
?>

<div class="container-fluid">
    <div class="row" data-aos="fade-up" data-aos-duration="800"> <!--Awal row 1-->
                <h4 class="page-title object mt-4 mb-4 text-center" > Data Siswa </h4>
    </div > <!--Akhir Row 1-->
</div>
<section id="counts" class="counts section-bg">
    <div class="container">
        <div class="row counters">
            <h2 class="text-center">DATA SISWA LAKI-LAKI</h2>
            <div class="text-center">
            <span
        data-purecounter-start="0"
        data-purecounter-end="<?php echo $count_lk ?>"
        class="purecounter"
        >0</span>
                <p>SISWA</p>
            </div>
        </div>
    </div>
</section>

<section id="counts" class="counts section-bg">
    <div class="container">
        <div class="row counters">
            <h2 class="text-center">DATA SISWA PEREMPUAN</h2>
            <div class="text-center">
            <span
        data-purecounter-start="0"
        data-purecounter-end="<?php echo $count_pr ?>"
        class="purecounter"
        >0</span>
                <p>SISWI</p>
            </div>
        </div>
    </div>
</section>

<section id="counts" class="counts section-bg">
    <div class="container">
        <div class="row counters">
            <h2 class="text-center">TOTAL KESELURUHAN</h2>
            <div class="text-center">
            <span
        data-purecounter-start="0"
        data-purecounter-end="<?php echo $count_siswa?>"
        class="purecounter"
        ><?php echo $count_siswa?></span>
                <p>SISWA/I</p>
            </div>
        </div>
    </div>
</section>
<?php
 include('parsial/footer.php');
?>