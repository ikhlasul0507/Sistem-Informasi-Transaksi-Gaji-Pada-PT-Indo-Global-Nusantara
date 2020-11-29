<?php 
include "koneksi.php";


if($_POST['simpan'])
{
    $nama =$_POST['nama'];
    $jabatan =$_POST['jabatan'];
    $email =$_POST['email'];
    $password =$_POST['password'];

    $sql = "INSERT INTO tbl_user SET id_karyawan='$nama',email='$email',password='$password',level='$jabatan'";

	    if (mysqli_query($conn, $sql)) 
	    { 
	    ?>
	        <script type="text/javascript">
	            alert ("Data Berhasil Disimpan");
	            window.location.href="../admin/data-user.php";
	        </script>
	    <?php
	    }
	    else
	    { 
	    ?>
	        <script type="text/javascript">
	            alert ("Gagal, Gunakan Email Berbeda");
	            window.location.href="../admin/data-user.php";
	        </script>
	    <?php
	    }

}

?>