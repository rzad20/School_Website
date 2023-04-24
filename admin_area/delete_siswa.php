<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 
    if(isset($_GET['delete_siswa'])) {
        $delete_id = $_GET['delete_siswa'];
        $delete_siswa = "DELETE from tabel_siswa where NIS='$delete_id'";
        $run_delete = mysqli_query($koneksi,$delete_siswa);
        if($run_delete) {
            echo "<script>alert('Data berhasil dihapus')</script>";
            
            echo "<script>window.open('index.php?view_siswa','_self')</script>";
        }
    }

?>

<?php } ?>