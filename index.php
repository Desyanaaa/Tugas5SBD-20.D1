<?php
include("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link href="style.css" rel="stylesheet" type="text/css" />
<title>Klinik</title>
</head>
<body>
<div class="container">
<h1 align="center"> Tugas 5 Sistem Basis Data <br> <h2>Data Klinik</h2> <hr> </h1>
<br>
<div class="main">
<h3>Data User</h3>
<table border="1" style="border-collapse:collapse;" cellpadding="10">
<tr style="background-color: gray;">
<th>Id User</th>
<th>Username</th>
<th>Password</th>
<th>Nama Lengkap</th>
</tr>
<?php 
$sql = 'SELECT * FROM users';
$result = mysqli_query($koneksi, $sql);
if($result): ?>
<?php while($row = mysqli_fetch_array($result)): ?>
<tr>
<td><?= $row['id'];?></td>
<td><?= $row['username'];?></td>
<td><?= $row['password'];?></td>
<td><?= $row['nama_lengkap'];?></td>
</tr>
<?php endwhile; else: ?>
<tr>
<td colspan="7">Belum ada data</td>
</tr>
<?php endif; ?>
</table> <br>
<h3>Data Obat</h3>
<table border="1" style="border-collapse:collapse;" cellpadding="10">
<tr style="background-color: gray;">
<th>Id Obat</th>
<th>Nama Obat</th>
</tr>
<?php 
$sql = 'SELECT * FROM obat';
$result = mysqli_query($koneksi, $sql);
if($result): ?>
<?php while($row = mysqli_fetch_array($result)): ?>
<tr>
<td><?= $row['id_obat'];?></td>
<td><?= $row['nama_obat'];?></td>
</tr>
<?php endwhile; else: ?>
<tr>
<td colspan="7">Belum ada data</td>
</tr>
<?php endif; ?>
</table> <br>
<h3>Data Resep Obat</h3>
<table border="1" style="border-collapse:collapse;" cellpadding="10">
<tr style="background-color: gray;">
<th>Id Resep</th>
<th>Id Berobat</th>
<th>Id Obat</th>
</tr>
<?php 
$sql = 'SELECT * FROM resep_obat';
$result = mysqli_query($koneksi, $sql);
if($result): ?>
<?php while($row = mysqli_fetch_array($result)): ?>
<tr>
<td><?= $row['id_resep'];?></td>
<td><?= $row['id_berobat'];?></td>
<td><?= $row['id_obat'];?></td>
</tr>
<?php endwhile; else: ?>
<tr>
<td colspan="7">Belum ada data</td>
</tr>
<?php endif; ?>
</table><br>
<h3>Data Berobat</h3>
<table border="1" style="border-collapse:collapse;" cellpadding="10">
<tr style="background-color: gray;">
<th>Id Berobat</th>
<th>Id Pasien</th>
<th>Id Dokter</th>
<th>Tanggal Berobat</th>
<th>Keluhan Pasien</th>
<th>Hasil Diagnosa</th>
<th>Penatalaksanaan</th>
</tr>
<?php 
$sql = 'SELECT * FROM berobat';
$result = mysqli_query($koneksi, $sql);
if($result): ?>
<?php while($row = mysqli_fetch_array($result)): ?>
<tr>
<td><?= $row['id_berobat'];?></td>
<td><?= $row['id_pasien'];?></td>
<td><?= $row['id_dokter'];?></td>
<td><?= $row['tgl_berobat'];?></td>
<td><?= $row['keluhan_pasien'];?></td>
<td><?= $row['hasil_diagnosa'];?></td>
<td><?= $row['penatalaksanaan'];?></td>
</tr>
<?php endwhile; else: ?>
<tr>
<td colspan="7">Belum ada data</td>
</tr>
<?php endif; ?>
</table><br>
<h3>Data Dokter</h3>
<table border="1" style="border-collapse:collapse;" cellpadding="10">
<tr style="background-color: gray;">
<th>Id Dokter</th>
<th>Nama Dokter</th>
</tr>
<?php 
$sql = 'SELECT * FROM dokter';
$result = mysqli_query($koneksi, $sql);
if($result): ?>
<?php while($row = mysqli_fetch_array($result)): ?>
<tr>
<td><?= $row['id_dokter'];?></td>
<td><?= $row['nama_dokter'];?></td>
</tr>
<?php endwhile; else: ?>
<tr>
<td colspan="7">Belum ada data</td>
</tr>
<?php endif; ?>
</table> <br>
<h3>Data Pasien</h3>
<table border="1" style="border-collapse:collapse;" cellpadding="10">
<tr style="background-color: gray;">
<th>Id Pasien</th>
<th>Nama Pasien</th>
<th>Jenis Kelamin</th>
<th>Umur</th>
</tr>
<?php 
$sql = 'SELECT * FROM pasien';
$result = mysqli_query($koneksi, $sql);
if($result): ?>
<?php while($row = mysqli_fetch_array($result)): ?>
<tr>
<td><?= $row['id_pasien'];?></td>
<td><?= $row['nama_pasien'];?></td>
<td><?= $row['jenis_kelamin'];?></td>
<td><?= $row['umur'];?></td>
</tr>
<?php endwhile; else: ?>
<tr>
<td colspan="7">Belum ada data</td>
</tr>
<?php endif; ?>
</table> <br>
</div>
</div>
</body>
</html>