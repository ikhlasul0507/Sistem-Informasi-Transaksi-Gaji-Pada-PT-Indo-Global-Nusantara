<?php 
//hapus
include "koneksi.php";
$id_user = $_GET['id_user'];
$delete = mysqli_query($conn, "DELETE FROM tbl_user where id_user='$id_user'");
if($delete){
    ?>
    <script type="text/javascript">
                alert ("Data Berhasil Di Hapus");
                window.location.href="../admin/data-user.php";
            </script>
    <?php
    }
    else
    {
    ?>
        <script type="text/javascript">
                alert ("Data Gagal Di Hapus");
                window.location.href="../admin/data-user.php";
            </script>
    <?php
    }
?>
