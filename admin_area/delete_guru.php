<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 
    if(isset($_GET['delete_guru'])) {
        $delete_id = $_GET['delete_guru'];
        $delete_guru = "DELETE from data_guru where Nip_Guru='$delete_id'";
        $run_delete = mysqli_query($koneksi,$delete_guru);
        if($run_delete) {
            echo "<script>alert('Data berhasil dihapus')</script>";
            
            echo "<script>window.open('index.php?view_guru','_self')</script>";
        }
    }

?>

<?php } ?>