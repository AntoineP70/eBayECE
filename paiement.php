<?php
	 $numero = isset($_POST["numero"])? $_POST["numero"] : ""; 
	 $nom = isset($_POST["nom"])? $_POST["nom"] : ""; 
	 $code = isset($_POST["code"])? $_POST["code"] : "";
	 $type = isset($_POST["type"])? $_POST["type"] : "";
	 $date = isset($_POST["date"])? $_POST["date"] : "";

	$bdd = new mysqli('localhost','root',"", 'ebay_ece');
	$cartes = $bdd->query('select * from carte where NumCarte LIKE "'.$numero.'"');
	foreach ($cartes as $carte): 

		
		if ($numero == $carte['NumCarte'] && $nom==$carte['NomCarte'] && $code==$carte['Code'] && $type==$carte['Type'] && $date==$carte['DateExpiration']) {
			echo "<h1>Achat validé</h1>";

			$users = $bdd->query('select * from data_co');
			foreach ($users as $user) {
				
				$adressemails = $bdd->query('select Email from acheteur where IDAcheteur = "'.$user['user_id'].'"');
				foreach ($adressemails as $adressemail) {


					$items = $bdd->query('select * from panier');
					foreach ($items as $item) {
						$bdd->query('TRUNCATE TABLE panier');
						$bdd->query('delete from objet where IDObjet = "'.$item['IDObjet'].'"');
					}
					//echo $adressemail['Email'];
					//mail($adressemail['Email'], 'Récapitulatif de votre achat', 'Merci d\'avoir commandé sur Ebay ECE !');	
				}			
				
			}
		}
		else {
			echo "Carte Non reconnue";
		}
	endforeach;
?>
