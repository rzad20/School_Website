<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tambah Data Pengumuman</title>
</head>
<body>
<div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa fa-plus-square-o fa-fw">
                        </i>
                        Tambah Data Pengumuman
                    </h3>
                </div>
                <div class="panel-body">
                    <form method="post" class="form-forizontal" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-lg-12 col-md-3 control-label"> id pengumuman </label>
                            <div class="col-lg-12 col-md-6">
                                <input type="text" name="id_pengumuman" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-12 col-md-3 control-label"> Judul Pengumuman </label>
                            <div class="col-lg-12 col-md-6">
                                <input type="text" name="judul_pengumuman" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">  <!--Awal form group-->

                            <label  class="col-md-3 control-label"> Deksripsi Pengumuman </label>
                            <div class="col-lg-12 col-md-6"> <!--Awal Col-Md-6-->

                                <textarea name="deksripsi_pengumuman" cols="20" rows="8" class="form-control"></textarea>

                            </div> <!--Akhir Col-Md-6-->

                        </div> <!--Akhir form group-->
                        <div class="form-group">  <!--Awal form group-->

                            <label  class="col-md-3 control-label"> Pilih Gambar Pengumuman </label>
                            <div class="col-lg-12 col-md-6"> <!--Awal Col-Md-6-->

                                <input type="file" name="gambar_pengumuman" class="form-control" required>

                            </div> <!--Akhir Col-Md-6-->

                        </div> <!--Akhir form group-->
                        <br>
                        <br>
                        <div class="form-group">  <!--Awal form group-->

                            <label  class="col-md-3 control-label"></label>
                            <div class="col-md-6"> <!--Awal Col-Md-6-->

                                <input type="submit" name="submit" value="Tambah Data Pengumuman" class="btn btn-primary form-control">

                            </div> <!--Akhir Col-Md-6-->

                        </div> <!--Akhir form group-->

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
    if(isset($_POST['submit'])) {
        $id_pengumuman = $_POST['id_pengumuman'];
        $judul_pengumuman = $_POST['judul_pengumuman'];
        $deksripsi_pengumuman = $_POST['deksripsi_pengumuman'];
        $gambar_pengumuman = $_FILES['gambar_pengumuman']['name'];
        $tmp_1 = $_FILES['gambar_pengumuman']['tmp_name'];
        move_uploaded_file($tmp_1, "../images/pengumuman/$gambar_pengumuman");

        $tambah_pengumuman = "INSERT into pengumuman SET
            id_pengumuman='$id_pengumuman',
            judul_pengumuman='$judul_pengumuman',
            gambar_pengumuman='$gambar_pengumuman',
            isi_pengumuman='$deksripsi_pengumuman'
            

        ";
        $hasil_tambah = mysqli_query($koneksi,$tambah_pengumuman);
        if($hasil_tambah) {
            echo "
            <script>
                alert('Data Berhasil Ditambah')
            </script>
            ";

             echo "
            <script>

                window.open('index.php?view_pengumuman','_self')

            </script>
            ";
        }
    }
}
?>