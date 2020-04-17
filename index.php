<?php require'header.php' ;
ob_start();
?>
	<!-- slider s -->
	<div class="slider"> 	
    <div>
     <div id="main-slider" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <h1>Votre meilleure Manga <br>sur notre website <span>MangaMine</span></h1>
      <div class="overlay"></div>
      <div class="carousel-item crousel-1 active">
      </div>
      <div class="carousel-item crousel-2">
      </div>
      <div class="carousel-item crousel-3">
      </div>
    </div>
    <ol class="carousel-indicators">
      <li data-target="#main-slider" data-slide-to="0" class="active"></li>
      <li data-target="#main-slider" data-slide-to="1"></li>
      <li data-target="#main-slider" data-slide-to="2"></li>
    </ol>
  </div>
</div>
  
	<!-- slider end -->
  <!-- star features -->
  <div class="features text-center">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-lg-3">
          <i class="fa fa-home fa-3x rounded-circle"></i>
          <h3>Great idea</h3>
          <p>jkfj ajk a fjka fj kafj kfkk hfh f h hfh hey girl how are you today </p>
        </div>
         <div class="col-sm-6 col-lg-3">
          <i class="fa fa-home fa-3x rounded-circle"></i>
          <h3>Great idea</h3>
          <p>jkfj ajk a fjka fj kafj kfkk hfh f h hfh hey girl how are you today </p>
        </div>
         <div class="col-sm-6 col-lg-3">
          <i class="fa fa-home fa-3x rounded-circle"></i>
          <h3>Great idea</h3>
          <p>jkfj ajk a fjka fj kafj kfkk hfh f h hfh hey girl how are you today </p>
        </div>
         <div class="col-sm-6 col-lg-3">
          <i class="fa fa-home fa-3x rounded-circle"></i>
          <h3>Great idea</h3>
          <p>jkfj ajk a fjka fj kafj kfkk hfh f h hfh hey girl how are you today </p>
        </div>
      </div>
    </div>
  </div>
  <!-- end features -->
  <!-- str ovrw -->
  <div class="overview text-center">
    <div class="container">
      <h2 class="h1">Company MAngaMine </h2>
      <p>Lest start Today , jfh jdj oajf haief oa ap</p>
      <h4>Gambare minna</h4>
        <button>Voir Plus</button>
    </div>
  </div>
  <!-- end ovrw -->
  <!-- product -->
  
