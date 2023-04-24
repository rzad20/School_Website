<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php

if(isset($_GET['edit_kelas'])) {
    $edit_id = $_GET['edit_kelas'];
    $get_kelas = "SELECT * From tbl_kelas where id_kelas='$edit_id'";
    $run_edit = mysqli_query($koneksi,$get_kelas);
    $row_edit = mysqli_fetch_array($run_edit);
    $id_kelas = $row_edit['id_kelas'];
    $nama_kelas = $row_edit['nama_kelas'];
    $id_wali_kelas = $row_edit['id_wali_kelas'];
}
$get_guru = "SELECT * From data_guru where Nip_Guru='$id_wali_kelas'";
$run_guru = mysqli_query($koneksi,$get_guru);
$row_guru = mysqli_fetch_array ($run_guru);
$nama_wali_kelas = $row_guru['Nama_Guru'];
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
                    Dashboard / Edit Data Kelas
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
                        Edit Data Kelas
                    </h3>
                </div>
                <div class="panel-body">
                    <form method="post" class="form-forizontal" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-lg-12 col-md-3 control-label"> ID Kelas </label>
                            <div class="col-lg-12 col-md-6">
                                <input type="text" name="id_kelas" class="form-control" value="<?php echo $id_kelas; ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-12 col-md-3 control-label"> Nama Kelas </label>
                            <div class="col-lg-12 col-md-6">
                                <input type="text" name="nama_kelas" class="form-control" value = "<?php echo $nama_kelas;?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-12 col-md-3 control-label"> Nama Wali Kelas </label>
                            <div class="col-lg-12 col-md-6">
                                <select name="id_guru" class="form-control" required>
                                    <option value="<?php echo $id_wali_kelas; ?>"> <?php echo $nama_wali_kelas; ?>  </option>
                                    <?php
                                        $get_guru = "SELECT * FROM data_guru";
                                        $run_guru = mysqli_query($koneksi,$get_guru);
                                            while($row_guru = mysqli_fetch_array($run_guru)) {
                                                $Nip_Guru = $row_guru['Nip_Guru'];
                                                $nama_guru = $row_guru['Nama_Guru'];
                                                echo "
                                                <option value='$Nip_Guru'>$nama_guru</option>
                                                ";
                                            }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">  <!--Awal form group-->

                            <label  class="col-md-3 control-label"></label>
                            <div class="col-md-6"> <!--Awal Col-Md-6-->

                                <input type="submit" name="update" value="Update Data Kelas" class="btn btn-primary form-control">

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
        $id_kelas = $_POST['id_kelas'];
        $nama_kelas = $_POST['nama_kelas'];
        $id_guru = $_POST['id_guru'];

    $edit_kelas = "UPDATE tbl_kelas SET
            nama_kelas='$nama_kelas',
            id_wali_kelas='$id_guru'
            where id_kelas = '$id_kelas'
        ";
        $hasil_edit = mysqli_query($koneksi,$edit_kelas);
        if($hasil_edit) {
            echo "
            <script>
                alert('Data Berhasil Diubah')
            </script>
            ";

             echo "
            <script>

                window.open('index.php?view_kelas','_self')

            </script>
            ";
        }
}

?>

<?php } ?>