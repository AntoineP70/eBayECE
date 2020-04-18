<!DOCTYPE html>
<html>
<head>
	<title>eBay ECE</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="eBay.css">
	<link rel="stylesheet" type="text/css" href="menu_co.css">
	<link rel="stylesheet" type="text/css" href="eBay_article.css">
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
								<?php }
								else{ ?>
								<div class="col-sm-6">
									<div class="co_titre">
										<p>Connexion</p>
										<ul class="info_co">
											<li>
												<input type="radio" value="admin" checked="true" name="role_co" style="visibility:hidden;">
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
		<?php 
			$bdd = new mysqli('localhost','root',"",'ebay_ece');
			$sql="SELECT * from data_co where fonction like 'admin'";
			$result = $bdd->query($sql);
			if($result->num_rows != 0)
			{ ?>	
			<div class="page">
				<div class="tri">
					<div class="co_titre" style="width: 195px;margin-top:20px;">
							<a href="eBay_vente.php" style="text-decoration: none; color:black; font-size:12px;">Mettre un Article en vente</a>
					</div>
					<div class="co_titre" style="margin-top: 5px;width: 195px;">
							<p>Ajouter un vendeur</p>
							<ul class="info_crea" style="left:0;width: 195px;">
								<li>
									<input type="checkbox" id="vendeur" name="role_cre" value="vendeur" style="visibility: hidden;" checked="true">
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
					<div class="tri_index">
						<form action="protocole_tri_item_admin.php" method="post">
							<div class="tri_categorie">
								<p>Categorie :</p>
								<label for="ferraille">Ferraille :</label>
								<input type="checkbox" name="ferraille" style="margin-left: 60px;"><br>
								<label for="musee">Musée :</label>
								<input type="checkbox" name="musee" style="margin-left: 71px;"><br>
								<label for="vip">VIP :</label>
								<input type="checkbox" name="vip" style="margin-left: 92px;"><br>
							</div>
							<div class="tri_vente">
								<p>Type de vente :</p>
								<label for="enchere">Enchères :</label>
								<input type="checkbox" name="enchere" style="margin-left: 52px;"><br>
								<label for="immediat">Achat immédiat :</label>
								<input type="checkbox" name="immediat" style="margin-left:11px;"><br>
								<label for="nego">Négociable :</label>
								<input type="checkbox" name="nego" style="margin-left:40px;"><br>
							</div>
							<div class="tri_prix">
								<label for="prix_min">Prix minimal :</label>
								<input type="text" name="prix_min">
								<label for="prix_max">Prix maximal :</label>
								<input type="text" name="prix_max">
							</div>
							<div class="valider">
								<a href="protocole_tri_item_admin.php">Valider</a>
							</div>
							
						</form>
					</div>
						
					</div>
				</div>
				<table class="table" style="font-size:10px;text-align:center; width: 900px; float:left; margin-top: 40px;">
					<tr class="bg-danger" style="background-color: #efefef;">
						<td><b>Item_ID</b></td>
						<td><b>Catégorie</b></td>
						<td><b>Type vente</b></td>
						<td><b>Nom</b></td>
						<td><b>Vendeur</b></td>
						<td><b>Prix</b></td>
						<td><b>Supprimer</b></td>
					</tr>
					<?php
						$bdd = new mysqli('localhost','root',"",'ebay_ece');
						$sql = isset($_POST["sql_tri"])?$_POST["sql_tri"]:"SELECT * from objet";
						echo $sql;
						$articles = $bdd->query($sql);

						foreach($articles as $article): ?>
							<tr class="bg-danger" style="background-color: white;">
								<article>
									<?php $id_item=$article['IDObjet']; ?>
									<td><?php echo $article['IDObjet'] ?></td>
									<td><?php echo $article['Categorie'] ?></td>
									<td><?php echo $article['TypeVente'] ?></td>
									<td><?php echo $article['NomObjet'] ?></td>
									<td><?php echo $article['IDVendeur'] ?></td>
									<td><?php echo $article['Prix'] ?></td>
									<form action="protocole_supprimer_item.php" method="post">
										<td><input type="submit" name="delete_item" value="Supprimer" style="border:none; background-color:transparent;outline: none;color:red;">
											<input type="text" name="IDItem" value="<?php echo $id_item; ?>" style="visibility:hidden;width: 0;"/> </td>
									</form>
								</article>
							</tr>
					<?php endforeach ?>
				</table>
			</div>
			<?php }?>
	</div>
</body>
</html>