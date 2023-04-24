<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php

if(isset($_GET['edit_siswa'])) {
    $edit_id = $_GET['edit_siswa'];
    $get_siswa = "SELECT * From tabel_siswa where NIS='$edit_id'";
    $run_siswa = mysqli_query($koneksi,$get_siswa);
    $row_siswa = mysqli_fetch_array($run_siswa);
    $nis_siswa = $row_siswa['NIS'];
    $nama_siswa = $row_siswa['Nama_Siswa'];
    $gambar_siswa = $row_siswa['Siswa_img'];
    $tgl_lahir = $row_siswa['Tgl_Lahir'];
    $alamat = $row_siswa['alamat'];
    $jk_kelamin = $row_siswa['jenis_kelamin'];
    $id_kelas = $row_siswa['Id_Kelas'];
}
$get_kelas = "SELECT * From tbl_kelas where id_kelas='$id_kelas'";
$run_kelas = mysqli_query($koneksi,$get_kelas);
$row_kelas = mysqli_fetch_array ($run_kelas);
$nama_kelas = $row_kelas['nama_kelas'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Siswa </title>
</head>
<body>
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i>
                    Dashboard / Edit Data Siswa
                </li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa fa-plus-square-o fa-fw"></i>
                        Edit Data Siswa
                    </h3>
                </div>
                <div class="panel-body">
                <form method="post" class="form-forizontal" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-lg-12 col-md-3 control-label"> Nomor Induk Siswa </label>
                            <div class="col-lg-12 col-md-6">
                                <input type="text" name="nis_siswa" class="form-control" value="<?php echo $nis_siswa; ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-12 col-md-3 control-label"> Nama Siswa </label>
                            <div class="col-lg-12 col-md-6">
                                <input type="text" name="nama_siswa" class="form-control" value= "<?php echo $nama_siswa; ?>"required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-12 col-md-3 control-label"> Tanggal Lahir </label>
                            <div class="col-lg-12 col-md-6">
                                <input type="text" name="tanggal_lahir" class="form-control" value="<?php echo $tgl_lahir; ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-12 col-md-3 control-label"> Kelas </label>
                            <div class="col-lg-12 col-md-6">
                                <select name="nama_kelas" class="form-control" required>
                                    <option value='<?php echo $id_kelas;?>'><?php echo $nama_kelas; ?> </option>
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
                                <img width="100" height="100" src="../images/sekolah/<?php echo $gambar_siswa; ?>" alt="<?php echo $gambar_siswa; ?>">

                            </div> <!--Akhir Col-Md-6-->

                        </div> <!--Akhir form group-->
                        <div class="form-group">
                            <label class="col-lg-12 col-md-3 control-label"> Jenis Kelamin </label>
                            <div class="col-lg-12 col-md-6">
                                <select name="jk_siswa" class="form-control" required>
                                    <option value='<?php echo $jk_kelamin;?>'><?php echo $jk_kelamin;?></option>
                                    <option value='Laki-Laki'>Laki - Laki </option>
                                    <option value='Perempuan'>Perempuan </option>
                                   
                                </select>
                            </div>
                        </div>
                        <div class="form-group">  <!--Awal form group-->

                            <label  class="col-md-3 control-label"> Alamat </label>
                            <div class="col-lg-12 col-md-6"> <!--Awal Col-Md-6-->

                                <textarea name="alamat_siswa" cols="20" rows="8" class="form-control">
                                    <?php echo $alamat ?>
                                </textarea>

                            </div> <!--Akhir Col-Md-6-->

                        </div> <!--Akhir form group-->
                        <br>
                        <br>
                        <div class="form-group">  <!--Awal form group-->

                            <label  class="col-md-3 control-label"></label>
                            <div class="col-md-6"> <!--Awal Col-Md-6-->

                                <input type="submit" name="update" value="Edit Data Siswa" class="btn btn-primary form-control">

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
if(isset($_POST['update'])) {
    $nis_siswa = $_POST['nis_siswa'];
    $nama_siswa = $_POST['nama_siswa'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $nama_kelas = $_POST['nama_kelas'];
    $gambar_siswa = $_FILES['gambar_siswa']['name'];
    $jk_siswa = $_POST['jk_siswa'];
    $alamat_siswa = $_POST['alamat_siswa'];
    $tmp_1 = $_FILES['gambar_siswa']['tmp_name'];
    move_uploaded_file($tmp_1, "../images/siswa/$gambar_siswa");

    $edit_siswa = "UPDATE tabel_siswa SET
            Nama_Siswa='$nama_siswa',
            Tgl_Lahir='$tanggal_lahir',
            alamat='$alamat_siswa',
            Siswa_img='$gambar_siswa',
            jenis_kelamin='$jk_siswa',
            Id_kelas='$nama_kelas'
            where NIS='$nis_siswa'
        ";
        $hasil_edit = mysqli_query($koneksi,$edit_siswa);
        if($hasil_edit) {
            echo "
            <script>
                alert('Data Berhasil Diubah')
            </script>
            ";

             echo "
            <script>

                window.open('index.php?view_siswa','_self')

            </script>
            ";
        }
}

?>

<?php } ?>