<?php
    session_start();
    include("../parsial/database.php");
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    } else {

        $admin_session = $_SESSION['admin_email'];
        
        $get_guru = "SELECT * from data_guru";
        $run_guru = mysqli_query($koneksi,$get_guru);
        $count_guru = mysqli_num_rows($run_guru);
        $get_siswa = "SELECT * from tabel_siswa";
        $run_siswa = mysqli_query($koneksi,$get_siswa);
        $count_siswa = mysqli_num_rows($run_siswa);
        $get_kelas = "SELECT * from tbl_kelas";
        $run_kelas = mysqli_query($koneksi,$get_kelas);
        $count_kelas = mysqli_num_rows($run_kelas);
        $get_kegiatan = "SELECT * FROM tbl_kegiatan";
        $run_kegiatan = mysqli_query($koneksi,$get_kegiatan);
        $count_kegiatan = mysqli_num_rows($run_kegiatan);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yayasan Ibnu Halim - Admin Area</title>

    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.1.2-web/css/all.css">
    <link rel="stylesheet" href="css/styleadmin.css">
    

</head>
<body>
    <div id="wrapper">
        <?php include("sidebaradmin.php"); ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <?php
                    if(isset($_GET['dashboard'])) {
                        include("dashboard.php");
                    }
                    if(isset($_GET['insert_guru'])) {
                        include("insert_guru.php");
                    }
                    if(isset($_GET['view_guru'])) {
                        include("view_guru.php");
                    }

                    if(isset($_GET['edit_guru'])) {
                        include("edit_guru.php");
                    }

                    if(isset($_GET['delete_guru'])) {
                        include("delete_guru.php");
                    }

                    if(isset($_GET['insert_kepsek'])) {
                        include("insert_kepsek.php");
                    }
                    if(isset($_GET['view_kepsek'])) {
                        include("view_kepsek.php");
                    }

                    if(isset($_GET['insert_kelas'])) {
                        include("insert_kelas.php");
                    }
                    if(isset($_GET['view_kelas'])) {
                        include("view_kelas.php");
                    }
                    if(isset($_GET['edit_kelas'])) {
                        include("edit_kelas.php");
                    }
                    if(isset($_GET['delete_kelas'])) {
                        include("delete_kelas.php");
                    }

                    if(isset($_GET['insert_mapel'])) {
                        include("insert_mapel.php");
                    }
                    if(isset($_GET['view_mapel'])) {
                        include("view_mapel.php");
                    }
                    if(isset($_GET['edit_mapel'])) {
                        include("edit_mapel.php");
                    }
                    if(isset($_GET['delete_mapel'])) {
                        include("delele_mapel.php");
                    }
                    if(isset($_GET['insert_ekskul'])) {
                        include("insert_ekskul.php");
                    }
                    if(isset($_GET['view_ekskul'])) {
                        include("view_ekskul.php");
                    }
                    if(isset($_GET['edit_ekskul'])) {
                        include("edit_ekskul.php");
                    }
                    if(isset($_GET['delete_ekskul'])) {
                        include("delete_ekskul.php");
                    }

                    if(isset($_GET['insert_kegiatan'])) {
                        include("insert_kegiatan.php");
                    }
                    if(isset($_GET['view_kegiatan'])) {
                        include("view_kegiatan.php");
                    }
                    if(isset($_GET['edit_kegiatan'])) {
                        include("edit_kegiatan.php");
                    }
                    if(isset($_GET['delete_kegiatan'])) {
                        include("delete_kegiatan.php");
                    }

                    if(isset($_GET['insert_pengumuman'])) {
                        include("insert_pengumuman.php");
                    }
                    if(isset($_GET['view_pengumuman'])) {
                        include("view_pengumuman.php");
                    }
                    if(isset($_GET['edit_pengumuman'])) {
                        include("edit_pengumuman.php");
                    }
                    if(isset($_GET['delete_pengumuman'])) {
                        include("delete_pengumuman.php");
                    }

                    
                    if(isset($_GET['insert_siswa'])) {
                        include("insert_siswa.php");
                    }
                    if(isset($_GET['view_siswa'])) {
                        include("view_siswa.php");
                    }
                    if(isset($_GET['edit_siswa'])) {
                        include("edit_siswa.php");
                    }
                    if(isset($_GET['delete_siswa'])) {
                        include("delete_siswa.php");
                    }
                ?>
            </div>
        </div>
    </div>
    <script src="css/jquery-331.min.js"></script>
<script src="css/bootstrap-337.min.js"></script>

</body>
</html>
<?php } ?>