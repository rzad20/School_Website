<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php

if(isset($_GET['edit_guru'])) {
    $edit_id = $_GET['edit_guru'];
    $get_guru = "SELECT * From data_guru where Nip_Guru='$edit_id'";
    $run_edit = mysqli_query($koneksi,$get_guru);
    $row_edit = mysqli_fetch_array($run_edit);
    $nip_guru = $row_edit['Nip_Guru'];
    $nama_guru = $row_edit['Nama_Guru'];
    $tgl_lahir = $row_edit['Tgl_lahir'];
    $alamat = $row_edit['Alamat'];
    $img_guru = $row_edit['img_guru'];
    $id_mapel = $row_edit['id_mapel1'];
}
$get_mapel = "SELECT * From tbl_mata_pelajaran where id_mk='$id_mapel'";
$run_mapel = mysqli_query($koneksi,$get_mapel);
$row_mapel = mysqli_fetch_array ($run_mapel);
$nama_mapel = $row_mapel['nama_mapel'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Guru </title>
</head>
<body>
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i>
                    Dashboard / Edit Data Guru
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
                        Edit Data Guru
                    </h3>
                </div>
                <div class="panel-body">
                    <form method="post" class="form-forizontal" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-lg-12 col-md-3 control-label"> NIP </label>
                            <div class="col-lg-12 col-md-6">
                                <input type="text" name="nip_guru" class="form-control" value="<?php echo $nip_guru; ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-12 col-md-3 control-label"> Nama Guru </label>
                            <div class="col-lg-12 col-md-6">
                                <input type="text" name="nama_guru" class="form-control" value = "<?php echo $nama_guru;?>"required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-12 col-md-3 control-label"> Tanggal Lahir </label>
                            <div class="col-lg-12 col-md-6">
                                <input type="text" name="tanggal_lahir" class="form-control" value = "<?php echo $tgl_lahir;?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-12 col-md-3 control-label"> Mata Pelajaran 1 </label>
                            <div class="col-lg-12 col-md-6">
                                <select name="nama_mapel1" class="form-control" required>
                                    <option value="<?php echo $id_mapel?>"> <?php echo $nama_mapel ?> </option>
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

                                <input type="file" name="gambar_guru" class="form-control">
                                <img width="100" height="100" src="../images/wargasekolah/<?php echo $img_guru; ?>" alt="<?php echo $img_guru; ?>">
                            </div> <!--Akhir Col-Md-6-->

                        </div> <!--Akhir form group-->

                        <div class="form-group">  <!--Awal form group-->

                            <label  class="col-md-3 control-label"> Alamat </label>
                            <div class="col-lg-12 col-md-6"> <!--Awal Col-Md-6-->

                                <textarea name="alamat_guru" cols="20" rows="8" class="form-control"><?php echo $alamat;?></textarea>

                            </div> <!--Akhir Col-Md-6-->

                        </div> <!--Akhir form group-->
                        <br>
                        <br>
                        <div class="form-group">  <!--Awal form group-->

                            <label  class="col-md-3 control-label"></label>
                            <div class="col-md-6"> <!--Awal Col-Md-6-->

                                <input type="submit" name="update" value="Update Data Guru" class="btn btn-primary form-control">

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
    $nip_guru = $_POST['nip_guru'];
    $nama_guru = $_POST['nama_guru'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $nama_mapel1 = $_POST['nama_mapel1'];
    $gambar_guru = $_FILES['gambar_guru']['name'];
    $alamat_guru = $_POST['alamat_guru'];
    $tmp_1 = $_FILES['gambar_guru']['tmp_name'];
    move_uploaded_file($tmp_1, "../images/wargasekolah/$gambar_guru");

    $edit_guru = "UPDATE data_guru SET
            Nama_Guru='$nama_guru',
            Tgl_Lahir='$tanggal_lahir',
            Alamat='$alamat_guru',
            img_guru='$gambar_guru',
            id_mapel1='$nama_mapel1'
            where Nip_Guru = '$nip_guru'
        ";
        $hasil_edit = mysqli_query($koneksi,$edit_guru);
        if($hasil_edit) {
            echo "
            <script>
                alert('Data Berhasil Diubah')
            </script>
            ";

             echo "
            <script>

                window.open('index.php?view_guru','_self')

            </script>
            ";
        }
}

?>

<?php } ?>