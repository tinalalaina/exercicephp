<?php
	// Initialiser la session
	session_start();
	// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
	if(!isset($_SESSION["username"])){
		header("Location: ../index.php");
		exit(); 
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../assets/webfont/css/all.css">
        <link rel="stylesheet" href="../assets/css/composant.css">
        <link rel="stylesheet" href='../index.css'>
</head>
<body class="bgb p-2 text-dark bg-opacity-25">
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
      <a class="btn btn-outline-primary " style='margin:0px 16px 16px;' type="submit"><i class="fas fa-home"></i></a>
      <a class="btn btn-outline-primary " style='margin:0px 16px 16px;' type="submit" href="admin/home.php"><i class="fas fa-clipboard-list"></i></a>
      <a class="btn btn-outline-primary " style='margin:0px 16px 16px;' type="submit"href="front/info.php"><i class="fas fa-info-circle"></i></a>
      <a class="btn btn-outline-primary " style='margin:0px 16px 16px ;' type="submit"href="front/contact.php"><i class="fas fa-phone-volume"></i></a>
      <a class="btn btn-outline-primary " style='margin:0px 16px 16px ;' type="submit"href="admin/logout.php">Déconnéxion</a>

    </div>

  </div>
</nav>

<br/><br/>
<center>
<h1  style="color:white;text-shadow: 2px 2px 5px black;">Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
<br/>
<br/>
<br/>
<div class="row align-items-center">
   <div class="col" style="margin: 24px;">
   <a class="card rounded-circle"style="width: 20rem;height:20rem;" href="createprojetprt.php">
   <i class="fas fa-folder-plus" style='margin:auto'></i>
   </a>
   </div>

   <div class="col"style="margin: 24px;">
   <a class="card rounded-circle"style="width: 20rem;height:20rem;"href="admin/home.php">
   <i class="fas fa-list-alt"style='margin:auto'></i>
   </a>
   </div> 

   <div class="col"style="margin: 24px;">
   <a class="card rounded-circle"style="width: 20rem;height:20rem;"href="listeuser.php">
    <i class="fas fa-id-card-alt"style='margin:auto'></i>
   </a>
   </div>    
</div>   
   </div>

</center>
  <br/>

  <div class="row" style="margin:0px 46px 46px;">
    <div class="col-4"></div>
    <div class="col-8 d-flex">
      <div style="font-size: 38px;color:blue" class="fw-bold"> <i class="fas fa-copyright"></i> Rakydev- 2024
      </div>
    </div>
  </div>

</body>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</html>