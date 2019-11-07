<?php

if($_POST["inscrire"]=="login")
{
	header("Location:login.php");

}
else
{
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', 'naroto10',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
	}
	catch (Exception $e)
	{
        die('Erreur : ' . $e->getMessage());
	}

	$veri=$bdd->prepare('select Email from client where Email=?');
	$veri->execute(array($_POST['email']));
	if ($veri->fetch())	
	{
		echo "EMAIL NON VALID" ;?>
		<form action='inscrire.php'>
			<div ><input type="submit" name="retour" value="Retour"></div>	
		</form> <?php
		
	}
	else
	{
		echo "ENREGISTREMENT AVEC SUCCES";
		$donner=$bdd->prepare('insert into client(Nom,Tel,Adresse,Email,mot_passe) values(?,?,?,?,?)');
		$donner->execute(array($_POST['nom'],$_POST['tele'],$_POST['adres'],$_POST['email'],password_hash($_POST['password'],PASSWORD_DEFAULT)));
		$veri->closeCursor();
		header('Location: aprescnx.php');
		

	}

}

?>