<?php
include 'header.php';
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
                <img src="../assets/images/logo-icon.png" alt="homepage" class="light-logo" />
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
                <span class="ml-2 d-none d-lg-inline-block"><span>Hello,</span> <span class="text-dark">Jason Doe</span> </span>
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
    <div class="page-wrapper">
      <!-- ============================================================== -->
      <!-- Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <div class="page-breadcrumb">
        <div class="row">
          <div class="col-7 align-self-center">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Pengelolaan Laporan Gaji</h3>
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
      <div class="container-fluid">
        <!-- basic table -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#bs-example-modal-lg"><em class="fa fa-file-excel"></em> Eksport Excel</button>
                <button type="button" class="btn btn-danger mb-3" data-toggle="modal" data-target="#bs-example-modal-lg"><em class="fa fa-print"></em> Cetak Laporan</button>

                <!--  tabel -->
                <div class="table-responsive">
                  <table id="zero_config" class="table table-striped table-bordered no-wrap">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Area</th>
                        <th>No. Rek</th>
                        <th>Lembur</th>
                        <th>Gaji</th>
                        <th>Potongan</th>
                        <th>Total</th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Abdi</td>
                        <td>Pabrik Gelumbang</td>
                        <td>072172172112</td>
                        <td>Rp 250.000</td>
                        <th>Rp 3.000.000</th>
                        <th>Rp 500.000</th>
                        <th>Rp 2.750.000</th>

                      </tr>

                      <tr>
                        <td>2</td>
                        <td>Bimo</td>
                        <td>Pabrik Gelumbang</td>
                        <td>072172172112</td>
                        <td>Rp 250.000</td>
                        <th>Rp 3.000.000</th>
                        <th>Rp 500.000</th>
                        <th>Rp 2.750.000</th>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Area</th>
                        <th>No. Rek</th>
                        <th>Lembur</th>
                        <th>Gaji</th>
                        <th>Potongan</th>
                        <th>Total</th>

                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Start Sales Charts Section -->
        <!-- *************************************************************** -->

        <!-- *************************************************************** -->
        <!-- End Sales Charts Section -->

        <!-- *************************************************************** -->
        <!-- End Top Leader Table -->
        <!-- *************************************************************** -->
      </div>
      <!-- ============================================================== -->
      <?php
      include 'footer.php';
      ?>