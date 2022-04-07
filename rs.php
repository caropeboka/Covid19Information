<?php 
//koneksi
$conn = mysqli_connect("localhost", "root", "", "dbrumahsakit");
//ambil data  dari tabel
$result = mysqli_query($conn, "SELECT * FROM rs");
?>
<!DOCTYPE html>
<html>
<head>
   <title>Rumah Sakit</title>
</head>
<body>
<header>
<h1>Daftar Rumah Sakit Rujukan Covid-19</h1>
<table border="1" cellpading="10" cellspacing="0" class="table1">
   <tr>
      <th>No.</th>
      <th>Nama</th>
      <th>Telepon</th>
      <th>Alamat</th>
   </tr>
   <?php $i = 1; ?>
   <?php while( $row = mysqli_fetch_assoc($result)) : ?>
   <tr>
      <td><?= $i; ?></td>
      <td><?= $row["nama"]; ?></td>
      <td><?= $row["telepon"]; ?></td>
      <td><?= $row["alamat"]; ?></td>
   </tr>
   <?php $i++; ?>
   <?php endwhile; ?>
</table>
</header>
</body>
</html>