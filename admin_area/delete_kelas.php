<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 
    if(isset($_GET['delete_kelas'])) {
        $delete_id = $_GET['delete_kelas'];
        $delete_kelas = "DELETE from tbl_kelas where id_kelas='$delete_id'";
        $run_delete = mysqli_query($koneksi,$delete_kelas);
        if($run_delete) {
            echo "<script>alert('Data berhasil dihapus')</script>";
            
            echo "<script>window.open('index.php?view_kelas','_self')</script>";
        }
    }

?>

<?php } ?>