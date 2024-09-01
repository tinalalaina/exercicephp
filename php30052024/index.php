<?php 
include_once('compoment/gestionbd/config2.php');
// Code for login 

session_start();

if (isset($_POST['username'])){
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($conn, $username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn, $password);
    $query = "SELECT * FROM `users` WHERE username='$username' and password='".hash('sha256', $password)."'";
	$result = mysqli_query($conn,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
	if($rows==1){
	    $_SESSION['username'] = $username;
	    header("Location:compoment/composant.php");
	}else{
		$message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/webfont/css/all.css">
        <link rel="stylesheet" href='./index.css'>
</head>
<body class=" bgb p-2 text-dark bg-opacity-25">
<div class="container">
<nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="#" style="color:dark; font-size:50px ">BR Architects</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div style="font-size:45px"class="collapse navbar-collapse me-auto" id="navbarScroll">
      <ul class="me-auto" style="--bs-scroll-height: 100px;">
      </ul>
      <a class="btn btn-outline-primary " style='margin:0px 16px 16px;' type="submit" href="compoment/composant.php"><i class="fas fa-home"></i></a>
      <a class="btn btn-outline-primary " style='margin:0px 16px 16px;' type="submit" href="compoment/home.php"><i class="fas fa-clipboard-list"></i></a>
      <a class="btn btn-outline-primary " style='margin:0px 16px 16px;' type="submit"href="compoment/front/info.php"><i class="fas fa-info-circle"></i></a>
      <a class="btn btn-outline-primary " style='margin:0px 16px 16px ;' type="submit"href="compoment/front/contact.php"><i class="fas fa-phone-volume"></i></a>
<div class="dropdown">
  <a class="btn btn-outline-primary dropdown-toggle" style='margin:0px 16px 24px;' href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
    Connécter
  </a>

  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <!-- Button trigger modal -->

    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Connéxion Utilisateur</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="compoment/createuser.php">Crée un compte</a></li>
  </ul>
</div>
       
    </div>

  </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Connexion utilisateur</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
    <form method="post">
    <h2 for="usr">Prénom :</h2><br/>
      <input  name="username" type="text" placeholder="Prénom"  class="form-control" />
<br/>
      <h2 for="pwd">Mot de passe : </h2>
      <input name="password" type="password" placeholder="Mot de passe" class="form-control"/>
<br/>
      <button  class="btn btn-primary"name="login" type="submit">Login</button>
    </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--fin Modal -->

<div class="row">
    <div class="col">
     <p style="font-size:100px; color:blue; padding:38px" class="fw-bold">BR Architects</p>
 

      <center style='padding:58px'>
      <a style="font-size: 39px;"class="btn btn-outline-primary fw-bold"style='margin:0px 16px 16px;padding:38px;' href="./compoment/home.php"type="submit">Commencé</a>
      </center>
      <br/>
    </div>
    </div>
    
</div>
<br/>
<div class="row" style="margin:0px 46px 46px;">
    <div class="col-4"></div>
    <div class="col-8 d-flex">
      <div style="font-size: 38px;color:blue" class="fw-bold"> <i class="fas fa-copyright"></i> Rakydev- 2024
      </div>
    </div>
  </div>

</body>
<script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</html>