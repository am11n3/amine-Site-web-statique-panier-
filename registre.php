<?php require'header.php';
  ob_start();
?>
<style type="text/css">
  
.divider-text {
    position: relative;
    text-align: center;
    margin-top: 15px;
    margin-bottom: 15px;
}
.divider-text span {
    padding: 7px;
    font-size: 12px;
    position: relative;   
    z-index: 2;
}
.divider-text:after {
    content: "";
    position: absolute;
    width: 100%;
    border-bottom: 1px solid #ddd;
    top: 55%;
    left: 0;
    z-index: 1;
}

.btn-facebook {
    background-color: #405D9D;
    color: #fff;
}
.btn-twitter {
    background-color: #42AEEC;
    color: #fff;
}
</style>

<div class="container">
<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
  <h4 class="card-title mt-3 text-center">Créer  un compte</h4>
  <p>
    <a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Connecter via Twitter</a>
    <a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Connecter via facebook</a>
  </p>
  <p class="divider-text">
        <span class="bg-light">OR</span>
  </p>
<form action="" method="POST">
    <!-- le nom -->
    <div class="form-group input-group">
      <div class="input-group-prepend">
          <span class="input-group-text"> <i class="fa fa-user"></i> </span>
      </div>
     <input name="nom_prenom" class="form-control" placeholder="Nom complet" type="text">
    </div> <!-- form-group// -->
    <!-- l'email -->
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
    </div>
        <input name="email" class="form-control" placeholder="Email adresse" type="email">
    </div> <!-- form-group// -->
    <!-- telephone -->
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
    </div>
    <select class="custom-select" style="max-width: 100px;">
        <option selected="">+212</option>
        <option value="1">+213</option>
        <option value="2">+34</option>
        <option value="3">+1</option>
    </select>
      <input name="telephone" class="form-control" placeholder="Telephone" type="text">
    </div> <!-- form-group// -->
    <!-- mot de passe -->
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
    </div>
        <input class="form-control" placeholder="Create password" type="password" name="password" minlength="8">
    </div> <!-- form-group// -->
    <!-- repetez le mot de passe -->
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
    </div>
        <input class="form-control" placeholder="Repeat password" type="password" name="r_password">
    </div> <!-- form-group// -->                                      
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block" name="submit"> créer compte  </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Vous avez déjà un compte? <a href="login.php"> Se connecter</a>.</p>       
</form>
</article>
<?php 
if(!isset($_SESSION['user_id'])) {
    if(isset($_POST['submit'])){
      $nom_prenom = $_POST['nom_prenom'];
      $email = $_POST['email'];
      $telephone = $_POST['telephone'];
      $password = $_POST['password'];
      $r_password = $_POST['r_password'];

      if($nom_prenom && $email && $telephone && $password && $r_password && 
        (preg_match('~^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[%$&!?/#@])~', $password)) &&
        (preg_match('`^[0-9]{9,13}$`', $telephone)) ) {

        if ($password == $r_password) {
          $result = $con->query("INSERT INTO clients(nom_prenom,email,telephone,password) VALUES('$nom_prenom','$email','$telephone','$password')");
          echo '<br><h3 style="color:green;"align="center">Vous avez crée votre compte. vous pouvez maintenant vous <a href="login.php"><b>connecter</a>.</h3>';

        }else{
            echo '<br/><h3 style="color:red;"align="center">Les mots de passes ne sont pas identiques. </h3>';
        }
      }else{
        echo '<br/><h3 style="color:red;" align="center"> Veuillez remplir tous les champs </h3>';
      }
    }
  }else{
    header('Location:index.php');
    exit;
  }

?>
</div> <!-- card.// -->
</div> 
<!--container end.//-->
