<?php
require_once('../gestionbd/connexion.php');
$code=$_POST['code'];
$name = $_POST["titre"];
$date = $_POST["date"];
$soustitre = $_POST["soustitre"];
$commentaire = $_POST["commentaire"];
$nomphoto=$_FILES['photo']['name'];
$file_tmp_name=$_FILES['photo']['tmp_name'];
move_uploaded_file($file_tmp_name,"../../assets/sary/$nomphoto");

mysqli_query($connexion,"UPDATE evenements set code='$code',titre='$name',date='$date',soustitre='$soustitre',commentaire='$commentaire',photo='$nomphoto' where code='$code'");
header("location:home.php");
?>