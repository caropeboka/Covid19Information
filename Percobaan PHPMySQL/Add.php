<!DOCTYPE html>
<html>
<head>
	<title>Add Data</title>
	<link rel="stylesheet" type="text/css" href="Add.css">
</head>
<body>
<div class="button">
 <a href="Add.php">
 	<img src="Logo_PENS.png">
 </a><br><br>
</div>
 <br><br><br><br><br>
 <form action="Add.php" method="post" name ="form1" enctype ='multipart/form-data'>
 <table cellpadding="8">
 <tr>
 <td>NRP=<input required type="number" name="nrp"></td>
 </tr>
 <tr>
 <td>Nama=<input required type="text" name="nama"></td>
 </tr>
 <tr>
 <td>Email=<input required type="email" name="email"></td>
 </tr>
 <tr> 
 <td>No.HP=<input required type="tel" name="no_hp"></td>
 </tr>
 <tr>
 <td>Alamat<input required type="text" name="alamat"></td>
 </tr>
 <tr>
 <td>Foto</td>
 <td><img id="output" style='width: 100px'/></td>
 </tr>
 <tr>
 
 <td><input required type='file' accept="image/*" name='foto' onchange="loadFile(event)"/></td>
 </tr>
 </table>
 <br>
 <input required type="submit" name="Submit" value="Submit"></td>
 <a href="index.php"><input type="button" name="button" value="Cancel"></a>
 </form>

<?php
 if(isset($_POST['Submit']) && $_FILES['foto']['error'] == 0) {
 $nrp = $_POST['nrp'];
 $nama = $_POST['nama'];
 $email = $_POST['email'];
 $no_hp = $_POST['no_hp'];
 $alamat = $_POST['alamat'];
 $name = $_FILES['foto']['name'];
 $target_dir = "upload/";
 $imageFileType = strtolower(pathinfo($_FILES["foto"]["name"])['extension']);
 $extensions_arr = array("jpg","jpeg","png","gif");
 if( in_array($imageFileType,$extensions_arr) ){
 $name = "$nrp.$imageFileType";
 foreach (glob("$target_dir/$nrp") as $filename) {
 unlink($filename);
 }
 move_uploaded_file($_FILES['foto']['tmp_name'],$target_dir.$name);
 include_once("conntest.php");
 mysqli_query($conn, "INSERT INTO mhs VALUES('$nrp', '$nama','$email','$no_hp', '$alamat', '$name')");
 echo "Added Successfully <br><br><a href='index.php'>View Members</a>";
 }
 }
 ?>

<script>
 var loadFile = function(event) {
 var FR = new FileReader();
 FR.readAsDataURL(event.target.files[0]);
 FR.addEventListener("load", function(e) {
 document.getElementById('output').src = FR.result;
 });
 };
 </script>
 </body>
</html>