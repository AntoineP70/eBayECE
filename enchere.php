<?php
	 $prixutil = isset($_POST["prixutil"])? $_POST["prixutil"] : ""; 

	 $bdd = new mysqli('localhost','root',"", 'ebay_ece');
	 $users = $bdd->query('select * from data_co');
	 foreach ($users as $user) {
	 	$id_objs = $bdd->query('select * from objet where TypeVente LIKE 'Enchere'');
		 foreach ($id_objs as $id_obj) {
		 	$objets = $bdd->query('select * from panier where IDObjet = "'.$id_obj['IDObjet'].'"');
		 	foreach ($objets as $objet) {
		 		$sql = "INSERT INTO encheres (IDObjet, IDAcheteur, PrixUtilisateur) VALUES ("$objet['IDObjet']", "$user['user_id']", "$prixutil")"
		 	}
		 }
	 }
		 $temps = $bdd->query('select * from objet');
		 foreach ($variable as $key => $value) {
	 	}
	 
	 ?>		