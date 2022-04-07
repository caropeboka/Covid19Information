<?php
include_once("conntest.php");
$result = mysqli_query($conn, "SELECT * FROM mhs ORDER BY nrp ASC");
?> 
<html>
<head>
 <title>Tabel Utama</title>
 <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
 <h1><center>Kelompok 2</center></h1>
 <h2><center>Electronic Engineering Polytechnic Institute of Surabaya<center></h2>
 <hr>
 <br>
 <div class="button">
 <a href="Add.php">
 	<img src="Logo_PENS.png">
 </a><br><br>
</div><br><br><br><br>
 <table border="1" align=center width="100%">
 <tr>
 <th>NRP</th>
 <th>Nama</th>
 <th>Email</th>
 <th>No. HP</th>
 <th>Alamat</th>
 <th>Foto</th>
 <th>Aksi</th>
 </tr>
 <?php
 while($user_data = mysqli_fetch_array($result)) {
 echo "<tr>";
 echo "<td>".$user_data['nrp']."</td>";
 echo "<td>".$user_data['nama']."</td>";
 echo "<td>".$user_data['email']."</td>"; 
 echo "<td>".$user_data['no_hp']."</td>";
 echo "<td>".$user_data['alamat']."</td>";
 echo "<td style='text-align: center'><img style='width: 100px' src='upload/".$user_data['foto']."' ></td>";
 echo "<td><a href='edit.php?id=$user_data[nrp]'>Edit</a> | <a
href='delete.php?id=$user_data[nrp]'>Delete</a></td></tr>";
 }
 ?>
 </table>
</body>
</html>
