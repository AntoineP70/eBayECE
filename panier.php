<!DOCTYPE html>
<html>
<head>
	<title>Panier | eBay ECE</title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="eBay.css">
	<link rel="stylesheet" type="text/css" href="eBay_article.css">
	<link rel="stylesheet" type="text/css" href="menu_co.css">
	<link rel= "stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	<script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.j s"> </script>
 	<script src= "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/j s/bootstrap.min.j s"> </script>
</head>
<body>
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
								<li><a href="Categorie.php">Bon pour le musée</a></li>
								<li><a href="Categorie.php">Accessoire VIP</a></li>
							</ul>
						</li>
					</div>
					<div class="col-sm-2">
						<li class="titre">
							<a href="">Achat<i class="fa fa-angle-down"></i></a>
							<ul class="sous_menu">
								<li><a href="Achat_enchere.php">Enchères</a></li>
								<li><a href="Achat_immediat.php">Achetez-le maintenant</a></li>
								<li><a href="Achat_nego.php">Meilleure offre</a></li>
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

		<!-- div contenant la page -->
		<div class="page">
			<div class ="item">
				<!-- link la feuille css --> 
				<style>
					<?php include 'eBay_article.css'; ?>
				</style>

				<?php
					//connexion à la bdd
				    $bdd = new mysqli('localhost','root',"", 'ebay_ece');
				    $paniers = $bdd->query('select * from panier');
				    $total = 0;
				    // On cherche les informations des objets grâce à l'IDObjet contenu dans la table panier
				    foreach ($paniers as $panier):
				    	$articles = $bdd->query('select * from objet');
				    	foreach ($articles as $article): 
				    		$id_item = $article['IDObjet'];

				    		if($panier['IDObjet'] == $article['IDObjet']) {
				    			//calcul de la somme totale du panier
				    			$total = $total + $article['Prix']; ?>
						    	<article>
					    			<div class="article">
										<div class="col-sm-4">
											<div class="left">
											<img src="cecz">
											</div>
										</div>
										<div class="col-sm-4">
											<div class="middle">	
												<!-- Affichage des objets stockés dans le panier -->
												<h2><?php echo $article['NomObjet'] ?></h2><br>
												<p><?php echo $article['Description'] ?></p>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="right">	
												<center><h3><?php echo $article['Prix'] ?> €<br><br></h3></center>	
											</div>
										</div>
									</div>

									<br><br><br><br><br><br><br><br><br><br><br><br><br>
						    	</article>
					    	<?php } ;
					    	//fin des boucles for
				    	endforeach;
				    endforeach ?>
			    </div>
			    <div class = "total">
			    	<total>
			    		<div class="col-sm-3"></div>
			    		<div class="col-sm-6">
	    					<div class="middle"><h2>Total :<?php echo $total ?>€</h2><br>
	    						<!-- Envois vers la saisie de l'adresse de livraison -->
	    						<a href="adresseform.php"> <input type="button" value="Payer" name="payer"> </a>
	    					</div>
			    		</div>
			    	</total>
			    	
			    </div>
			</div>
		</div>
	</body>
</html>