<?php
require_once('../gestionbd/connexion.php');
$id=$_GET['code'];
$result = mysqli_query($connexion, " DELETE FROM evenements WHERE  (code=$id) ");
header("location:home.php");
?>

