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
    <title>Tambah Data Mata Pelajaran</title>
</head>
<body>
<div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa fa-plus-quare-0 fa-fw">
                        </i>
                        Tambah Data Mapel
                    </h3>
                </div>
                <div class="panel-body">
                    <form method="post" class="form-forizontal" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-lg-12 col-md-3 control-label"> ID Mapel </label>
                            <div class="col-lg-12 col-md-6">
                                <input type="text" name="id_mapel" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-12 col-md-3 control-label"> Nama Mapel </label>
                            <div class="col-lg-12 col-md-6">
                                <input type="text" name="nama_mapel" class="form-control" required>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">  <!--Awal form group-->

                            <label  class="col-md-3 control-label"></label>
                            <div class="col-md-6"> <!--Awal Col-Md-6-->

                                <input type="submit" name="submit" value="Tambah Data Mapel" class="btn btn-primary form-control">

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
        $id_mapel = $_POST['id_mapel'];
        $nama_mapel = $_POST['nama_mapel'];

        $tambah_mapel = "INSERT into tbl_mata_pelajaran SET
            id_mk='$id_mapel',
            nama_mapel='$nama_mapel'
        ";
        $hasil_tambah = mysqli_query($koneksi,$tambah_mapel);
        if($hasil_tambah) {
            echo "
            <script>
                alert('Data Berhasil Ditambah')
            </script>
            ";

             echo "
            <script>

                window.open('index.php?view_mapel','_self')

            </script>
            ";
        }
    }
}
?>