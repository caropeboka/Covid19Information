<?php
include_once("conntest.php");
$id = $_GET['id'];
$result = mysqli_query($conn, "DELETE FROM mhs WHERE nrp=$id");
header("Location:index.php");
?>