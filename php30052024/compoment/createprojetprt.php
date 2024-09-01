<?php
require_once('gestionbd/connexion.php');
if(isset($_POST['submit']))
{
$name = $_POST["titre"];
$date = $_POST["date"];
$soustitre = $_POST["soustitre"];
$commentaire = $_POST["commentaire"];
$nomphoto=$_FILES['photo']['name'];
$file_tmp_name=$_FILES['photo']['tmp_name'];
move_uploaded_file($file_tmp_name,"../assets/sary/$nomphoto");
mysqli_query($connexion,"INSERT INTO evenements (titre,date,soustitre,commentaire,photo) VALUES ('" . $name. "','" . $date. "', '" . $soustitre. "', '" . $commentaire. "', '" . $nomphoto. "')");
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
      <a class="btn btn-outline-primary " style='margin:0px 16px 16px;' type="submit" href="admin/home.php"><i class="fas fa-clipboard-list"></i></a>
      <a class="btn btn-outline-primary " style='margin:0px 16px 16px;' type="submit"href="front/info.php"><i class="fas fa-info-circle"></i></a>
      <a class="btn btn-outline-primary " style='margin:0px 16px 16px ;' type="submit"href="front/contact.php"><i class="fas fa-phone-volume"></i></a>
      <a class="btn btn-outline-primary " style='margin:0px 16px 16px ;' type="submit"href="admin/logout.php">Déconnéxion</a>
    </div>

  </div>
</nav>
<br/>
<br/>
<div class="row">
<div class="col">
 <img src="../assets/icon/ins.jpg" alt="Forest" width="500" height="500">
 <br/>
 <br/>
 </div>
 <div class="col col-lg-7">
       <div class="card">
        <div class="card-header">
    Création de contenue
     </div>
      <div class="card-body">
      <br/>
     <form method="POST" enctype="multipart/form-data">
      <center>
          <p  class="fst-italic" > Date </p><input  class="fst-italic  form-control"type="date" name="date" >
           <br>
         <p  class="fst-italic" > TITRE</p><input  class="fst-italic  form-control"type="text"name="titre">
             <br>
        <p  class="fst-italic"> Sous titre </p><input  class="fst-italic  form-control"type="text" name="soustitre">
        <br>
            <p  class="fst-italic"> Commentaire </p><textarea class=" form-control" name="commentaire"></textarea>
                <br>
               <p  class="fst-italic"> Photo </p><input type="file"class=" form-control" name="photo">
      </center>

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success" name="submit"  class="fst-italic"style='margin:0px 16px 16px;'>ENREGISTRER</button>
        <button type="reset" class="btn btn-danger"  class="fst-italic"style='margin:0px 16px 16px;'>EFFACER TOUS</button>
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
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</html>

