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
    <title>Tambah Data Ekskul</title>
</head>
<body>
<div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa fa-plus-square-0 fa-fw">
                        </i>
                        Tambah Data Ekskul
                    </h3>
                </div>
                <div class="panel-body">
                    <form method="post" class="form-forizontal" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-lg-12 col-md-3 control-label"> id_ekskul </label>
                            <div class="col-lg-12 col-md-6">
                                <input type="text" name="id_ekskul" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-12 col-md-3 control-label"> Nama Ekskul </label>
                            <div class="col-lg-12 col-md-6">
                                <input type="text" name="nama_ekskul" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">  <!--Awal form group-->

                            <label  class="col-md-3 control-label"> Pilih Gambar Ekskul </label>
                            <div class="col-lg-12 col-md-6"> <!--Awal Col-Md-6-->

                                <input type="file" name="gambar_ekskul" class="form-control" required>

                            </div> <!--Akhir Col-Md-6-->

                        </div> <!--Akhir form group-->
                        <br>
                        <br>
                        <div class="form-group">  <!--Awal form group-->

                            <label  class="col-md-3 control-label"></label>
                            <div class="col-md-6"> <!--Awal Col-Md-6-->

                                <input type="submit" name="submit" value="Tambah Data Ekskul" class="btn btn-primary form-control">

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
        $id_ekskul = $_POST['id_ekskul'];
        $nama_ekskul = $_POST['nama_ekskul'];
        $ekskul_img = $_FILES['gambar_ekskul']['name'];
        $tmp_1 = $_FILES['gambar_ekskul']['tmp_name'];
        move_uploaded_file($tmp_1, "../images/ekskul/$ekskul_img");

        $tambah_ekskul = "INSERT into tbl_ekskul SET
            id_ekskul='$id_ekskul',
            nama_ekskul='$nama_ekskul',
            ekskul_img='$ekskul_img'
        ";
        $hasil_tambah = mysqli_query($koneksi,$tambah_ekskul);
        if($hasil_tambah) {
            echo "
            <script>
                alert('Data Berhasil Ditambah')
            </script>
            ";

             echo "
            <script>

                window.open('index.php?view_ekskul','_self')

            </script>
            ";
        }
    }
    }
?>