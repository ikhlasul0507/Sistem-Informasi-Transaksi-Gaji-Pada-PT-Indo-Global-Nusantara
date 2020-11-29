<aside class="left-sidebar" data-sidebarbg="skin6">
  <!-- Sidebar scroll-->
  <div class="scroll-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav">
      <ul id="sidebarnav">
        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="index.php" aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span class="hide-menu">Dashboard</span></a></li>
        <li class="list-divider"></li>
        <li class="nav-small-cap"><span class="hide-menu">Menu</span></li>
                    <?php 
                    $email= $_SESSION['email'];
                    $data=mysqli_query($conn,"SELECT * FROM tbl_user WHERE email='$email' ");
                    $t=mysqli_fetch_array($data);
                    $level = $t['level'];

                    if($level==0){
                    ?>
        <li class="sidebar-item"> <a class="sidebar-link" href="data-gaji.php" aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span class="hide-menu">Data Gaji</span></a>
        </li>
        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="data-karyawan.php" aria-expanded="false"><i data-feather="calendar" class="feather-icon"></i><span class="hide-menu">Data Karyawan</span></a></li>
        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="data-user.php" aria-expanded="false"><i data-feather="calendar" class="feather-icon"></i><span class="hide-menu">Data User</span></a></li>
       
        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="laporan-gaji.php" aria-expanded="false"><i data-feather="calendar" class="feather-icon"></i><span class="hide-menu">Laporan Gaji</span></a></li>

        <li class="list-divider"></li>
        <li class="nav-small-cap"><span class="hide-menu">Extra</span></li>
        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="../control/logout.php" aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span class="hide-menu" onclick="return confirm('Yakin Ingin Keluar !')">Logout</span></a></li>
      <?php }elseif($level==1){ ?>
          <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="laporan-gaji.php" aria-expanded="false"><i data-feather="calendar" class="feather-icon"></i><span class="hide-menu">Laporan Gaji</span></a></li>

        <li class="list-divider"></li>
        <li class="nav-small-cap"><span class="hide-menu">Extra</span></li>
        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="../control/logout.php" aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span class="hide-menu" onclick="return confirm('Yakin Ingin Keluar !')">Logout</span></a></li>
      <?php }else{ ?>
         <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="user-pegawai.php" aria-expanded="false"><i data-feather="calendar" class="feather-icon"></i><span class="hide-menu">Lihat Gaji</span></a></li>
          <li class="list-divider"></li>
        <li class="nav-small-cap"><span class="hide-menu">Extra</span></li>
        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="../control/logout.php" aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span class="hide-menu" onclick="return confirm('Yakin Ingin Keluar !')">Logout</span></a></li>
      <?php } ?>
      </ul>
    </nav>
    <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
</aside>