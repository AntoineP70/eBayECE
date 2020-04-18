<!DOCTYPE html>
<html>
<head>
	<title>eBay ECE</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="eBay.css">
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
						<a href="eBay_acceuil.php">eBay</a>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="connexion">
						<form action="connexion.php" method="post">
							<div class="aff_co">
								<?php 
								$bdd = new mysqli('localhost','root',"",'ebay_ece');
								if($bdd->connect_errno){
									printf("Connect failed : %s\n", $bdd->connect_error);
									exit();
								}
								$sql = "SELECT * from data_co";
								$result=$bdd->query($sql);
								if($result->num_rows) {?>
									<div class="deconnexion">
										<div class="col-sm-6">
											<div class="co_titre">
												<input type="submit" name="deconnexion" value="deconnexion" style="border:none; background-color:transparent;outline: none;">
											</div>
										</div>
									</div>
									<div class="suppr">
										<div class="col-sm-6">
											<div class="co_titre">
												<input type="submit" name="supprimer" value="supprimer compte" style="border:none; background-color:transparent;outline: none;">
											</div>
										</div>
									</div>
								<?php }
								else{ ?>
									<div class="col-sm-6">
										<div class="co_titre">
											<p>Connexion</p>
											<ul class="info_co">
												<li>
													<label for="acheteur_co"><small>Achteur :</small></label>
													<input type="radio"  value="acheteur" name="role_co">
													<label for="Vendeur"><small>Vendeur :</small></label>
													<input type="radio" id="Vendeur" name="role_co" value="vendeur">
												</li>
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
												<label for="acheteur"><small>Achteur :</small></label>
												<input type="radio" id="acheteur" value="acheteur" name="role_cre">
												<label for="vendeur"><small>Vendeur :</small></label>
												<input type="radio" id="vendeur" name="role_cre" value="vendeur">
											</li>
											<li>
												<label for="user_name">Nom :</label><br>
												<input type="text" name="user_name">
											</li>
											<li>
												<label for="user_pre">Prénom :</label><br>
												<input type="text" name="user_pre">
											</li>
											<li>
												<label for="mdp">Pseudo :</label><br>
												<input type="text" name="pseudo">
											</li>
											<li>
												<label for="user_email">Email :</label><br>
												<input type="text" name="user_email">
											</li>
											<li>
												<label for="user_ad">Téléphone :</label><br>
												<input type="text" name="user_tel">
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
							<?php } ?>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="row">
				<ul class=menu>
					<div class="col-sm-2">
						<li class="titre">
							<a href="">Catégorie</a>
							<ul class="sous_menu">
								<li><a href="Categorie_fer.php">Ferraille ou Trésor</a></li>
								<li><a href="Categorie_mu.php">Bon pour le musée</a></li>
								<li><a href="Categorie_vip.php">Accessoire VIP</a></li>
							</ul>
						</li>
					</div>
					<div class="col-sm-2">
						<li class="titre">
							<a href="">Achat</a>
							<ul class="sous_menu">
								<li><a href="Achat_enchere.php">Enchères</a></li>
								<li><a href="Achat_immediat.php">Achetez-le maintenant</a></li>
								<li><a href="Achat_nego.php">Meilleure offre</a></li>
							</ul>
						</li>
					</div>
					<div class="col-sm-2">
						<li class="titre">
							<a href="eBay_vente.php">Vente</a>
						</li>
					</div>
					<div class="col-sm-2">
						<li class="titre">
							<a href="">Votre Compte></a>
						</li>
					</div>
					<div class="col-sm-2">
						<li class="titre">
							<a href="">Votre Panier</a>
						</li>
					</div>
					<div class="col-sm-2">
						<li class="titre">
							<a href="">Admin</a>
						</li>
					</div>
				</ul>
			</div>	
		</header>
		
	</div>
</body>
</html>