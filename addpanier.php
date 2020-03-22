<?php 
  require '_header.php';

  if(isset($_GET['id']))
  {
  	$produit=$DB->query('SELECT id FROM produits WHERE id=:id',array('id' => $_GET['id']));
  	if (empty($produit)) 
  	{
  		die("Ce produit n'existe pas");
  	}

  	$panier->add($produit[0]->id);
  	die('Le produit a ete bien ajouter a votre panier <a href="javascript:history.back()">retourner sur le catalogue</a>');
  }
  else
  {
  	die("Vous n'avez pas selectionne de produit a ajouter au panier");
  }

?>