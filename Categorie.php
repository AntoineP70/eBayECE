<!DOCTYPE html>
<html>
<head>
		<title>eBay ECE</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="eBay.css">
	<link rel= "stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="categorie.css">
 	<script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.j s"> </script>
 	<script src= "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/j s/bootstrap.min.j s"> </script>
</head>
<body>
<?php
	echo 'ta mère'
?>

<div class="container-fluid">
		<header class="header">
			<div class="row" style="height:50px;">
				<div class="col-sm-6">
					<div class="logo">
						<a href="eBay_acceuil.html">eBay</a>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="connexion">
						<form action="connexion.php" method="post">
							<div class="aff_co">
								<div class="col-sm-6">
									<div class="co_titre">
										<p>Connexion</p>
										<ul class="info_co">
											<li>
												<label for="user">Username :</label>
												<input type="text" name="user">
											</li>
											<li>
												<label for="mdp">Mot de Passe :</label>
												<input type="text" name="mdp">
											</li>
											<li>
												<div class="button_co">
													<input type="submit" name="connexion" Value="Connexion" style="border:none; background-color:transparent;outline: none;">
												</div>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="co_titre">
										<p>Créer un compte</p>
										<ul class="info_crea">
											<li>
												<label for="user_name">Nom :</label><br>
												<input type="text" name="user_name">
											</li>
											<li>
												<label for="user_pre">Prénom :</label><br>
												<input type="text" name="user_pre">
											</li>
											<li>
												<label for="user_ad">Adresse :</label><br>
												<input type="text" name="user_ad">
											</li>
											<li>
												<label for="user_email">Email :</label><br>
												<input type="text" name="user_email">
											</li>
											<li>
												<label for="mdp">Mot de passe :</label><br>
												<input type="text" name="mdp">
											</li>
											<li>
												<div class="button_co">
													<input type="submit" name="b_creer" Value ="Créer un compte" style="border:none; background-color:transparent;outline: none;">
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="row">
				<ul class=menu>
					<div class="col-sm-2">
						<li class="titre">
							<a href="">Catégorie<i class="fa fa-angle-down"></i></a>
							<ul class="sous_menu">
								<li><a href="Categorie.php">Ferraille ou Trésor</a></li>
								<li><a href="Categorie.html">Bon pour le musée</a></li>
								<li><a href="Categorie.html">Accessoire VIP</a></li>
							</ul>
						</li>
					</div>
					<div class="col-sm-2">
						<li class="titre">
							<a href="">Achat<i class="fa fa-angle-down"></i></a>
							<ul class="sous_menu">
								<li><a href="Achat_enchere.html">Enchères</a></li>
								<li><a href="Achat_immediat.html">Achetez-le maintenant</a></li>
								<li><a href="Achat_nego.html">Meilleure offre</a></li>
							</ul>
						</li>
					</div>
					<div class="col-sm-2">
						<li class="titre">
							<a href="Vente.html">Vente<i class="fa fa-angle-down"></i></a>
						</li>
					</div>
					<div class="col-sm-2">
						<li class="titre">
							<a href="">Votre Compte<i class="fa fa-angle-down"></i></a>
						</li>
					</div>
					<div class="col-sm-2">
						<li class="titre">
							<a href="">Votre Panier<i class="fa fa-angle-down"></i></a>
						</li>
					</div>
					<div class="col-sm-2">
						<li class="titre">
							<a href="">Admin<i class="fa fa-angle-down"></i></a>
						</li>
					</div>
				</ul>
			</div>	
		</header>
		<div class="page">
			<div class="tri">
				<div class="tri_index">
				</div>
			</div>
			<div class="items">
 			<?php
			    $bdd = new mysqli('localhost','root',"", 'ebay_ece');
			    $articles = $bdd->query('select * from objet');
			    foreach ($articles as $article): ?>
			    	<article>
			    		<div class="col-sm-4">
							<div class="item">
								<img src="">
								<div class="item_info">
									<p>Prix :</p>
									<?php echo $article['Prix']?>
									<input type="button" Value="Action" name="Action">
								</div>
							</div>
						</div>
			    	</article>
			    <?php endforeach ?>
					<!--<div class="col-sm-4">
						<div class="item">
							<img src="">
							<div class="item_info">
								<p>Description</p>
								<input type="button" Value="Action" name="Action">
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="item">
							<img src="">
							<div class="item_info">
								<p>Description</p>
								<input type="button" Value="Action" name="Action">
							</div>
						</div>
					</div>-->
				</div>
			</div>
		</div>
	</div>
</body>
</html>