<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>
<?php

if(isset($_GET['edit_kegiatan'])) {
    $edit_id = $_GET['edit_kegiatan'];
    $get_kegiatan = "SELECT * From tbl_kegiatan where id_kegiatan='$edit_id'";
    $run_edit = mysqli_query($koneksi,$get_kegiatan);
    $row_edit = mysqli_fetch_array($run_edit);
    $id_kegiatan = $row_edit['id_kegiatan'];
    $nama_kegiatan = $row_edit['judul_kegiatan'];
    $isi_kegiatan = $row_edit['isi_kegiatan'];
    $tgl_kegiatan = $row_edit['tgl_kegiatan'];
    $gambar_kegiatan = $row_edit['gambar_kegiatan'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Kegiatan </title>
</head>
<body>
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i>
                    Dashboard / Edit Data Kegiatan
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
                        Edit Data Kegiatan
                    </h3>
                </div>
                <div class="panel-body">
                    <form method="post" class="form-forizontal" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-lg-12 col-md-3 control-label"> ID Kegiatan </label>
                            <div class="col-lg-12 col-md-6">
                                <input type="text" name="id_kegiatan" class="form-control" value="<?php echo $id_kegiatan; ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-12 col-md-3 control-label"> Nama Kegiatan </label>
                            <div class="col-lg-12 col-md-6">
                                <input type="text" name="nama_kegiatan" class="form-control" value = "<?php echo $nama_kegiatan;?>" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-12 col-md-3 control-label"> Tanggal Kegiatan </label>
                            <div class="col-lg-12 col-md-6">
                                <input type="text" name="tanggal_kegiatan" class="form-control" value = "<?php echo $tgl_kegiatan;?>" required>
                            </div>
                        </div>
                        <div class="form-group">  <!--Awal form group-->

                            <label  class="col-md-3 control-label"> Deksripsi Kegiatan </label>
                            <div class="col-lg-12 col-md-6"> <!--Awal Col-Md-6-->

                                <textarea name="deksripsi_kegiatan" cols="20" rows="8" class="form-control"><?php echo $isi_kegiatan;?></textarea>

                            </div> <!--Akhir Col-Md-6-->

                        </div> <!--Akhir form group-->
                        <div class="form-group">  <!--Awal form group-->

                            <label  class="col-md-3 control-label"> Pilih Gambar Kegiatan </label>
                            <div class="col-lg-12 col-md-6"> <!--Awal Col-Md-6-->

                                <input type="file" name="gambar_kegiatan" class="form-control">
                                <img width="100" height="100" src="../images/kegiatan/<?php echo $gambar_kegiatan; ?>" alt="<?php echo $gambar_kegiatan; ?>">

                            </div> <!--Akhir Col-Md-6-->

                        </div> <!--Akhir form group-->
                        <br>
                        <br>
                        <div class="form-group">  <!--Awal form group-->

                            <label  class="col-md-3 control-label"></label>
                            <div class="col-md-6"> <!--Awal Col-Md-6-->

                                <input type="submit" name="update" value="Update Data Kegiatan" class="btn btn-primary form-control">

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
        $id_kegiatan = $_POST['id_kegiatan'];
        $nama_kegiatan = $_POST['nama_kegiatan'];
        $isi_kegiatan = $_POST['deksripsi_kegiatan'];
        $tgl_kegiatan = $_POST['tanggal_kegiatan'];
        $gambar_kegiatan = $_FILES['gambar_kegiatan']['name'];
        $tmp_1 = $_FILES['gambar_kegiatan']['tmp_name'];
        move_uploaded_file($tmp_1, "../images/kegiatan/$gambar_kegiatan");

    $edit_kegiatan = "UPDATE tbl_kegiatan SET
            judul_kegiatan='$nama_kegiatan',
            isi_kegiatan='$isi_kegiatan',
            gambar_kegiatan = '$gambar_kegiatan',
            tgl_kegiatan = '$tgl_kegiatan'
            where id_kegiatan = '$id_kegiatan'
        ";
        $hasil_edit = mysqli_query($koneksi,$edit_kegiatan);
        if($hasil_edit) {
            echo "
            <script>
                alert('Data Berhasil Diubah')
            </script>
            ";

             echo "
            <script>

                window.open('index.php?view_kegiatan','_self')

            </script>
            ";
        }
}

?>

<?php } ?>