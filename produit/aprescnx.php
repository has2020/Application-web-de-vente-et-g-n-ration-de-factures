<?php
		session_start();
		session_start(); 
if (!isset($_SESSION['email'])) {

	header ('Location:login.php'); 
	exit(); 
}
/* */									
										$_SESSION['nbr']=0;
$_SESSION['p1'] = 0;$_SESSION['p2'] = 0;$_SESSION['p3'] = 0;$_SESSION['p4'] = 0;$_SESSION['p5'] = 0;$_SESSION['p6'] = 0;$_SESSION['p7'] = 0;$_SESSION['p8'] = 0;


		  $bdd = new PDO('mysql:host=localhost;dbname=projet','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		  $req2 = $bdd->prepare('SELECT * from client where email = ?');
 		  $req2->execute(array($_SESSION['email']));
 		  $donneesclient=$req2->fetch();
 		  

 /* */		  							$_SESSION['client']=$donneesclient['Codeclient'];
 		  

 		  $req3 = $bdd->prepare('INSERT INTO facture (`Numfact`, `Codeclient`, `Datefact`, `TotalHT`, `MontantTVA`, `TotalTTC`) VALUES (NULL, ?, now(), 0, 0, 0)');
 		  $req3->execute(array($_SESSION['client']));

 		  $req4 = $bdd->prepare('SELECT Numfact FROM facture WHERE Codeclient=? AND TotalHT=0 ');
 		  $req4->execute(array($_SESSION['client']));

 		  $d=$req4->fetch();
 		  
 		  								

 /* */		  							$_SESSION['facture']=$d['Numfact'];

 header('Location:test1.php');
 ?>
<!DOCTYPE html>

 