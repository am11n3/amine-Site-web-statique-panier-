<?php 
  require '_header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title> My Manga Shopping</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/all.min.css">
	<link rel="stylesheet" href="css/fontawesome.min.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<!-- Start bar -->
	<div class="upper-bar">
		<div class="container">
			<div class="row">
				<div class="col-sm">
					<i class="fa fa-phone"> +212662624578 ,</i>
					<i class="fa fa-envelope"></i>  jeager_eren@gmail.com
				</div>
				
        <div class="col-sm">
					Let's Read Manga,
          <i class="fa fa-search"></i> Search
				</div>
        
        
         <?php if (!isset($_SESSION['user_id'])){?>
        <div class="col-sm">
          <a href="login.php">Se connecter</a>
        </div>
        <div class="col-sm">
           <a href="registre.php">S'inscrire</a>
        </div>
      <?php }else{?>
          <div class="col-sm">
           <a href="profile.php">Mon compte</a>
        </div>
        <div class="col-sm">
           <a href="logout.php">Déconnecter</a>
        </div>
      <?php } ?>
        
        <div >
          <a href="panier.php">
          <i class="fa fa-shopping-basket"></i>Panier</a>
        </div>

			</div>
		</div>
	</div>

	<!-- End bar -->
	<!-- s_navbar -->
	<nav class="navbar navbar-expand-lg navbar-light">
		<div class="container">
  <a class="navbar-brand" href="index.php">
  	<span>Manga</span><span>Mine</span>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="main-nav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="#">ONE PIECE </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">ATTACK ON TITAN <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">RE-ZERO</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">T-SHIRT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">NOUVEATES</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          TOUS NOS RAYONS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">NARUTO</a>
          <a class="dropdown-item" href="#">ANOTHER</a>
          <a class="dropdown-item" href="#">PARASYTE</a>
          <a class="dropdown-item" href="#">TOKYO GHOUL</a>
          <a class="dropdown-item" href="#">AKAME GA KILL</a>
           <div class="dropdown-divider"></div> 
          <a class="dropdown-item" href="#">AUTRE . . .</a>
        </div>
      </li>
    </ul>
  </div>
</div>
</nav>
	<!-- e_navbar -->