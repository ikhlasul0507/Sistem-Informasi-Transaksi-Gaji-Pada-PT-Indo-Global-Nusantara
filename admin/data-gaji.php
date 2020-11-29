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
            <a href="index.php">
              <b class="logo-icon">
                <!-- Dark Logo icon -->
                <img src="../assets/images/logo-fix.png" height="40px" alt="homepage" class="dark-logo" />
                <!-- Light Logo icon -->
                <img src="../assets/images/logo-fix.png" height="40px" alt="homepage" class="light-logo" />
              </b>
              <!--End Logo icon -->
              <!-- Logo text -->
              <span class="logo-text">
                <!-- dark Logo text -->
                <img src="../assets/images/logo-3.png" height="30px" alt="homepage" class="dark-logo" />
                <!-- Light Logo text -->
                <img src="../assets/images/logo-3-text.png" class="light-logo" alt="homepage" />
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
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Laporan Data Gaji Karyawan</h3>
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
                <button type="button" class="btn btn-info mb-3" data-toggle="modal" data-target="#bs-example-modal-lg">Tambah Data</button>

                <!--  Modal content for the above example -->
                <div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title" id="myLargeModalLabel">Input Data Gaji<br> <?= date('Y-m-d');?></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                      </div>
                      <form method="post" action="../control/pgaji.php">
                      <div class="modal-body">
                        <div class="row-sm-8">
                          <div class="col">
                            <div class="form-group">
                              <label for="">Nama</label>
                              <select class="custom-select mr-sm-2" id="lvl" name="id_karyawan">
                                <option selected disabled>Pilih...</option>
                                                <?php
                                                    $gol=mysqli_query($conn,"SELECT * FROM tbl_karyawan ORDER BY nama ASC");
                                                    foreach ($gol as $g) : ?>
                                                    <option value="<?= $g['id_karyawan'];?>"><?= $g['nama'].'-'.$g['jabatan'];?></option>
                                                <?php endforeach; ?>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="card">
                              <div class="card-body">
                                  <h4 class="card-title">PENGHASILAN</h4>
                                  <div class="form-group">
                                    <label for="">Gaji Pokok</label>
                                    <input type="text" class="form-control" name="gaji_pokok">
                                  </div>
                                  <div class="form-group">
                                    <label for="">BPJS Ketenagakerjaan 6.24%</label>
                                    <input type="text" class="form-control" name="bpjs_kt">
                                  </div>
                                  <div class="form-group">
                                    <label for="">BPJS Kesehatan 4%</label>
                                    <input type="text" class="form-control" name="bpjs_ks">
                                  </div>
                                  <div class="form-group">
                                    <label for="">Uniform/Atribut</label>
                                    <input type="text" class="form-control" name="atribut">
                                  </div>
                                  <div class="form-group">
                                    <label for="">THR</label>
                                    <input type="text" class="form-control" name="thr">
                                  </div>
                                  <div class="form-group">
                                    <label for="">Pembina Pembekalan</label>
                                    <input type="text" class="form-control" name="pp">
                                  </div>
                                  <div class="form-group">
                                    <label for="">Lembur</label>
                                    <input type="text" class="form-control" name="lembur">
                                  </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="card">
                              <div class="card-body">
                                  <h4 class="card-title">POTONGAN</h4>
                                  <div class="form-group">
                                    <label for="">BPJS Kesehatan</label>
                                    <input type="text" class="form-control" name="p_bpjsks">
                                  </div>
                                  <div class="form-group">
                                    <label for="">BPJS Ketenagakerjaan</label>
                                    <input type="text" class="form-control" name="p_bpjskt">
                                  </div>
                                  <input type="hidden" name="tgl_byr_gaji" value="<?= date('Y-m-d');?>">
                                  <input type="submit" class="btn btn-info mb-3" name="simpan" value="Simpan">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      </form>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div>
                <!-- modal -->

                <div class="table-responsive">
                  <table id="zero_config" class="table table-striped table-bordered no-wrap">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Tahun Mulai Bekerja</th>
                        <th>Gaji Pokok</th>
                        <th>BPJK Ketenagakerjaan</th>
                        <th>BPJK Kesehatan</th>
                        <th>Uniform.Atribut</th>
                        <th>THR</th>
                        <th>Pembinaan Pembekalan</th>
                        <th>Lembur</th>
                        <th class="bg-danger text-white">BPJS Kesehatan</th>
                        <th class="bg-danger text-white">BPJS Ketenagakerjaan</th>
                        <th>Waktu Bayar Gaji</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no = 1;
                      $gj=mysqli_query($conn,"SELECT * FROM tbl_gaji as a inner join tbl_karyawan as b on a.id_karyawan=b.id_karyawan  ORDER BY nama DESC");
                      foreach ($gj as $g) : ?>
                      <tr>
                        <td><?= $no++;?></td>
                        <td><?= $g['nama'];?></td>
                        <td><?php if($gg['jabatan']==1){
                              echo "Pimpinan";
                            }else{
                              echo " Karyawan";
                            } ?></td>
                        <td><?= $g['tahun_mulai'];?></td>
                        <td><?= "Rp. ". number_format($g['gaji_pokok'], 0, ',', '.')?></td>
                        <td><?= "Rp. ". number_format($g['bpjs_kt'], 0, ',', '.')?></td>
                        <td><?= "Rp. ". number_format($g['bpjs_ks'], 0, ',', '.')?></td>
                        <td><?= "Rp. ". number_format($g['atribut'], 0, ',', '.')?></td>
                        <td><?= "Rp. ". number_format($g['thr'], 0, ',', '.')?></td>
                        <td><?= "Rp. ". number_format($g['pp'], 0, ',', '.')?></td>
                        <td><?= "Rp. ". number_format($g['lembur'], 0, ',', '.')?></td>
                        <td><?= "Rp. ". number_format($g['p_bpjsks'], 0, ',', '.')?></td>
                        <td><?= "Rp. ". number_format($g['p_bpjskt'], 0, ',', '.')?></td>
                        <td><?= $g['tgl_byr_gaji'];?></td>
                        <td>
                          <a href="detail.php?id_gaji=<?= $g['id_gaji']?>" class="btn btn-success" type="button" target="_blank">Detail</a>
                          
                          <a href="../control/hgaji.php?id_gaji=<?= $g['id_gaji']?>" onclick="return confirm('Yakin, Data Di Hapus ?');" class="btn btn-danger">Hapus</a></td>
                      </tr>
                    <?php endforeach; ?>
                      
                    </tbody>
                    <tfoot>
                      <tr>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Tahun Mulai Bekerja</th>
                        <th>Gaji Pokok</th>
                        <th>BPJK Ketenagakerjaan</th>
                        <th>BPJK Kesehatan</th>
                        <th>Uniform.Atribut</th>
                        <th>THR</th>
                        <th>Pembinaan Pembekalan</th>
                        <th>Lembur</th>
                        <th class="bg-danger text-white">BPJS Kesehatan</th>
                        <th class="bg-danger text-white">BPJS Ketenagakerjaan</th>
                        <th>Waktu Bayar Gaji</th>
                        <th>Aksi</th>
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