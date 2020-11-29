<?php 
include "koneksi.php";


if($_POST['simpan'])
{
    $id_karyawan =$_POST['id_karyawan'];
    $gaji_pokok =$_POST['gaji_pokok'];
    $bpjs_kt =$_POST['bpjs_kt'];
    $bpjs_ks =$_POST['bpjs_ks'];
    $atribut =$_POST['atribut'];
    $thr =$_POST['thr'];
    $pp =$_POST['pp'];
    $lembur =$_POST['lembur'];
    $p_bpjsks =$_POST['p_bpjsks'];
    $p_bpjskt =$_POST['p_bpjskt'];
    $tgl_byr_gaji =$_POST['tgl_byr_gaji'];

    $sql = "INSERT INTO tbl_gaji SET id_karyawan='$id_karyawan',gaji_pokok='$gaji_pokok',bpjs_kt='$bpjs_kt',bpjs_ks='$bpjs_ks',atribut='$atribut',thr='$thr',pp='$pp',lembur='$lembur',p_bpjsks='$p_bpjsks',p_bpjskt='$p_bpjskt',tgl_byr_gaji='$tgl_byr_gaji'";

	    if (mysqli_query($conn, $sql)) 
	    { 
	    ?>
	        <script type="text/javascript">
	            alert ("Data Berhasil Disimpan");
	            window.location.href="../admin/data-gaji.php";
	        </script>
	    <?php
	    }
	    else
	    { 
	    ?>
	        <script type="text/javascript">
	            alert ("Gagal");
	            window.location.href="../admin/data-gaji.php";
	        </script>
	    <?php
	    }

}elseif($_POST['edit'])
{
	$id_gaji =$_POST['id_gaji'];
    $gaji_pokok =$_POST['gaji_pokok'];
    $bpjs_kt =$_POST['bpjs_kt'];
    $bpjs_ks =$_POST['bpjs_ks'];
    $atribut =$_POST['atribut'];
    $thr =$_POST['thr'];
    $pp =$_POST['pp'];
    $lembur =$_POST['lembur'];
    $p_bpjsks =$_POST['p_bpjsks'];
    $p_bpjskt =$_POST['p_bpjskt'];
    $tgl_byr_gaji =$_POST['tgl_byr_gaji'];

    $sql = "UPDATE tbl_gaji SET id_karyawan='$id_karyawan',gaji_pokok='$gaji_pokok',bpjs_kt='$bpjs_kt',bpjs_ks='$bpjs_ks',atribut='$atribut',thr='$thr',pp='$pp',lembur='$lembur',p_bpjsks='$p_bpjsks',p_bpjskt='$p_bpjskt',tgl_byr_gaji='$tgl_byr_gaji' WHERE id_gaji='$id_gaji'";

	    if (mysqli_query($conn, $sql)) 
	    { 
	    ?>
	        <script type="text/javascript">
	            alert ("Data Berhasil Di Edit");
	            window.location.href="../admin/data-gaji.php";
	        </script>
	    <?php
	    }
	    else
	    { 
	    ?>
	        <script type="text/javascript">
	            alert ("Gagal");
	            window.location.href="../admin/data-gaji.php";
	        </script>
	    <?php
	    }

}

?>