<?php
require_once('../gestionbd/connexion.php');
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
    <link href="../../assets/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../../assets/webfont/css/all.css">
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
      <a class="btn btn-outline-primary " style='margin:0px 16px 16px;' type="submit" href="../composant.php"><i class="fas fa-home"></i></a>
      <a class="btn btn-outline-primary " style='margin:0px 16px 16px;' type="submit" href="home.php"><i class="fas fa-clipboard-list"></i></a>
      <a class="btn btn-outline-primary " style='margin:0px 16px 16px;' type="submit"href="../front/info.php"><i class="fas fa-info-circle"></i></a>
      <a class="btn btn-outline-primary " style='margin:0px 16px 16px ;' type="submit"href="../front/contact.php"><i class="fas fa-phone-volume"></i></a>
      <a class="btn btn-outline-primary " style='margin:0px 16px 16px ;' type="submit"href="logout.php">Déconnéxion</a>
    
    </div>

  </div>
</nav>
<br/>
<br/>
<div class="row justify-content-md-center">
  <div class="col img-rounded">
      <br/>
 <img src="../../assets/icon/2.jpg" alt="Forest" width="550px" height="550px">
    </div>
    <div class="col col-lg-6">
      <br/>
    <div class="card">
  <div class="card-header">
  <h1 style=" text-shadow: 2px 2px 5px red;">
  Modidier l'évènements</h1>
  </div>
  <div class="card-body">
  <br/>
  <form action="modifier.php" method="POST" enctype="multipart/form-data">
<center>
 Code
 <input type="text" class="form-control " name="code" value="<?php echo ($ET['code'])?>">
OBJET
<input type="text" class="form-control" name="titre" value="<?php echo ($ET['titre'])?>">
Date de publication
<input type="date" class="form-control" name="date" value="<?php echo ($ET['date'])?>">
sous titre
<input type="text" class="form-control" name="soustitre"value="<?php echo ($ET['soustitre'])?>">
commentaire 
<textarea type="text"name="commentaire" class="form-control"><?php echo ($ET['commentaire'])?></textarea> 
photo
<input type="file" name="photo" class="form-control">

<input class="form-control" type="submit" value="ENREGISTRER">
   


</center>
      </div>
    </div>
  </div>
  </form>
  </div>
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
<script src="../../assets/dist/js/bootstrap.bundle.min.js"></script>
</html>

