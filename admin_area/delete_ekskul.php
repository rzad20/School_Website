<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 
    if(isset($_GET['delete_ekskul'])) {
        $delete_id = $_GET['delete_ekskul'];
        $delete_ekskul = "DELETE from tbl_ekskul where id_ekskul='$delete_id'";
        $run_delete = mysqli_query($koneksi,$delete_ekskul);
        if($run_delete) {
            echo "<script>alert('Data berhasil dihapus')</script>";
            
            echo "<script>window.open('index.php?view_ekskul','_self')</script>";
        }
    }

?>

<?php } ?>