<?php

include 'header.php';

?>

<?php
  include "../control/koneksi.php";
  session_start();
  if(!isset($_SESSION['email']))
    {
        echo"
            <script>alert('Silahkan Login Terlebih Dahulu ! !');document.location='../'</script>
        "; 
    }else{
      echo"
            <script>alert('Selamat Datang !');document.location='#'</script>
        ";
    }
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">


<body>
  <!-- ============================================================== -->
  <!-- Preloader - style you can find in spinners.css -->
  <!-- ============================================================== -->
  <div class="preloader">
    <div class="lds-ripple">
      <div class="lds-pos"></div>
      <div class="lds-pos"></div>
    </div>
  </div>
  <!-- ============================================================== -->
  <!-- Main wrapper - style you can find in pages.scss -->
  <!-- ============================================================== -->
  <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar" data-navbarbg="skin6">
      <nav class="navbar top-navbar navbar-expand-md">
        <div class="navbar-header" data-logobg="skin6">
          <!-- This is for the sidebar toggle which is visible on mobile only -->
          <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
          <!-- ============================================================== -->
          <!-- Logo -->
          <!-- ============================================================== -->
          <div class="navbar-brand">
            <!-- Logo icon -->
            <a href="index.html">
              <b class="logo-icon">
                <!-- Dark Logo icon -->
                <img src="../assets/images/logo-fix.png" height="40px" alt="homepage" class="dark-logo" />
                <!-- Light Logo icon -->
                <img src="../assets/images/logo-fix.png" alt="homepage" class="light-logo" />
              </b>
              <!--End Logo icon -->
              <!-- Logo text -->
              <span class="logo-text">
                <!-- dark Logo text -->
                <img src="../assets/images/logo-3.png" height="30px" alt="homepage" class="dark-logo" />
                <!-- Light Logo text -->
                <img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
              </span>
            </a>
          </div>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Toggle which is visible on mobile only -->
          <!-- ============================================================== -->
          <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
          <!-- ============================================================== -->
          <!-- toggle and nav items -->
          <!-- ============================================================== -->

          <!-- ============================================================== -->
          <!-- Right side toggle and nav items -->
          <!-- ============================================================== -->
          <ul class="navbar-nav float-right ">

            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="../assets/images/logo-fix.png" alt="user" class="rounded-circle" width="40">
               

                <span class="ml-2 d-none d-lg-inline-block"><span>Hello,</span> <span class="text-dark">
                   <?php 

                    $email= $_SESSION['email'];
                    $data=mysqli_query($conn,"SELECT * FROM tbl_user WHERE email='$email' ");
                    while($tampil=mysqli_fetch_array($data))
                    { 
                      echo $tampil['email'];
                    }
                ?>

                
              </a>
              
            </li>
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
          </ul>
        </div>
      </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <?php include 'sidebar.php';  ?>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->

    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper" style="margin-top: 50px;">
      <!-- ============================================================== -->
      <!-- Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <div class="page-breadcrumb">
        <div class="row">
          <div class="col-7 align-self-center">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Good 
              <?php 

                    $email= $_SESSION['email'];
                    $data=mysqli_query($conn,"SELECT * FROM tbl_user WHERE email='$email' ");
                    while($tampil=mysqli_fetch_array($data))
                    { 
                      echo $tampil['nama'];
                    }
                ?>
            !</h3>
            <div class="d-flex align-items-center">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb m-0 p-0">
                  <li class="breadcrumb-item"><a href="index.php">Dashboard</a>
                  </li>
                </ol>
              </nav>
            </div>
          </div>

        </div>
      </div>
      <!-- ============================================================== -->
      <!-- End Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Container fluid  -->
      <!-- ============================================================== -->
      <div class="container-fluid">
        <!-- *************************************************************** -->
        <!-- Start First Cards -->
        <!-- *************************************************************** -->
        <div class="card-group">
          <div class="card border-right">
            <div class="card-body">
              <div class="d-flex d-lg-flex d-md-block align-items-center">
                <div>
                  <div class="d-inline-flex align-items-center">
                    <h2 class="text-dark mb-1 font-weight-medium">
                      <?php 
                        $kar = mysqli_query($conn,"SELECT * FROM tbl_karyawan");
                        $a = mysqli_num_rows($kar);
                        echo $a;
                       ?>
                    </h2>
                    <span class="badge bg-primary font-12 text-white font-weight-medium badge-pill ml-2 d-lg-block d-md-none font-weight-medium">Karyawan</span>
                  </div>
                  <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Total Data Karyawan</h6>
                </div>
                <div class="ml-auto mt-md-3 mt-lg-0">
                </div>
              </div>
            </div>
          </div>
       <div class="card border-right">
            <div class="card-body">
              <div class="d-flex d-lg-flex d-md-block align-items-center">
                <div>
                  <div class="d-inline-flex align-items-center">
                    <h2 class="text-dark mb-1 font-weight-medium"> 
                      <?php 
                        $kar = mysqli_query($conn,"SELECT * FROM tbl_gaji");
                        $a = mysqli_num_rows($kar);
                        echo $a;
                       ?></h2>
                    <span class="badge bg-primary font-12 text-white font-weight-medium badge-pill ml-2 d-lg-block d-md-none font-weight-medium">Gaji Karyawan</span>
                  </div>
                  <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Total Data Gaji Karyawan</h6>
                </div>
                <div class="ml-auto mt-md-3 mt-lg-0">
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- *************************************************************** -->
      </div>
      <!-- ============================================================== -->
      <?php
      include 'footer.php';
      ?>