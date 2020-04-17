<?php 
require 'header.php';
	
	$user_id = $_SESSION['user_id'];
	$select = $con->query("Select * from clients where id = '$user_id'");
 	
	while ($s = $select->fetch(PDO::FETCH_OBJ)) {
		?>
		
		<br><h2 align="center"><b>Mon Profile</b></h2><br><hr><br>

		<div class="container">
		<form>
		<div class="form-group row">
    		<label for="colFormLabel" class="col-sm-2 col-form-label"> Mon ID : </label>
    		<div class="col-sm-10">
      			<input type="email" class="form-control" id="colFormLabel" disabled value=" <?= $s->id; ?> ">
    		</div>
  		</div>

  		<div class="form-group row">
    		<label for="colFormLabel" class="col-sm-2 col-form-label"> Mon nom complet: </label>
    		<div class="col-sm-10">
      			<input type="email" class="form-control" id="colFormLabel" disabled value=" <?= $s->nom_prenom; ?> ">
    		</div>
  		</div>

  		<div class="form-group row">
    		<label for="colFormLabel" class="col-sm-2 col-form-label"> Mon adresse email  : </label>
    		<div class="col-sm-10">
      			<input type="email" class="form-control" id="colFormLabel" disabled value=" <?= $s->email; ?> ">
    		</div>
  		</div>

  		<div class="form-group row">
    		<label for="colFormLabel" class="col-sm-2 col-form-label"> Mon telephone : </label>
    		<div class="col-sm-10">
      			<input type="email" class="form-control" id="colFormLabel" disabled value=" +212<?= $s->telephone; ?> ">
    		</div>
  		</div>
  	</form>
  </div>

		
		<?php 
	}
 ?>
