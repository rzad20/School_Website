<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php

if(isset($_GET['edit_ekskul'])) {
    $edit_id = $_GET['edit_ekskul'];
    $get_ekskul = "SELECT * From tbl_ekskul where id_ekskul='$edit_id'";
    $run_edit = mysqli_query($koneksi,$get_ekskul);
    $row_edit = mysqli_fetch_array($run_edit);
    $id_ekskul = $row_edit['id_ekskul'];
    $nama_ekskul = $row_edit['nama_ekskul'];
    $ekskul_img = $row_edit['ekskul_img'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Ekskul </title>
</head>
<body>
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i>
                    Dashboard / Edit Data Ekskul
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
                        Edit Data Ekskul
                    </h3>
                </div>
                <div class="panel-body">
                    <form method="post" class="form-forizontal" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-lg-12 col-md-3 control-label"> ID Ekskul </label>
                            <div class="col-lg-12 col-md-6">
                                <input type="text" name="id_ekskul" class="form-control" value="<?php echo $id_ekskul; ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-12 col-md-3 control-label"> Nama Ekskul </label>
                            <div class="col-lg-12 col-md-6">
                                <input type="text" name="nama_ekskul" class="form-control" value = "<?php echo $nama_ekskul;?>" required>
                            </div>
                        </div>
                        <div class="form-group">  <!--Awal form group-->

                            <label  class="col-md-3 control-label"> Pilih Gambar </label>
                            <div class="col-lg-12 col-md-6"> <!--Awal Col-Md-6-->

                                <input type="file" name="gambar_ekskul" class="form-control">
                                <img width="400" height="360" src="../images/ekskul/<?php echo $ekskul_img; ?>" alt="<?php echo $ekskul_img; ?>">
                            </div> <!--Akhir Col-Md-6-->

                        </div> <!--Akhir form group-->
                        <br>
                        <br>
                        <div class="form-group">  <!--Awal form group-->

                            <label  class="col-md-3 control-label"></label>
                            <div class="col-md-6"> <!--Awal Col-Md-6-->

                                <input type="submit" name="update" value="Update Data Ekskul" class="btn btn-primary form-control">

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
        $id_ekskul = $_POST['id_ekskul'];
        $nama_ekskul = $_POST['nama_ekskul'];
        $ekskul_img = $_FILES['gambar_ekskul']['name'];
        $tmp_1 = $_FILES['gambar_ekskul']['tmp_name'];
        move_uploaded_file($tmp_1, "../images/ekskul/$gambar_ekskul");

    $edit_ekskul = "UPDATE tbl_ekskul SET
            nama_ekskul='$nama_ekskul',
            ekskul_img='$ekskul_img'
            where id_ekskul = '$id_ekskul'
        ";
        $hasil_edit = mysqli_query($koneksi,$edit_ekskul);
        if($hasil_edit) {
            echo "
            <script>
                alert('Data Berhasil Diubah')
            </script>
            ";

             echo "
            <script>

                window.open('index.php?view_ekskul','_self')

            </script>
            ";
        }
}

?>

<?php } ?>