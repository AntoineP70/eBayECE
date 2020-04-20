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


 	<link rel="stylesheet" type="text/css" href="eBay_compte.css">

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
										
												<input type="checkbox" id="acheteur" checked="true" style="visibility: hidden;" value="acheteur" name="role_cre">
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
								<li><a href="Categorie.php?sql=SELECT+*+from+objet+where+Categorie+like+'Ferraille'">Ferraille ou Trésor</a></li>
								<li><a href="Categorie.php?sql=SELECT+*+from+objet+where+Categorie+like+'Musée'">Bon pour le musée</a></li>
								<li><a href="Categorie.php?sql=SELECT+*+from+objet+where+Categorie+like+'VIP'">Accessoire VIP</a></li>
							</ul>
						</li>
					</div>
					<div class="col-sm-2">
						<li class="titre">
							<a href="">Achat</a>
							<ul class="sous_menu">
								<li><a href="Achat.php?sql=SELECT+*+from+objet+where+TypeVente+like+'Enchères'">Enchères</a></li>
								<li><a href="Achat.php?sql=SELECT+*+from+objet+where+TypeVente+like+'Vente directe'">Achetez-le maintenant</a></li>
								<li><a href="Achat.php?sql=SELECT+*+from+objet+where+TypeVente+like+'Négociation possible'">Meilleure offre</a></li>
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
							<a href="">Votre Compte</a>
						</li>
					</div>
					<div class="col-sm-2">
						<li class="titre">
							<a href="">Votre Panier</a>
						</li>
					</div>
					<div class="col-sm-2">
						<li class="titre">
							<a href="eBay_admin.php?sql=">Admin</a>
						</li>
					</div>
				</ul>
			</div>	
		</header>
		<?php 
			$bdd = new mysqli('localhost','root',"",'ebay_ece');

			$sql="SELECT * from data_co";
			$result=$bdd->query($sql);
			$data=mysqli_fetch_assoc($result);
			$fct=$data['fonction'];
			$user_id=$data['user_id'];
			if($fct=="acheteur"){
				$sql="SELECT * from acheteur where '$user_id' like IDAcheteur";
				$result=$bdd->query($sql);
				$user=mysqli_fetch_assoc($result);

			
			?>
		<div class="profil">
			<div class="info_user">
				<lu class="info">
					<li><label for="info_nom">Nom :</label><input type="text" id="info_nom" value="<?php echo $user['Nom']?>"></li>
					<li><label for="info_pre">Prénom :</label><input type="text" id="info_pre" value="<?php echo $user['Prenom']?>"></li>
					<li><label for="info_mail">Email :</label><input type="text" id="info_mail" value="<?php echo $user['Email']?>"></li>
					
					<li><label for="info_mdp">Mot de passe :</label><input type="text" id="info_mdp" value="<?php echo $user['Mdp']?>"></li>
				</lu>
			</div>
			<div class="info_adresse">
			<?php

						$sql = " SELECT * from adresse where '$user_id' like IDAcheteur";
						$adresses=$bdd->query($sql);
			?>
			<form action="#" method="post">
				<select name='Adresse'>
						<?php foreach($adresses as $adresse): ?>
						<article>
							<option value="<?php $adresse['IDAdresse']?>"><?php echo $adresse['Ligne1'];?>
						</article>
					<?php endforeach?>
				</select>
				<input type="submit" name="submit" value="choisir">
			</form>
			<?php 
			if(isset($_POST['submit']))
			{
				$selected_adress = isset($_POST['Adresse']);
			$sql = "SELECT * from adresse WHERE '$selected_adress' like IDAdresse";
			$result=$bdd->query($sql);
			$adresse=mysqli_fetch_assoc($result);
			echo $adresse['IDAdresse'];?>
			<lu class="info">
				<li><label for="info_des">Destinataire :</label><input type="text" id="info_des" value="<?php echo $adresse['Nom'].$adresse['Prenom']?>"></li>
				<li><label for="info_adr">Adresse ligne 1:</label><input type="text" id="info_adr1" value="<?php echo $adresse['Ligne1']?>"></li>
				<li><label for="info_adr">Adresse ligne 2:</label><input type="text" id="info_adr2" value="<?php echo $adresse['Ligne2']?>"></li>
				<li><label for="info_vil">Ville :</label><input type="text" id="info_vil" value="<?php echo $adresse['Ville']?>"></li>
				<li><label for="info_pos">Code Postal :</label><input type="text" id="info_pos" value="<?php echo $adresse['CodePostal']?>"></li>
				<li><label for="info_pay">Pays :</label><input type="text" id="info_pay" value="<?php echo $adresse['Pays']?>"></li>
				<li><label for="info_tel">Téléphone :</label><input type="text" id="info_tel" value="<?php echo $adresse['Telephone']?>">
			</lu>
		
<?php } ?>
				
			</div>
		</div>
	<?php }
	else { ?>
		<h2>Espace réservé aux acheteurs</h2>
	<?php } ?>
	</div>
</body>
</html>