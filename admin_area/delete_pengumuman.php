<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 
    if(isset($_GET['delete_pengumuman'])) {
        $delete_pengumuman = $_GET['delete_pengumuman'];
        $delete_pengumuman = "DELETE from pengumuman where id_pengumuman='$delete_id'";
        $run_delete = mysqli_query($koneksi,$delete_pengumuman);
        if($run_delete) {
            echo "<script>alert('Data berhasil dihapus')</script>";
            
            echo "<script>window.open('index.php?view_pengumuman','_self')</script>";
        }
    }

?>

<?php } ?>