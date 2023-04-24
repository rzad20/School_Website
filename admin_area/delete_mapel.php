<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 
    if(isset($_GET['delete_mapel'])) {
        $delete_id = $_GET['delete_mapel'];
        $delete_mapel = "DELETE from tbl_mata_pelajaran where id_mk='$delete_id'";
        $run_delete = mysqli_query($koneksi,$delete_mapel);
        if($run_delete) {
            echo "<script>alert('Data berhasil dihapus')</script>";
            
            echo "<script>window.open('index.php?view_mapel','_self')</script>";
        }
    }

?>

<?php } ?>