<?php


try
{
	$bdd = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', 'naroto10',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

$ve = $bdd->prepare('SELECT Nom,email,mot_passe from client where Email= ?');
$ve->execute(array($_POST['email']));
$res=$ve->fetch();
$isPasswordCorrect = password_verify($_POST['password'], $res['mot_passe']);

if(!$res)
{
	echo 'Mauvais identifiant ou mot de passe ';
        
	
	
}
else
{
	 if ($isPasswordCorrect) {
        session_start();
		$_SESSION['nom']= $res['Nom'];  
        $_SESSION['email'] =$_POST['email'];
        header('Location:aprescnx.php');
    }
    else {
        echo 'Mauvais identifiant ou mot de passe !';
        
    }
}

$ve->closeCursor();
?>