<!DOCTYPE html>
<html>
<head>
	<title>Adresse | eBay ECE</title>
	<meta charset="utf-8">

	<!-- <link rel="stylesheet" type="text/css" href="eBay.css"> -->

	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="styles.css">
	<link rel= "stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	<script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
 	<script src= "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> </script>
</head>
<body>
	<div class="container-fluid">
		<header class="header">
			<div class="row" style="height:25px;">
				<div class="col-sm-6">
					<div class="logo">
						<a href="eBay_acceuil.html">eBay</a>
					</div>
				</div>
			</div>
		</header>

		<!-- Form présentant la dernière adresse enregistrée par l'Acheteur connecté afin d'éviter la saisie -->
		<!-- Possibilité d'ajouter une nouvelle adresse de livraison -->

		<div class="row" style="height: 150px"></div>
		<div class="row">

			<div class="col-sm-3"></div>
			<div class="col-sm-6">

				<!-- Form bootstrap permettant d'indiquer si des champs obligatoires ne sont pas saisis -->
				<!-- Le bouton mène à la page paiement.html -->
				<form class="needs-validation border border-dark" style="padding: 15px" action="paiement.html" method="post" novalidate>
					<center><h3>Étape 1/2</h3></center>
					<h4>Selectionnez l'adresse de livraison</h4>

					<!-- Connexion à la BDD afin de récupérer l'adresse de l'acheteur -->
					<?php $bdd = new mysqli('localhost','root',"", 'ebay_ece');
					$users = $bdd->query('select user_id from data_co');
					foreach ($users as $user) 
						$maisons=$bdd->query('select * from adresse where IDAcheteur = "'.$user['user_id'].'"');
						foreach ($maisons as $maison)
							?>
							<table class="table">
								<tr>
									<td>
										<tr>
											<td>Nom : </td>
											<td> <?php echo $maison['Nom']; ?> </td>
										</tr>
										<tr>
											<td>Prénom : </td>
											<td> <?php echo $maison['Prenom']; ?> </td>
										</tr>
										<tr>
											<td>Adresse Ligne 1 :    </td>
											<td> <?php echo $maison['Ligne1']; ?> </td>
										</tr>
										<tr>
											<td>Adresse Ligne 2 : </td>
											<td> <?php echo $maison['Ligne2']; ?> </td>
										</tr>
										<tr>
											<td>Ville : </td>
											<td> <?php echo $maison['Ville']; ?> </td>
											<td>
												<div class="form-group">
												    <div class="form-check">
												    	<!-- Checkbox validant l'adresse enregistrée il faut le cocher pour valider le form  -->  
											      		<input class="form-check-input" type="checkbox" value="" id="adresseenregistree" required>
											      		<label class="form-check-label" for="adresseenregistree">
										       		 		
											      		</label>
											      		<!-- Message si non coché quand cliquer sur le bouton "Continuer" -->
										      			<div class="invalid-feedback">
										      	  			Vous devez cocher une case. 
										      			</div>
											    	</div>
											  	</div>
											</td>
										</tr>
										<tr>
											<td>Code Postal : </td>
											<td> <?php echo $maison['CodePostal']; ?> </td>
										</tr>
										<tr>
											<td>Pays : </td>
											<td> <?php echo $maison['Pays']; ?> </td>
										</tr>
										<tr>
											<td>Téléphone : </td>
											<td> <?php echo $maison['Telephone']; ?> </td>
										</tr>
									</td>

								</tr>
								
							</table>
						<? endforeach;
					endforeach ?>
					<!-- Fonctionnalité d'entrer une nouvelle adresse -->
					<a href="adresse.html"><br> Choisir une autre adresse <br></a>
					<!-- Bouton permettant l'action du form et qui envois sur la page paiement.html -->
					<center><button type="submit" class="btn btn-default">Continuer</button></center>
				</form>
				<script>
					// script bootstrap pour vérifier que les champs sont bien remplis 
					(function() {
					  'use strict';
					  window.addEventListener('load', function() {
					    var forms = document.getElementsByClassName('needs-validation');
					    var validation = Array.prototype.filter.call(forms, function(form) {
					      form.addEventListener('submit', function(event) {
					        if (form.checkValidity() === false) {
					          event.preventDefault();
					          event.stopPropagation();
					        }
					        form.classList.add('was-validated');
					      }, false);
					    });
					  }, false);
					})();
				</script>
			</div>
		</div>
	</div>
</body>
</html>
