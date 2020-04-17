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
  <h4 class="card-title mt-3 text-center">Se connecter</h4>
<form action="" method="POST">
    
    <!-- l'email -->
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
    </div>
        <input name="email" class="form-control" placeholder="Email adresse" type="email">
    </div> <!-- form-group// -->
   
    <!-- mot de passe -->
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
    </div>
        <input class="form-control" placeholder=" password" type="password" name="password" minlength="8">
    </div> <!-- form-group// -->
                                       
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block" name="connecter"> connecter  </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Vous avez pas un compte? <a href="registre.php"> S'inscrire</a>.</p>     

</form>
</article>
<?php 
if(!isset($_SESSION['user_id'])) {

  if(isset($_POST['connecter'])){
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($email && $password) {
        $select = $con->query("SELECT id from clients where email = '$email'");
        if ($select->fetchColumn()) {
          $select = $con->query("select * from clients where email = '$email'");
          $result = $select->fetch(PDO::FETCH_OBJ);
          $_SESSION['user_id']=$result->id;
          $_SESSION['user_name']=$result->nom_prenom;
          $_SESSION['user_email']=$result->email;
          $_SESSION['user_password']=$result->password;
        }else{
          echo '<br/><h3 style="color:red;"align="center">Mauvais identifiants.</h3>';
      }
    }else{
      echo '<br/><h3 style="color:red;" align="center"> Veuillez remplir tous les champs </h3>';
    }
    header('Location:index.php');
  }

}else{
  header('Location:index.php');
  exit;
}