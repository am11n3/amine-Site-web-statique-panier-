<?php require'header.php'; ?>
<.

<?php
if (isset($_GET['del'])) {

	$panier->del($_GET['del']);
}
?>

<div class="ceckout">
	<div class="title">
		<div class="wrap">
			<h2 class="first">Shooping Cart</h2>
			<!-- <a href="#" class="proceed">
				Proceed to checkout
			</a> -->
		</div>
	</div>
	<form method="post" action="panier.php">
	<div class="table">
		<div class="wrap">
			
			<div class="rowtitle">
				<div class="container">
			<table class="table table-bordered">
				<tr>
					<th></th>
					<th class="name" width="40%">Le nom du produit</th>				
					<th class="price" width="20%">Prix</th>
					<th class="quantite" width="10%">Quantite</th>
					<th class="subtotal" width="15%">Total</th>
					<th class="action" width="5%">Action</th>
				</tr>
				<?php 
				$ids = array_keys($_SESSION['panier']);
				if(empty($ids))
				{
					$produits = array();
				}
				else
				{

					$produits=$DB->query('SELECT * FROM produits WHERE id IN('.implode(',',$ids).')');
				}

				foreach ($produits as $produit):
				?>
				<tr>
					<th><a href="#" class="img"><img style="width: 111px;"src="img/<?= $produit->id ?>.jpg"></a></th>
					<th><span class="name"><?= $produit->name;?></span></th>
					<th><span class="price">$<?= $produit->prix;?></span></th>
					<th><span class="quantite"><input type="text" name="panier[quantite][<?= $produit->id; ?>]" value="<?= $_SESSION['panier'][$produit->id]; ?>"></span></th>
					<th><span class="subtotal">$<?= $produit->prix *1.2;?></span></th>
					<th>
						<span class="action">
							<a href="panier.php?del=<?= $produit->id ;?>" class="del"><img src="img/del.png"></a>
						</span>
					</th>
				</tr>
			<?php endforeach; ?>
				
			</table>
			</div>
		</div>

			<div class="rowtotal" style="text-align: center;">
				<input type="submit" value="recalculer">
				Prix Total : <span class="total">$<?= $panier->total() * 1.2 ?></span>
			</div>
		</div>
	</div>
</form>
</div>

<?php require'footer.php'; ?>