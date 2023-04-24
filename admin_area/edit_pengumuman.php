<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php

if(isset($_GET['edit_pengumuman'])) {
    $edit_id = $_GET['edit_pengumuman'];
    $get_pengumuman = "SELECT * From pengumuman where id_pengumuman='$edit_id'";
    $run_edit = mysqli_query($koneksi,$get_pengumuman);
    $row_edit = mysqli_fetch_array($run_edit);
    $id_pengumuman = $row_edit['id_pengumuman'];
    $nama_pengumuman = $row_edit['judul_pengumuman'];
    $isi_pengumuman = $row_edit['isi_pengumuman'];
    $gambar_pengumuman = $row_edit['gambar_pengumuman'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pengumuman </title>
</head>
<body>
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i>
                    Dashboard / Edit Data Pengumuman
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
                        Edit Data Pengumuman
                    </h3>
                </div>
                <div class="panel-body">
                    <form method="post" class="form-forizontal" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-lg-12 col-md-3 control-label"> ID Pengumuman </label>
                            <div class="col-lg-12 col-md-6">
                                <input type="text" name="id_pengumuman" class="form-control" value="<?php echo $id_pengumuman; ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-12 col-md-3 control-label"> Nama Pengumuman </label>
                            <div class="col-lg-12 col-md-6">
                                <input type="text" name="nama_pengumuman" class="form-control" value = "<?php echo $nama_pengumuman;?>" required>
                            </div>
                        </div>
                        <div class="form-group">  <!--Awal form group-->

                            <label  class="col-md-3 control-label"> Deksripsi Pengumuman </label>
                            <div class="col-lg-12 col-md-6"> <!--Awal Col-Md-6-->

                                <textarea name="deksripsi_pengumuman" cols="20" rows="8" class="form-control"><?php echo $isi_pengumuman;?></textarea>

                            </div> <!--Akhir Col-Md-6-->

                        </div> <!--Akhir form group-->
                        <div class="form-group">  <!--Awal form group-->

                            <label  class="col-md-3 control-label"> Pilih Gambar Pengumuman </label>
                            <div class="col-lg-12 col-md-6"> <!--Awal Col-Md-6-->

                                <input type="file" name="gambar_pengumuman" class="form-control">
                                <img width="100" height="100" src="../images/kegiatan/<?php echo $gambar_pengumuman; ?>" alt="<?php echo $gambar_pengumuman; ?>">

                            </div> <!--Akhir Col-Md-6-->

                        </div> <!--Akhir form group-->
                        <br>
                        <br>
                        <div class="form-group">  <!--Awal form group-->

                            <label  class="col-md-3 control-label"></label>
                            <div class="col-md-6"> <!--Awal Col-Md-6-->

                                <input type="submit" name="update" value="Update Data Pengumuman" class="btn btn-primary form-control">

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
        $id_pengumuman = $_POST['id_pengumuman'];
        $nama_pengumuman = $_POST['nama_pengumuman'];
        $isi_kegiatan = $_POST['deksripsi_pengumuman'];
        $gambar_pengumuman = $_FILES['gambar_pengumuman']['name'];
        $tmp_1 = $_FILES['gambar_pengumuman']['tmp_name'];
        move_uploaded_file($tmp_1, "../images/pengumuman/$gambar_pengumuman");

    $edit_pengumuman = "UPDATE pengumuman SET
            judul_pengumuman='$nama_pengumuman',
            isi_pengumuman='$isi_pengumuman',
            gambar_pengumuman = '$gambar_pengumuman'
            where id_pengumuman = '$id_pengumuman'
        ";
        $hasil_edit = mysqli_query($koneksi,$edit_pengumuman);
        if($hasil_edit) {
            echo "
            <script>
                alert('Data Berhasil Diubah')
            </script>
            ";

            echo "
            <script>
                window.open('index.php?view_pengumuman','_self')
            </script>
            ";
        }
}

?>
<?php } ?>