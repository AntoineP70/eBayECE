<?php

$id=isset($_POST["user"])?$_POST["user"]:"";
$mdp=isset($_POST["mdp"])?$_POST["mdp"]:"";

$user_name=isset($_POST["user_name"])?$_POST["user_name"]:"";
$user_pre=isset($_POST["user_pre"])?$_POST["user_pre"]:"";
$user_ad=isset($_POST["user_ad"])?$_POST["user_ad"]:"";
$user_email=isset($_POST["user_email"])?$_POST["user_email"]:"";


$mysqli = new mysqli('localhost','root',"","ebay_ece");


if($mysqli->connect_errno){
	echo 'che';
	printf("Connect failed : %s\n", $mysql->connect_error);
	exit();
}


if(isset($_POST['b_creer']))
{

	if($mdp !="")
	{

		$sql = "SELECT * FROM utilisateur";
		if($user_email !="" && $user_name !=""){
			$sql.=" WHERE Email LIKE '$user_email'";

			if($user_name != ""){
				$sql.= " AND Nom LIKE '$user_name'";
			}
		}
		
		$result = $mysqli->query($sql);
		if($result->num_rows != 0)
		{
			echo "<script type='text/javascript'>alert('Compte déjà créé !');</script>";
			
		}
		else{
			$sql = "INSERT INTO utilisateur(Email,Pseudo,Mdp,Nom,Prenom,Adresse1,Adresse2,Ville,CodePostal,Pays,Tel,Role) VALUES ('$user_email','n','$mdp','$user_name','$user_pre','$user_ad','n','n','n','n','n','user')";
			$result = $mysqli->query($sql);
			echo "<script type='text/javascript'>alert('Compte créé !');</script>";
			include "eBay_acceuil.html";

		}
	}
}

if(isset($_POST['connexion']))
{

	$sql = "SELECT * FROM utilisateur";
	if($user_email !="" && $user_name !=""){
		$sql.=" WHERE Name LIKE '$user_name' OR Email LIKE '$user_email'";

		if($name != ""){
			$sql.= " AND Mdp LIKE '$mdp'";
		}
	}
	
	$result = $mysqli->query($sql);
	if($result->num_rows != 0)
	{
		echo "<script type='text/javascript'>alert('Connexion réussie');</script>";
		include "eBay_acceuil.html";
	}
}
/*
if(isset($_POST['suppr']))
{
	$sql = "SELECT * FROM account";
	if($email !="" && $name !=""){
		$sql.=" WHERE Email LIKE '$email'";

		if($name != ""){
			$sql.= " AND Name LIKE '$name'";
		}
	}
	$result = $mysqli->query($sql);
	while($data=mysqli_fetch_assoc($result))
	{
		$email = $data['Email'];
		echo "<br>";
	}
	$sql = "DELETE FROM account";
	$sql .= "WHERE Email = $email";
	$result = $mysqli->query($sql);
	echo "<script type='text/javascript'>alert('Compte supprimé!');</script>";
	include 'facebook.html';
}
*/
?>