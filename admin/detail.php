<?php 
	include "../control/koneksi.php";
	$id_gaji = $_GET['id_gaji'];
	$gj=mysqli_query($conn,"SELECT * FROM tbl_gaji as a inner join tbl_karyawan as b on a.id_karyawan=b.id_karyawan  WHERE id_gaji='$id_gaji'");
	$g = mysqli_fetch_array($gj);
	$ta = $g['gaji_pokok']+$g['bpjs_kt']+$g['bpjs_ks']+$g['atribut']+$g['thr']+$g['pp']+$g['lembur'];
	$tp = $g['p_bpjskt']+$g['p_bpjsks'];
	$gt = $ta-$tp;
 ?>
 <table border="2px" cellpadding="0" cellspacing="0" width="60%" align="center">
 	<tr width="100%">
 		<td >
 			<table width="100%">
 				
 				<tr>
 					<td align="left"><img src="../assets/images/logo-1.png" style="width:100px;height: 100px"></td>
 					<td colspan="5" align="center">
 						<h4>BADAN USAHA JASA PENGAMANAN INDONESIA<br>PT.INDO GLOBAL INTERNASIONAL</h4>
 						<small>Kantor Pusat : Jl MayjenRyacudu No. 12 Seberang Ulu Palembang<br>Email : indoglobalinternasional28@gmail.com</small>
 						<hr style="height:2px;background-color: black">
 					</td>
 					<td align="right"><img src="../assets/images/logo-1.png" style="width:100px;height: 100px"></td>
 				</tr>
 				<tr>
 					<td>Nama</td>
 					<td>:<?= $g['nama'];?></td>
 					<td colspan="3"></td>
 					<td>Tahun Mulai Bekerja</td>
 					<td>: <?= $g['tahun_mulai'];?></td>
 				</tr>
 				<tr>
 					<td>Jabatan</td>
 					<td>:<?= $g['jabatan'];?></td>
 					<td colspan="3"></td>
 					<td>Pembayaran Gaji</td>
 					<td>: <?= $g['tgl_byr_gaji'];?></td>
 				</tr>
 				<tr>
 					<td colspan="4"><u><b>PENGHASILAN</b></u></td>
 					<td colspan="3">&nbsp;&nbsp;&nbsp;<u><B>POTONGAN</B></u></td>
 				</tr>
 				<tr>
 					<td colspan="2">Gaji Pokok</td>
 					<td align="center">Rp</td>
 					<td align="right"><?= number_format($g['gaji_pokok'], 0, ',', '.')?></td>
 					<td>&nbsp;&nbsp;&nbsp;BPJS Kesehatan</td>
 					<td align="center">Rp</td>
 					<td align="right"><?= number_format($g['p_bpjsks'], 0, ',', '.')?></td>
 				</tr>
 				<tr>
 					<td colspan="2">BPJS Ketenagakerjaan 6.24%</td>
 					<td align="center">Rp</td>
 					<td align="right"><?= number_format($g['bpjs_kt'], 0, ',', '.')?></td>
 					<td>&nbsp;&nbsp;&nbsp;BPJS Ketenagakerjaan</td>
 					<td align="center">Rp</td>
 					<td align="right"><?= number_format($g['p_bpjskt'], 0, ',', '.')?></td>
 				</tr>
 				<tr>
 					<td colspan="2">BPJS Kesehatan 4%</td>
 					<td align="center">Rp</td>
 					<td align="right"><?= number_format($g['bpjs_ks'], 0, ',', '.')?></td>
 					<td colspan="3"></td>
 				</tr>
 				<tr>
 					<td colspan="2">Uniform/Atribut</td>
 					<td align="center">Rp</td>
 					<td align="right"><?= number_format($g['atribut'], 0, ',', '.')?></td>
 					<td colspan="3"></td>
 				</tr>
 				<tr>
 					<td colspan="2">THR</td>
 					<td align="center">Rp</td>
 					<td align="right"><?= number_format($g['thr'], 0, ',', '.')?></td>
 					<td colspan="3"></td>
 				</tr>
 				<tr>
 					<td colspan="2">Pembinaan Pembekalan</td>
 					<td align="center">Rp</td>
 					<td align="right"><?= number_format($g['pp'], 0, ',', '.')?></td>
 					<td colspan="3"></td>
 				</tr>
 				<tr>
 					<td colspan="2">Lembur</td>
 					<td align="center">Rp</td>
 					<td align="right"><?= number_format($g['lembur'], 0, ',', '.')?></td>
 					<td colspan="3"></td>
 				</tr>
 				<tr>
 					<td colspan="2"><B>TOTAL (A)</B></td>
 					<td align="center">Rp</td>
 					<td align="right"><?= number_format($ta, 0, ',', '.')?></td>
 					<td>&nbsp;&nbsp;&nbsp;<B>TOTAL (B)</B></td>
 					<td align="center">Rp</td>
 					<td align="right"><?= number_format($tp, 0, ',', '.')?></td>
 				</tr>
 				<tr>
 					<td colspan="7"><br></td>
 				</tr>
 				<tr>
 					<td colspan="2"><B>JUMLAH GAJI YANG DITERIMA</B></td>
 					<td align="center"></td>
 					<td align="right"></td>
 					<td></td>
 					<td align="center">Rp</td>
 					<td align="right"><?= number_format($gt, 0, ',', '.')?></td>
 				</tr>
 				<tr>
 					<td colspan="2"><br>Palembang,<?= date('d M Y');?><br>PT.Indo Global Internasional</td>
 					<td align="center"></td>
 					<td align="right"></td>
 					<td></td>
 					<td align="center"></td>
 					<td align="right"><br><br>Yang Menerima Uang</td>
 				</tr>
 				<tr>
 					<td colspan="2"><br><br><br><u>Umi Sakinah</u><br>Administrasi</td>
 					<td align="center"></td>
 					<td align="right"></td>
 					<td></td>
 					<td align="center"></td>
 					<td align="right"><br><br><br><?= $g['nama'];?></td>
 				</tr>
 			</table>
 		</td>
 	</tr>
 </table>
 <script type="text/javascript">
 	window.print();
 </script>