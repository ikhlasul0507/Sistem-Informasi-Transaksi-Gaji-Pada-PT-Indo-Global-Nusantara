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
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Laporan Data Karyawan</h3>
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
                        <h4 class="modal-title" id="myLargeModalLabel">Form Input Data Karyawan</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                      </div>
                      <div class="modal-body">
                        
                        <div class="row">
                          <div class="col-sm-12 col-md-6 col-lg-12">
                            <div class="card">
                              <form action="../control/pkaryawan.php" method="post">
                              <div class="card-body">
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Nama</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="nama">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Jabatan</label>
                                    <select class="form-control" name="jabatan">
                                      <option value="2">Karyawan</option>
                                      <option value="1">Pimpinan</option>
                                      
                                    </select>
                                   
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Tahun Mulai Bekerja</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="tahun_mulai">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Area</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="area">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">No. Rekening</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="norek">
                                  </div>
                                   <input type="submit" class="btn btn-info mb-3" name="simpan" value="Simpan">
                              </div>

                        </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <!-- edit -->
                            <?php
                                $kar=mysqli_query($conn,"SELECT * FROM tbl_karyawan");
                                foreach ($kar as $kk) :
                                    $id_karyawan= $kk['id_karyawan'];
                                    $nama= $kk['nama'];
                                    $jabatan= $kk['jabatan'];
                                    $tahun_mulai= $kk['tahun_mulai'];
                                    $area= $kk['area'];
                                    $norek= $kk['norek'];
                                 ?>
                <!--  Modal content for the above example -->
                <div class="modal fade" id="modal-edit<?= $kk['id_karyawan'];?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title" id="myLargeModalLabel">Form Edit Data Karyawan</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                      </div>
                      <div class="modal-body">
                        
                        <div class="row">
                          <div class="col-sm-12 col-md-6 col-lg-12">
                            <div class="card">
                              <form action="../control/pkaryawan.php" method="post">
                              <div class="card-body">
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Nama</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="nama" value="<?= $nama; ?>">
                                    <input type="hidden" name="id_karyawan" value="<?= $id_karyawan ?>">
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Jabatan</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="jabatan" value="<?= $jabatan; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Tahun Mulai Bekerja</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="tahun_mulai" value="<?= $tahun_mulai; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Area</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="area" value="<?= $area; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">No. Rekening</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="norek" value="<?= $norek;?>">
                                  </div>
                                   <input type="submit" class="btn btn-info mb-3" name="edit" value="Simpan">
                              </div>

                        </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
              <?php endforeach; ?>
                <div class="table-responsive">
                  <table id="zero_config" class="table table-striped table-bordered no-wrap">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Tahun Mulai Bekerja</th>
                        <th>Area</th>
                        <th>No. Rekening</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no = 1;
                      $kar=mysqli_query($conn,"SELECT * FROM tbl_karyawan");
                      foreach ($kar as $k) : ?>
                        <tr>
                          <td><?= $no++;?></td>
                          <td><?= $k['nama'] ?></td>
                          <td>
                            <?php if($k['jabatan']==1){
                              echo "Pimpinan";
                            }else{
                              echo " Karyawan";
                            } ?></td>
                          <td><?= $k['tahun_mulai'];?></td>
                          <td><?= $k['area'];?></td>
                          <td><?= $k['norek'];?></td>
                          <td>
                            <a href="" class="btn btn-warning" data-toggle="modal" data-target="#modal-edit<?= $k['id_karyawan'];?>" type="button">Edit</a>
                            <a href="../control/hkaryawan.php?id_karyawan=<?= $k['id_karyawan']?>" onclick="return confirm('Yakin, Data Di Hapus ?');" class="btn btn-danger">Hapus</a>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                      
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Tahun Mulai Bekerja</th>
                        <th>Area</th>
                        <th>No. Rekening</th>
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