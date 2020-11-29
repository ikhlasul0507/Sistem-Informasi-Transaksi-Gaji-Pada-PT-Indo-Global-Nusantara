<?php 
//hapus
include "koneksi.php";
$id_gaji = $_GET['id_gaji'];
$delete = mysqli_query($conn, "DELETE FROM tbl_gaji where id_gaji='$id_gaji'");
if($delete){
    ?>
    <script type="text/javascript">
                alert ("Data Berhasil Di Hapus");
                window.location.href="../admin/data-gaji.php";
            </script>
    <?php
    }
    else
    {
    ?>
        <script type="text/javascript">
                alert ("Data Gagal Di Hapus");
                window.location.href="../admin/data-gaji.php";
            </script>
    <?php
    }
?>
