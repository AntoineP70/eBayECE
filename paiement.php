<?php
	// récupération des inputs
	 $numero = isset($_POST["numero"])? $_POST["numero"] : ""; 
	 $nom = isset($_POST["nom"])? $_POST["nom"] : ""; 
	 $code = isset($_POST["code"])? $_POST["code"] : "";
	 $type = isset($_POST["type"])? $_POST["type"] : "";
	 $date = isset($_POST["date"])? $_POST["date"] : "";

	// connexion à la bdd
	$bdd = new mysqli('localhost','root',"", 'ebay_ece');
	// recherche de la carte entrée dans la bdd
	$cartes = $bdd->query('select * from carte where NumCarte LIKE "'.$numero.'"');
	foreach ($cartes as $carte): 

		// Si la carte est trouvée
		if ($numero == $carte['NumCarte'] && $nom==$carte['NomCarte'] && $code==$carte['Code'] && $type==$carte['Type'] && $date==$carte['DateExpiration']) {
			echo "<h1>Achat validé</h1>";
		
			//suppression des lignes dans la table panier
			$items = $bdd->query('select * from panier');
			foreach ($items as $item) {
				$bdd->query('TRUNCATE TABLE panier');
				$bdd->query('delete from objet where IDObjet = "'.$item['IDObjet'].'"');
			}
				
			
		else {
			echo "Carte Non reconnue";
		}
	endforeach;
?>
