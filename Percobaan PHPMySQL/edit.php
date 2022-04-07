<?php
include_once("conntest.php");
if(isset($_POST['update']))
{
 $nrp = $_POST['nrp'];
 $nama = $_POST['nama'];
 $email = $_POST['email'];
 $no_hp = $_POST['no_hp'];
 $alamat = $_POST['alamat'];
 $query_array = array();
 if (!is_null($nrp)) {
 $query_array["nrp"] = $nrp;
 }
 if (!is_null($nama)) {
 $query_array["nama"] = $nama;
 }
 if (!is_null($email)) {
 $query_array["email"] = $email;
 }
 if (!is_null($no_hp)) {
 $query_array["no_hp"] = $no_hp;
 }
 if (!is_null($alamat)) {
 $query_array["alamat"] = $alamat;
 }
 if ($_FILES['foto']['error'] == 0){
 $name = $_FILES['foto']['name'];
 $target_dir = "upload/";
 $imageFileType = strtolower(pathinfo($_FILES["foto"]["name"])['extension']);
 $extensions_arr = array("jpg","jpeg","png","gif");
 if( in_array($imageFileType,$extensions_arr) ){
 $name = "$nrp.$imageFileType";
 foreach (glob("$target_dir/$nrp.*") as $filename) {
 unlink($filename); //remove the file
 }
 move_uploaded_file($_FILES['foto']['tmp_name'],$target_dir.$name);
 $query_array["foto"] = $name;
 }
 }
 $query = "UPDATE mhs SET ";
 foreach ($query_array as $key => $value) {
 $query .= "$key='$value'";
 if ($key != array_key_last($query_array))
 $query .= ',';
 }
 $query .= " WHERE nrp=$nrp";
 
 include_once("conntest.php"); 
 mysqli_query($conn, $query);
 header("Location : index.php");
 exit();
}
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM mhs WHERE nrp=$id");
$user_data = mysqli_fetch_array($result)
?>

<!DOCTYPE html>
<html>
<head>
	<title>Kelompok</title>
</head>
<body>
	<h1>Edit</h1>
 <form name="update_user" method="post" action="edit.php" enctype='multipart/form-data'>
 <table cellpadding="8">
 <tr>
 <td>NRP =<input required type="number" name="nrp" value="<?php echo $user_data['nrp']?>"></td>
 </tr>
 <tr>
 <td>Nama =<input required type="text" name="nama" value="<?php echo $user_data['nama']?>"></td>
 </tr>
 <tr>
 <td>Email =<input required type="email" name="email" value="<?php echo $user_data['email']?>"></td>
 </tr>
 <tr>
 <td>No.HP =<input required type="tel" name="no_hp" value="<?php echo $user_data['no_hp']?>"></td>
 </tr>
 <tr>
 <td>Alamat =<input required type="text" name="alamat" value="<?php echo $user_data['alamat']?>"></td>
 </tr>
 <tr>
 <td>Foto = <img id="output" style='width: 100px' src="upload/<?php echo $user_data['foto']?>"/></td>
 </tr>
 <tr>
 <td></td>
 <td><input type='file' accept="image/*" name='foto' onchange="loadFile(event)"/></td>
 </tr>
 </table>
 <br>
 <td><input type="hidden" name="nrp" value=<?php echo $_GET['id'];?>></td>
 <td><input type="submit" name="update" value="Update"></td>
 <a href="index.php"><input type="button" name="button" value="Cancel"></a>
 </form>
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
