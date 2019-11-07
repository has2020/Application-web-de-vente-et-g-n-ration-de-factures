<?php
		session_start();
		$_SESSION['nbr']=0;
$_SESSION['p1'] = 0;$_SESSION['p2'] = 0;$_SESSION['p3'] = 0;$_SESSION['p4'] = 0;$_SESSION['p5'] = 0;$_SESSION['p6'] = 0;$_SESSION['p7'] = 0;$_SESSION['p8'] = 0;
		$bdd = new PDO('mysql:host=localhost;dbname=projet','root','naroto10',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		$reqff = $bdd->prepare('DELETE FROM `facturer` WHERE `facturer`.`Numfact` = ?');
		$reqff->execute(array($_SESSION['facture']));
		header('Location: test1.php');



?>