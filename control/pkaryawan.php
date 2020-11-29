<?php 
include "koneksi.php";


if($_POST['simpan'])
{
    $nama =$_POST['nama'];
    $jabatan =$_POST['jabatan'];
    $tahun_mulai =$_POST['tahun_mulai'];
    $area =$_POST['area'];
    $norek =$_POST['norek'];

    $sql = "INSERT INTO tbl_karyawan SET nama='$nama',jabatan='$jabatan',tahun_mulai='$tahun_mulai',area='$area',norek='$norek'";

	    if (mysqli_query($conn, $sql)) 
	    { 
	    ?>
	        <script type="text/javascript">
	            alert ("Data Berhasil Disimpan");
	            window.location.href="../admin/data-karyawan.php";
	        </script>
	    <?php
	    }
	    else
	    { 
	    ?>
	        <script type="text/javascript">
	            alert ("Gagal");
	            window.location.href="../admin/data-karyawan.php";
	        </script>
	    <?php
	    }

}elseif($_POST['edit'])
{
	$id_karyawan = $_POST['id_karyawan'];
	$nama =$_POST['nama'];
    $jabatan =$_POST['jabatan'];
    $tahun_mulai =$_POST['tahun_mulai'];
    $area =$_POST['area'];
    $norek =$_POST['norek'];

    $sql = "UPDATE tbl_karyawan SET nama='$nama',jabatan='$jabatan',tahun_mulai='$tahun_mulai',area='$area',norek='$norek' WHERE id_karyawan='$id_karyawan'";

	    if (mysqli_query($conn, $sql)) 
	    { 
	    ?>
	        <script type="text/javascript">
	            alert ("Data Berhasil Di Edit");
	            window.location.href="../admin/data-karyawan.php";
	        </script>
	    <?php
	    }
	    else
	    { 
	    ?>
	        <script type="text/javascript">
	            alert ("Gagal");
	            window.location.href="../admin/data-karyawan.php";
	        </script>
	    <?php
	    }

}

?>