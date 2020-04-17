<?php 
		//connection a la table client
	    $con=mysqli_connect('localhost','root','','panier');

	    if(!$con)
	    {
	        die(' Please Check Your Connection'.mysqli_error($con));
	    }

 ?>