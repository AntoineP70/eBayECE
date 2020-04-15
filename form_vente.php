<?php

$it_name=isset($_POST["item_titre"])?$_POST["item_titre"]:"";
$it_pic=isset($_POST["pic"])?$_POST["pic"]:"";
$it_des=isset($_POST["item_des"])?$_POST["item_des"]:"";
$it_prix=isset($_POST["item_prix"])?$_POST["item_prix"]:"";
$it_cat=isset($_POST["menu_categorie"])?$_POST["menu_categorie"]:"";
$it_vente=isset($_POST["menu_vente"])?$_POST["menu_vente"]:"";

$bdd = new mysqli('localhost','root',"","ebay_ece");

if($bdd->connect_errno){
	printf("Connection failes : %s\n",$bdd->connect_error);
	exit();
}

if(isset($_POST['b_vendre']))
{
	if($it_name && $it_prix && $it_cat && $it_vente && $it_des)
	{
		$sql="INSERT into objet(ID_Objet,Nom_Objet,Photos,Description,Vidéo,Prix,Categorie,Type_Vente, Vendu) VALUES (NULL,'$it_name','$it_pic','$it_des','','$it_prix','$it_cat','$it_vente','')";
		$result = $bdd->query($sql);
		echo $result;
		echo "<script type='text/javascript'>alert('Objet mis en vente !');</script>";
		//include "eBay_acceuil.html";
	}
	else{
		echo $it_name; echo $it_prix;echo $it_cat;echo $it_vente; echo $it_des;
		echo "<script type='text/javascript'>alert('Champs vides !');</script>";
			include "Vente.html";
	}
}

?>