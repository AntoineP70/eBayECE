<!DOCTYPE html>
<html>
<head>
	<title>Adresse de Livraison</title>
	<meta charset="utf-8">

	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="styles.css">
	<link rel= "stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	<script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
 	<script src= "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> </script>
</head>
<body>
<?php
	 $prenom = isset($_POST["prenom"])? $_POST["prenom"] : ""; 
	 $nom = isset($_POST["nom"])? $_POST["nom"] : ""; 
	 $ligne1 = isset($_POST["ligne1"])? $_POST["ligne1"] : "";
	 $ligne2 = isset($_POST["ligne2"])? $_POST["ligne2"] : "";
	 $ville = isset($_POST["ville"])? $_POST["ville"] : "";
	 $poste = isset($_POST["poste"])? $_POST["poste"] : "";
	 $pays = isset($_POST["pays"])? $_POST["pays"] : "";
	 $tel = isset($_POST["tel"])? $_POST["tel"] : "";
	 $enregistrer = isset($_POST["enregistrer"])? $_POST["enregistrer"] : "";


	$bdd = new mysqli('localhost','root',"", 'ebay_ece');
	$users = $bdd->query('select user_id from data_co');
	foreach ($users as $user) {
		$bdd->query('insert into adresse (IDAcheteur, Nom, Prenom, Ligne1, Ligne2, Ville, CodePostal, Pays, Telephone) VALUES ("'.$user['user_id'].'", "'.$nom.'", "'.$prenom.'", "'.$ligne1.'", "'.$ligne2.'", "'.$ville.'", "'.$poste.'", "'.$pays.'", "'.$tel.'")');
	}
	
	
?>
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

			<div class="row" style="height: 150px"></div>
			<div class="row">

				<div class="col-sm-3"></div>
				<div class="col-sm-6">

					<form class="border border-dark" style="padding: 15px" action="paiement.html" method="post" novalidate>
						<center><h3>Récapitulatif</h3></center>
						<h4>Adresse de livraison</h4>
					<div class="form-row">
				    	<div class="col">
				    		<br>
				    		<label>Nom :</label>
				    		<label> <?php echo $nom; ?>
				    	</div>
				    	<div class="col">
				    		<br>
				    		<label>Prénom :</label>
				     		<label> <?php echo $prenom; ?>
				    	</div>
				  	</div>	
				  	<br>
				  	<div class="form-row">
				    	<div class="col">
				    		<label>Adresse ligne 1 :</label>
				    		<label> <?php echo $ligne1; ?>
				    	</div>
				    	<div class="col">
				    		<label>Adresse ligne 2 :</label>
				     		<label> <?php echo $ligne2; ?>
				    	</div>
				  	</div>
					<br>
					<div class="form-row">
				    	<div class="col">
				    		<label>Ville :</label>
				    		<label> <?php echo $ville; ?>
				    	</div>
				    	<div class="col">
				    		<label>Code Postal :</label>
				     		<label> <?php echo $poste; ?>
				    	</div>
				  	</div>
					<br>
					<div class="form-row">
				    	<div class="col">
				    		<label>Pays :</label>
				    		<label> <?php echo $pays; ?>
				    	</div>
				    	<div class="col">
				    		<label>Téléphone :</label>
				     		<label> <?php echo $tel; ?>
				     		<br>
				    	</div>
				  	</div>
					<br><br>
		 			 <center><a href="paiement.html"><input type="button" value="Continuer"></a></center>
				</form>

</body>
</html>