<?php
//var_dump() ;
?>

  <div class="cartes text-center">
    <div class="container">
      <div class="row">
      
      <?php $produits = $DB->query('SELECT * FROM produits')?>
      <?php foreach ($produits as $produit): ?>

        <div class="col-lg-3 col-md-4 col-sm-6 space">
        <img src="img/<?= $produit->id; ?>.jpg" class="img-thumbnail myimg">
        <h3><?= $produit->name; ?></h3>
        <p class="prix">$<?= $produit->prix;?></p>
        <p>Figurine One Piece Luffy <br>The King ...</p>
        <!-- <button type="button" class="btn btn-primary">acheter</button> -->
        
        	 <button type="button" class="btn btn-primary">
        	 	<?php if(isset($_SESSION['user_id'])){ ?>
        	 		<a href="addpanier.php?id=<?= $produit->id; ?>"> ajouter a la carte</a> 
        	 	<?php }else{ ?>
        	 		<a href="login.php"> ajouter a la carte</a>
        		<?php } ?>
    		</button>
       
      </div>
      <?php endforeach ?>

      <!-- <div class="col-lg-3 col-md-4 col-sm-6 space">
        <img src="img/Figurine One Piece Empereur Shanks Luffy.jpg" class="img-thumbnail myimg">
        <h3>Shanks</h3>
        <p class="prix">$10.99</p>
        <p>Figurine One Piece Empereur Shanks Luffy...</p>
        <button type="button" class="btn btn-primary">acheter</button>
        <button type="button" class="btn btn-primary">ajouter a la carte</button>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 space">
        <img src="img/Figurine Gaara - Vibration Stars ver.jpg" class="img-thumbnail myimg" >
        <h3>Gara</h3>
        <p class="prix">$10.99</p>
        <p>Figurine Gaara - Vibration Stars ver...</p>
        <button type="button" class="btn btn-primary">acheter</button>
        <button type="button" class="btn btn-primary">ajouter a la carte</button>

      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 space">
        <img src="img/Figurine One Piece WHITE BEARD Pirates Edward.jpg" class="img-thumbnail myimg">
        <h3>Edward</h3>
        <p class="prix">$10.99</p>
        <p>Figurine One Piece WHITE BEARD Pirates Edward...</p>
        <button type="button" class="btn btn-primary">acheter</button>
        <button type="button" class="btn btn-primary">ajouter a la carte</button>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 space">
        <img src="img/Figurine Dragon Ball Z - Gohan.jpg" class="img-thumbnail myimg" >
        <h3>Gohan</h3>
        <p class="prix">$10.99</p>
        <p>Figurine Dragon Ball Z -<br> Gohan...</p>
        <button type="button" class="btn btn-primary">acheter</button>
        <button type="button" class="btn btn-primary">ajouter a la carte</button>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 space">
        <img src="img/my-hero-academia-figurine-tomura-shigaraki.jpg" class="img-thumbnail myimg">
        <h3>Tomora</h3>
        <p class="prix">$10.99</p>
        <p>my-hero-academia-figurine-tomura-shigaraki...</p>
        <button type="button" class="btn btn-primary">acheter</button>
        <button type="button" class="btn btn-primary">ajouter a la carte</button>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 space">
        <img src="img/Bracelet Cuir Tressé Dragon Ball Z.jpg" class="img-thumbnail myimg" >
        <h3>Bracelet</h3>
        <p class="prix">$10.99</p>
        <p>Bracelet Cuir Tressé<br> Dragon Ball Z...</p>
        <button type="button" class="btn btn-primary">acheter</button>
        <button type="button" class="btn btn-primary">ajouter a la carte</button>

      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 space">
        <img src="img/Casquette San Goku.jpg" class="img-thumbnail myimg" >
        <h3>Casquette</h3>
        <p class="prix">$10.99</p>
        <p>Casquette San Goku <br>DRAGON BALL Z...</p>
        <button type="button" class="btn btn-primary">acheter</button>
        <button type="button" class="btn btn-primary">ajouter a la carte</button>
      </div> -->

      </div>
    </div>
  </div>
  <!-- e-prdct -->
  <!-- str cmt -->
  <div class="cmnt">
    <div class="overlay"></div>
    <div class="container">
      <div id="cmnt" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#cmnt" data-slide-to="0" class="active"></li>
    <li data-target="#cmnt" data-slide-to="1"></li>
    <li data-target="#cmnt" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item ">
   <div class="carousel-caption d-none d-md-block">
    <img src="img/9.jpg"class="rounded-circle" alt="img-thumbnail">
    <h3>Bahafid Abdessalam</h3>
    <span>otaku</span>
    <p>Très bon produit, j'ai reçu ma commande comme prévu et la qualité est vraiment au rendez vous !</p>
  </div>
    </div>
    <div class="carousel-item">
      <div class="carousel-caption d-none d-md-block">
        <img src="img/thumb-82734.jpg"class="rounded-circle" alt="img-thumbnail">
    <h3>Amine Ejjorfi</h3>
    <span>Otaku Gamer</span>
    <p>Livré plus vite que prévu ! Je suis agréablement surprise de la qualité et je repasserais commande bientôt.</p>
  </div>
    </div>
    <div class="carousel-item active">
  <div class="carousel-caption d-none d-md-block ">
    <img src="img/10.png " class="rounded-circle" alt="">
    <h3>Salma Neko</h3>
    <span>Otaku Gamer</span>
    <p>Livré plus vite que prévu !très bon produit.</p>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#cmnt" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#cmnt" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>
  </div>
  </div>
  <!-- end cmt -->
  <!-- s_stati -->
  <div class="stats text-center">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-lg-3 ">
          <i class="fa fa-user fa-fw fa-4x"></i>
          <span class="numero">6245</span>
          <p>Notre Clients</p>
        </div>
        <div class="col-sm-6 col-lg-3">
          <i class="fa fa-heart fa-fw fa-4x"></i>
          <span class="numero">6245</span>
          <p>Likes</p>
        </div>
        <div class="col-sm-6 col-lg-3">
          <i class="fa fa-briefcase fa-fw fa-4x"></i>
          <span class="numero">6245</span>
          <p>Partena</p>
        </div>
        <div class="col-sm-6 col-lg-3">
          <i class="fa fa-comments fa-fw fa-4x"></i>
          <span class="numero">6245</span>
          <p>Commentaires</p>
        </div>
      </div>
    </div>
  </div>
  <!-- e_stati -->
  <?php require'footer.php'; ?>