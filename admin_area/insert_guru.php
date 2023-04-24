<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Guru</title>
</head>
<body>
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard">
                    </i>
                    Dashboard / Tambah Data Guru
                </li>
            </ol>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa fa-plus-quare-0 fa-fw">
                        </i>
                        Tambah Data Guru
                    </h3>
                </div>
                <div class="panel-body">
                    <form method="post" class="form-forizontal" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-lg-12 col-md-3 control-label"> NIP </label>
                            <div class="col-lg-12 col-md-6">
                                <input type="text" name="nip_guru" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-12 col-md-3 control-label"> Nama Guru </label>
                            <div class="col-lg-12 col-md-6">
                                <input type="text" name="nama_guru" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-12 col-md-3 control-label"> Tanggal Lahir </label>
                            <div class="col-lg-12 col-md-6">
                                <input type="text" name="tanggal_lahir" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-12 col-md-3 control-label"> Mata Pelajaran 1 </label>
                            <div class="col-lg-12 col-md-6">
                                <select name="nama_mapel1" class="form-control" required>
                                    <option>  </option>
                                    <?php
                                        $get_mapel = "SELECT * FROM tbl_mata_pelajaran";
                                        $run_mapel = mysqli_query($koneksi,$get_mapel);
                                            while($row_mapel = mysqli_fetch_array($run_mapel)) {
                                                $id_mk = $row_mapel['id_mk'];
                                                $nama_mapel = $row_mapel['nama_mapel'];
                                                echo "
                                                <option value='$id_mk'>$nama_mapel</option>
                                                ";
                                            }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">  <!--Awal form group-->

                            <label  class="col-md-3 control-label"> Pilih Gambar </label>
                            <div class="col-lg-12 col-md-6"> <!--Awal Col-Md-6-->

                                <input type="file" name="gambar_guru" class="form-control" required>

                            </div> <!--Akhir Col-Md-6-->

                        </div> <!--Akhir form group-->

                        <div class="form-group">  <!--Awal form group-->

                            <label  class="col-md-3 control-label"> Alamat </label>
                            <div class="col-lg-12 col-md-6"> <!--Awal Col-Md-6-->

                                <textarea name="alamat_guru" cols="20" rows="8" class="form-control"></textarea>

                            </div> <!--Akhir Col-Md-6-->

                        </div> <!--Akhir form group-->
                        <br>
                        <br>
                        <div class="form-group">  <!--Awal form group-->

                            <label  class="col-md-3 control-label"></label>
                            <div class="col-md-6"> <!--Awal Col-Md-6-->

                                <input type="submit" name="submit" value="Tambah Data Guru" class="btn btn-primary form-control">

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
        $nip_guru = $_POST['nip_guru'];
        $nama_guru = $_POST['nama_guru'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $nama_mapel1 = $_POST['nama_mapel1'];
        $gambar_guru = $_FILES['gambar_guru']['name'];
        $alamat_guru = $_POST['alamat_guru'];
        $tmp_1 = $_FILES['gambar_guru']['tmp_name'];
        move_uploaded_file($tmp_1, "../images/wargasekolah/$gambar_guru");

        $tambah_guru = "INSERT into data_guru SET
            Nip_Guru='$nip_guru',
            Nama_Guru='$nama_guru',
            Tgl_Lahir='$tanggal_lahir',
            Alamat='$alamat_guru',
            img_guru='$gambar_guru',
            id_mapel1='$nama_mapel1'
        ";
        $hasil_tambah = mysqli_query($koneksi,$tambah_guru);
        if($hasil_tambah) {
            echo "
            <script>
                alert('Data Berhasil Ditambah')
            </script>
            ";

             echo "
            <script>

                window.open('index.php?view_guru','_self')

            </script>
            ";
        }
    }
}
?>
