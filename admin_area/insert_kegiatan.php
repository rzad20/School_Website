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
    <title>Tambah Data Kegiatan</title>
</head>
<body>
<div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa fa-plus-square-o fa-fw">
                        </i>
                        Tambah Data kegiatan
                    </h3>
                </div>
                <div class="panel-body">
                    <form method="post" class="form-forizontal" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-lg-12 col-md-3 control-label"> id kegiatan </label>
                            <div class="col-lg-12 col-md-6">
                                <input type="text" name="id_kegiatan" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-12 col-md-3 control-label"> Judul Kegiatan </label>
                            <div class="col-lg-12 col-md-6">
                                <input type="text" name="judul_kegiatan" class="form-control" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-12 col-md-3 control-label"> Tanggal Kegiatan </label>
                            <div class="col-lg-12 col-md-6">
                                <input type="text" name="tanggal_kegiatan" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">  <!--Awal form group-->

                            <label  class="col-md-3 control-label"> Deksripsi Kegiatan </label>
                            <div class="col-lg-12 col-md-6"> <!--Awal Col-Md-6-->

                                <textarea name="deksripsi_kegiatan" cols="20" rows="8" class="form-control"></textarea>

                            </div> <!--Akhir Col-Md-6-->

                        </div> <!--Akhir form group-->
                        <div class="form-group">  <!--Awal form group-->

                            <label  class="col-md-3 control-label"> Pilih Gambar Kegiatan </label>
                            <div class="col-lg-12 col-md-6"> <!--Awal Col-Md-6-->

                                <input type="file" name="gambar_kegiatan" class="form-control" required>

                            </div> <!--Akhir Col-Md-6-->

                        </div> <!--Akhir form group-->
                        <br>
                        <br>
                        <div class="form-group">  <!--Awal form group-->

                            <label  class="col-md-3 control-label"></label>
                            <div class="col-md-6"> <!--Awal Col-Md-6-->

                                <input type="submit" name="submit" value="Tambah Data Kegiatan" class="btn btn-primary form-control">

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
        $id_kegiatan = $_POST['id_kegiatan'];
        $judul_kegiatan = $_POST['judul_kegiatan'];
        $tanggal_kegiatan = $_POST['tanggal_kegiatan'];
        $deksripsi_kegiatan = $_POST['deksripsi_kegiatan'];
        $gambar_kegiatan = $_FILES['gambar_kegiatan']['name'];
        $tmp_1 = $_FILES['gambar_kegiatan']['tmp_name'];
        move_uploaded_file($tmp_1, "../images/kegiatan/$gambar_kegiatan");

        $tambah_kegiatan = "INSERT into tbl_kegiatan SET
            id_kegiatan='$id_kegiatan',
            judul_kegiatan='$judul_kegiatan',
            isi_kegiatan='$deksripsi_kegiatan',
            gambar_kegiatan='$gambar_kegiatan',
            tgl_kegiatan='$tanggal_kegiatan'

        ";
        $hasil_tambah = mysqli_query($koneksi,$tambah_kegiatan);
        if($hasil_tambah) {
            echo "
            <script>
                alert('Data Berhasil Ditambah')
            </script>
            ";

             echo "
            <script>

                window.open('index.php?view_kegiatan','_self')

            </script>
            ";
        }
    }
    }
?>