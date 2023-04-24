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
    <title>Tambah Data Siswa</title>
</head>
<body>
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard">
                    </i>
                    Dashboard / Tambah Data Siswa
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
                        Tambah Data Siswa
                    </h3>
                </div>
                <div class="panel-body">
                    <form method="post" class="form-forizontal" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-lg-12 col-md-3 control-label"> Nomor Induk Siswa </label>
                            <div class="col-lg-12 col-md-6">
                                <input type="text" name="nis_siswa" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-12 col-md-3 control-label"> Nama Siswa </label>
                            <div class="col-lg-12 col-md-6">
                                <input type="text" name="nama_siswa" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-12 col-md-3 control-label"> Tanggal Lahir </label>
                            <div class="col-lg-12 col-md-6">
                                <input type="text" name="tanggal_lahir" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-12 col-md-3 control-label"> Kelas </label>
                            <div class="col-lg-12 col-md-6">
                                <select name="nama_kelas" class="form-control" required>
                                    <option>  </option>
                                    <?php
                                        $get_kelas = "SELECT * FROM tbl_kelas";
                                        $run_kelas = mysqli_query($koneksi,$get_kelas);
                                            while($row_kelas = mysqli_fetch_array($run_kelas)) {
                                                $id_kelas = $row_kelas['id_kelas'];
                                                $nama_kelas = $row_kelas['nama_kelas'];
                                                echo "
                                                <option value='$id_kelas'>$nama_kelas</option>
                                                ";
                                            }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">  <!--Awal form group-->

                            <label  class="col-md-3 control-label"> Pilih Gambar </label>
                            <div class="col-lg-12 col-md-6"> <!--Awal Col-Md-6-->

                                <input type="file" name="gambar_siswa" class="form-control">

                            </div> <!--Akhir Col-Md-6-->

                        </div> <!--Akhir form group-->
                        <div class="form-group">
                            <label class="col-lg-12 col-md-3 control-label"> Jenis Kelamin </label>
                            <div class="col-lg-12 col-md-6">
                                <select name="jk_siswa" class="form-control" required>
                                    <option>  </option>
                                    <option value='Laki-Laki'>Laki - Laki </option>
                                    <option value='Perempuan'>Perempuan </option>
                                   
                                </select>
                            </div>
                        </div>
                        <div class="form-group">  <!--Awal form group-->

                            <label  class="col-md-3 control-label"> Alamat </label>
                            <div class="col-lg-12 col-md-6"> <!--Awal Col-Md-6-->

                                <textarea name="alamat_siswa" cols="20" rows="8" class="form-control"></textarea>

                            </div> <!--Akhir Col-Md-6-->

                        </div> <!--Akhir form group-->
                        <br>
                        <br>
                        <div class="form-group">  <!--Awal form group-->

                            <label  class="col-md-3 control-label"></label>
                            <div class="col-md-6"> <!--Awal Col-Md-6-->

                                <input type="submit" name="submit" value="Tambah Data Siswa" class="btn btn-primary form-control">

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
        $nis_siswa = $_POST['nis_siswa'];
        $nama_siswa = $_POST['nama_siswa'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $nama_kelas = $_POST['nama_kelas'];
        $gambar_siswa = $_FILES['gambar_siswa']['name'];
        $jk_siswa = $_POST['jk_siswa'];
        $alamat_siswa = $_POST['alamat_siswa'];
        $tmp_1 = $_FILES['gambar_siswa']['tmp_name'];
        move_uploaded_file($tmp_1, "../images/siswa/$gambar_siswa");

        $tambah_siswa = "INSERT into tabel_siswa SET
            NIS='$nis_siswa',
            Nama_Siswa='$nama_siswa',
            Tgl_Lahir='$tanggal_lahir',
            alamat='$alamat_siswa',
            Siswa_img='$gambar_siswa',
            jenis_kelamin='$jk_siswa',
            Id_kelas='$nama_kelas'
        ";
        $hasil_tambah = mysqli_query($koneksi,$tambah_siswa);
        if($hasil_tambah) {
            echo "
            <script>
                alert('Data Berhasil Ditambah')
            </script>
            ";

             echo "
            <script>

                window.open('index.php?view_siswa','_self')

            </script>
            ";
        }
    }
}
?>
