<?php
require_once('gestionbd/connexion.php');
$id=$_GET['code'];
$result = mysqli_query($connexion, "SELECT * FROM evenements WHERE (code=$id)");
$ET=mysqli_fetch_assoc($result);
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
</head>
<body class="bg-info p-2 text-dark bg-opacity-25">
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
      <a class="btn btn-outline-primary " style='margin:0px 16px 16px;' type="submit" href="composant.php"><i class="fas fa-home"></i></a>
      <a class="btn btn-outline-primary " style='margin:0px 16px 16px;' type="submit" href="home.php"><i class="fas fa-clipboard-list"></i></a>
      <a class="btn btn-outline-primary " style='margin:0px 16px 16px;' type="submit"href="front/info.php"><i class="fas fa-info-circle"></i></a>
      <a class="btn btn-outline-primary " style='margin:0px 16px 16px ;' type="submit"href="front/contact.php"><i class="fas fa-phone-volume"></i></a>

       
    </div>

  </div>
</nav>
<div class="row">
  <div class="col">
    <br/>
    <h1 style="color:blue;font-size:55px">Détaille  :</h1>
  </div>
</div>
<div class="row">
    <div class="col-6">
   <h2 style="color:white;text-shadow: 2px 2px 5px black;font-size :55px;">
   <?php echo ($ET['titre'])?>
  </h2>
  <br/>

    </div>

    <div class="col">  
    <img src="../assets/sary/<?php echo($ET['photo'])?>" alt=""style="height: auto"class="img-thumbnail">
    </div>
</div>
<div class="row">
  <div class="col">
  <div style='margin: 22px;'>
  <h5 style="color:white;text-shadow: 2px 2px 5px black;"><?php echo ($ET['soustitre'])?></h5>
  <br/>
  <h5 style="color:white;text-shadow: 2px 2px 5px black;"><?php echo ($ET['commentaire'])?></h5>
  <br/>
  <h3 style="color:blue;"class="d-flex justify-content-end"><?php echo ($ET['date'])?></h3>
  </div>
  </div>
</div>
<br/>
<br/>
<div style="font-size: 50px;"class="d-flex justify-content-start">
<i class="fab fa-php" style="margin:0px 46px 46px;"></i>
<i class="fab fa-bootstrap"style="margin:0px 46px 46px;"></i>     
<i class="fas fa-server"style="margin:0px 46px 46px;"></i>
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
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</html>