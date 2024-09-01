<?php
require_once("gestionbd/config2.php");
$mc="";//"NUL"
if(isset($_POST['motcle'])){
    $mc=$_POST['motcle'];
}
$result =mysqli_query($conn,"select * from users where username like '%$mc%'");


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
      <a class="btn btn-outline-primary " style='margin:0px 16px 16px ;' type="submit"href="admin/logout.php">Déconnéxion</a>

    </div>

  </div>
</nav>

<div class="row justify-content-center">
    <div class="col-6">
      <form class="d-flex" method="POST">
      <input name="motcle" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Chercher</button>
    </form>
    </div>
  </div>

<br/><br/>
      <h1>Liste de tous les utilisateur</h1>
      <br/>
<center>
<div class="row align-items-center">


       <!-- =======================================================================================================================-->
       <table class="table table-bordered border-primary">
       <thead>
    <tr>
      <th scope="col">Nom :</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
<?php while ($ET=mysqli_fetch_assoc($result)){?>
<tr>
   <td><?php echo ($ET['username'])?></td>
    <td><?php echo ($ET['email'])?></td>
</a></td>
</tr>
  <?php }?>
  </table> 
       <!-- =======================================================================================================================-->

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