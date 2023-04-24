<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php

if(isset($_GET['edit_mapel'])) {
    $edit_id = $_GET['edit_mapel'];
    $get_mapel = "SELECT * From tbl_mata_pelajaran where id_mk='$edit_id'";
    $run_edit = mysqli_query($koneksi,$get_mapel);
    $row_edit = mysqli_fetch_array($run_edit);
    $id_mapel = $row_edit['id_mk'];
    $nama_mapel = $row_edit['nama_mapel'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mapel </title>
</head>
<body>
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i>
                    Dashboard / Edit Data Mapel
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
                        Edit Data Mapel
                    </h3>
                </div>
                <div class="panel-body">
                    <form method="post" class="form-forizontal" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-lg-12 col-md-3 control-label"> ID Kelas </label>
                            <div class="col-lg-12 col-md-6">
                                <input type="text" name="id_mapel" class="form-control" value="<?php echo $id_mapel; ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-12 col-md-3 control-label"> Nama Kelas </label>
                            <div class="col-lg-12 col-md-6">
                                <input type="text" name="nama_mapel" class="form-control" value = "<?php echo $nama_mapel;?>" required>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">  <!--Awal form group-->

                            <label  class="col-md-3 control-label"></label>
                            <div class="col-md-6"> <!--Awal Col-Md-6-->

                                <input type="submit" name="update" value="Update Data Mapel" class="btn btn-primary form-control">

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
        $id_mapel = $_POST['id_mapel'];
        $nama_mapel = $_POST['nama_mapel'];

    $edit_mapel = "UPDATE tbl_mata_pelajaran SET
            nama_mapel='$nama_mapel'
            where id_mk = '$id_mapel'
        ";
        $hasil_edit = mysqli_query($koneksi,$edit_mapel);
        if($hasil_edit) {
            echo "
            <script>
                alert('Data Berhasil Diubah')
            </script>
            ";

             echo "
            <script>

                window.open('index.php?view_mapel','_self')

            </script>
            ";
        }
}

?>

<?php } ?>