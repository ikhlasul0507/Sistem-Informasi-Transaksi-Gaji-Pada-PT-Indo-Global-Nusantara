<?php 
//hapus
include "koneksi.php";
$id_karyawan = $_GET['id_karyawan'];
$delete = mysqli_query($conn, "DELETE FROM tbl_karyawan where id_karyawan='$id_karyawan'");
if($delete){
    ?>
    <script type="text/javascript">
                alert ("Data Berhasil Di Hapus");
                window.location.href="../admin/data-karyawan.php";
            </script>
    <?php
    }
    else
    {
    ?>
        <script type="text/javascript">
                alert ("Data Gagal Di Hapus");
                window.location.href="../admin/data-karyawan.php";
            </script>
    <?php
    }
?>
