<?php
	$article = isset($_POST["wildid"])? $_POST["wildid"] : ""; 
	if(!empty($_POST['envoyer'])) {
	    $sql = "DELETE from panier where IDObjet = ".$article['IDObjet']." ";
	    header('Location: panier.php');
	}
?>