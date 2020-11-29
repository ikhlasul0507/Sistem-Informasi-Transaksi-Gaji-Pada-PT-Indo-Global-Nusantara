    <?php 
        include "../control/koneksi.php";

        $title = "Data Gaji";

         header("Content-type: application/vnd-ms-excel");
     
         header("Content-Disposition: attachment; filename=Laporan Data Gaji.xls");
         
         header("Pragma: no-cache");
         
         header("Expires: 0");
     ?>
<center>
  <h4>REKENING ANGGOTA PT. MAS BULAN OKTOBER 2020</h4>
                  <table id="zero_config"  border="1" cellpadding="2" cellspacing="0">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Area</th>
                        <th>No Rek</th>
                        <th>Lembur</th>
                        <th>Gaji </th>
                        <th>Potongan</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      include "../control/koneksi.php";
                      $no = 1;
                      $gj=mysqli_query($conn,"SELECT * FROM tbl_gaji as a inner join tbl_karyawan as b on a.id_karyawan=b.id_karyawan  ORDER BY nama DESC");
                      foreach ($gj as $g) :
                        $ta = $g['gaji_pokok']+$g['bpjs_kt']+$g['bpjs_ks']+$g['atribut']+$g['thr']+$g['pp']+$g['lembur'];
                        $tp = $g['p_bpjskt']+$g['p_bpjsks'];
                        $gt = $ta-$tp;

                       ?>
                      <tr>
                        <td><?= $no++;?></td>
                        <td><?= $g['nama'];?></td>
                        <td><?= $g['area'];?></td>
                        <td><?= $g['norek'];?></td>
                        <td><?= "Rp. ". number_format($g['lembur'], 0, ',', '.')?></td>
                        <td><?= "Rp. ". number_format($ta, 0, ',', '.')?></td>
                        <td><?= "Rp. ". number_format($tp, 0, ',', '.')?></td>
                        <td><?= "Rp. ". number_format($gt, 0, ',', '.')?></td>
                        
                      </tr>
                    <?php endforeach; ?>
                      
                    </tbody>

<script type="text/javascript">
  window.print();
</script>

                  