

<?php 
session_start();

try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', 'root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
	}
	catch (Exception $e)
	{
        die('Erreur : ' . $e->getMessage());
	}
	$ln = $bdd->prepare('SELECT TotalHT FROM facture WHERE Numfact=?');
 	$ln->execute(array($_SESSION['facture']));
 	$variable=$ln->fetch();
 	if($variable['TotalHT']==0)
	 {	$reqfff = $bdd->prepare('DELETE FROM `facturer` WHERE `facturer`.`Numfact` = ?');
		$reqfff->execute(array($_SESSION['facture']));
	 	$ly = $bdd->prepare('DELETE FROM facture WHERE Numfact=?');
	 	$ly->execute(array($_SESSION['facture']));
 	} 









if (isset($_GET['deconex']))
{
		$_SESSION = array();
		session_destroy();
		header('Location:login.php');
}

?>
