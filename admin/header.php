<?php
  include "../control/koneksi.php";
  session_start();
  if(!isset($_SESSION['email']))
    {
        echo"
            <script>alert('Silahkan Login Terlebih Dahulu ! !');document.location='../'</script>
        "; 
    }
?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/logo-fix.png">
  <title>Halaman Admin - Dashboard</title>
  <!-- Custom CSS -->
  <link href="../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
  <link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
  <link href="../assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet">

  <link href="../assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">

  <link href="../dist/css/style.min.css" rel="stylesheet">

</head>
