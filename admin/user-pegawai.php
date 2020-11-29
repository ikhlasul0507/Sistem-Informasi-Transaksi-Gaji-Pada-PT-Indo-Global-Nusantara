<?php
include 'header.php';
?>
<?php 
  include "../control/koneksi.php";
  $email = $_SESSION['email'];
  $tgl = date('Y-m');

  $gj=mysqli_query($conn,"SELECT * FROM tbl_gaji as a inner join tbl_karyawan as b on a.id_karyawan=b.id_karyawan inner join tbl_user as c on a.id_karyawan=c.id_karyawan WHERE email='$email' AND tgl_byr_gaji LIKE '%$tgl%' ORDER BY nama DESC");
  
                      foreach ($gj as $g) :
                        $ta = $g['gaji_pokok']+$g['bpjs_kt']+$g['bpjs_ks']+$g['atribut']+$g['thr']+$g['pp']+$g['lembur'];
                        $tp = $g['p_bpjskt']+$g['p_bpjsks'];
                        $gt = $ta-$tp;
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
                <span class="ml-2 d-none d-lg-inline-block"><span>Hello,</span> <span class="text-dark"><?php 

                    $email= $_SESSION['email'];
                    $data=mysqli_query($conn,"SELECT * FROM tbl_user WHERE email='$email' ");
                    while($tampil=mysqli_fetch_array($data))
                    { 
                      echo $tampil['email'];
                    }
                ?></span> </span>
              </a>
             
            </li>
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
          </ul>
        </div>
      </nav>
    </header>
    <?php include 'sidebar.php';  ?>
    <!-- Page wrapper  -->
    <div class="page-wrapper">
      <!-- ============================================================== -->
      <!-- Bread crumb and right sidebar toggle -->
      <div class=" page-breadcrumb">
        <div class="row">
          <div class="col-7 align-self-center">
            <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Pilihan Bulan Slip Gaji : <?= date('M Y'); ?></h4>
          </div>

        </div>
      </div>
      <div class="container-fluid">
        <div class="card-group">
          <div class="card border-right">
            <div class="card-body">
              <div class="card-header text-center">
                <h5 style="color: black; font-weight:bold;">Slip Gaji Karyawan</h5>
              </div>
              <div class="card-body ">
                <div class="row">
                  <div class="col-3">
                    <h6 class="card-title">Nama </h6>
                    <h6 class="card-title">Jabatan </h6>
                  </div>
                  <div class="col-3">
                    <h6 class="card-title">: <?= $g['nama'];?></h6>
                    <h6 class="card-title">: <?php if($g['jabatan']==1){
                              echo "Pimpinan";
                            }else{
                              echo " Karyawan";
                            } ?></h6>
                  </div>
                  <div class="col-3">
                    <h6 class="card-title">Tahun Masuk Bekerja </h6>
                    <h6 class="card-title">Pembayaran Gaji</h6>
                  </div>
                  <div class="col-3">
                    <h6 class="card-title">: <?= $g['tahun_mulai'];?></h6>
                    <h6 class="card-title">: <?= $g['tgl_byr_gaji'];?></h6>
                  </div>
                </div>
                <div class="row mt-4" style="color: black;">
                  <div class="col-3">
                    <h6 style="font-weight:bold; text-decoration: underline; color:black"> PENGHASILAN</h6>
                    <p>Gaji Pokok </p>
                    <p>BPJS Ketenagakerjaan </p>
                    <p>BPJS Kesehatan </p>
                    <p>Uniform/Atribut </p>
                    <p>THR </p>
                    <p>Pembinaan Pembekalan </p>
                    <p>Lembur </p>
                    <br>
                  </div>
                  <div class="col-3">
                    <br>
                    <p><?= "Rp. ". number_format($g['gaji_pokok'], 0, ',', '.')?></p>
                    <p><?= "Rp. ". number_format($g['bpjs_kt'], 0, ',', '.')?></p>
                    <p><?= "Rp. ". number_format($g['bpjs_ks'], 0, ',', '.')?></p>
                    <p><?= "Rp. ". number_format($g['atribut'], 0, ',', '.')?></p>
                    <p><?= "Rp. ". number_format($g['thr'], 0, ',', '.')?></p>
                    <p><?= "Rp. ". number_format($g['pp'], 0, ',', '.')?></p>
                    <p><?= "Rp. ". number_format($g['lembur'], 0, ',', '.')?></p>
                  </div>
                  <div class="col-3">
                    <h6 style="font-weight:bold; text-decoration: underline; color:black"> POTONGAN</h6>
                    <p>BPJS Ketenagakerjaan </p>
                    <p>BPJS Kesehatan </p>

                  </div>
                  <div class="col-3">
                    <br>
                    <p><?= "Rp. ". number_format($g['p_bpjskt'], 0, ',', '.')?></p>
                    <p><?= "Rp. ". number_format($g['p_bpjsks'], 0, ',', '.')?></p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-9">
                    <p class="mb-6" style="color: black; font-weight:bold;">Jumlah Gaji yang Diterima</p>
                  </div>
                  <div class="col-3">
                    <p style="color: black; font-weight:bold;"><?= number_format($gt, 0, ',', '.')?></p>
                  </div>
                </div>

                <a href="detail.php?id_gaji=<?= $g['id_gaji']?>" target="_blank" class="btn btn-primary justify-content-center text-center">Cetak Slip Gaji</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <?php
  endforeach;
    include 'footer.php';
    ?>