<?php
$id=$_POST['IDItem'];

$bdd = new mysqli('localhost','root',"",'ebay_ece');
if(isset($_POST['delete_item']))
{
	$sql = "DELETE from Objet where '$id' like IDObjet";
	$result=$bdd->query($sql);
	echo "<script type='text/javascript'>alert('Objet supprimé !');</script>";
	include 'eBay_admin.php';
}
?>