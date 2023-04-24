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
    <title>Tambah Data Kelas</title>
</head>
<body>
<div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa fa-plus-quare-0 fa-fw">
                        </i>
                        Tambah Data Kelas
                    </h3>
                </div>
                <div class="panel-body">
                    <form method="post" class="form-forizontal" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-lg-12 col-md-3 control-label"> ID Kelas </label>
                            <div class="col-lg-12 col-md-6">
                                <input type="text" name="id_kelas" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-12 col-md-3 control-label"> Nama Kelas </label>
                            <div class="col-lg-12 col-md-6">
                                <input type="text" name="nama_kelas" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-12 col-md-3 control-label"> Nama Wali Kelas </label>
                            <div class="col-lg-12 col-md-6">
                                <select name="id_guru" class="form-control" required>
                                    <option>  </option>
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

                                <input type="submit" name="submit" value="Tambah Data Kelas" class="btn btn-primary form-control">

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
        $id_kelas = $_POST['id_kelas'];
        $nama_kelas = $_POST['nama_kelas'];
        $id_guru = $_POST['id_guru'];

        $tambah_kelas = "INSERT into tbl_kelas SET
            id_kelas='$id_kelas',
            nama_kelas='$nama_kelas',
            id_wali_kelas='$id_guru'
        ";
        $hasil_tambah = mysqli_query($koneksi,$tambah_kelas);
        if($hasil_tambah) {
            echo "
            <script>
                alert('Data Berhasil Ditambah')
            </script>
            ";

             echo "
            <script>

                window.open('index.php?view_kelas','_self')

            </script>
            ";
        }
    }
}
?>