<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 
    if(isset($_GET['delete_kegiatan'])) {
        $delete_kegiatan = $_GET['delete_kegiatan'];
        $delete_kegiatan = "DELETE from tbl_kegiatan where id_kegiatan='$delete_id'";
        $run_delete = mysqli_query($koneksi,$delete_kegiatan);
        if($run_delete) {
            echo "<script>alert('Data berhasil dihapus')</script>";
            
            echo "<script>window.open('index.php?view_kegiatan','_self')</script>";
        }
    }

?>

<?php } ?>