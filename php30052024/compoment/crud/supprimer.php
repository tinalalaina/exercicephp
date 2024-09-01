<?php
require_once('../gestionbd/config.php');
$id=$_GET['id'];
$result = mysqli_query($con, " DELETE FROM users WHERE  (id=$id) ");
header("location:../user.php");
?>
