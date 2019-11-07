<?php
		
		session_start(); 
if (!isset($_SESSION['email'])) {

	header ('Location:login.php'); 
	exit(); 
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> PROJECT </title>
   	<link rel="stylesheet" href="bootstrap.min.css">
   	<link rel="stylesheet" href="style.css">
</head>
<body class="body">
	<div class="container-fluid maclasse">
			<div class="contenu">
				<div class="row">
					<article class ="col-md-4"> <h1> </h1></article>
					<article class ="col-md-6"> <p class="titre">ELECTRO </p></article>
					<article class ="col-md-2"> <a href="deconexion.php?deconex=1"> <strong>Se déconnecter</strong>  </a></article>
				</div>
			</div>
	</div>

	<div class="container-fluid ">
			<div class="contenu">
				<div class="row">
					<article class ="col-md-12 bord"> <h1> <strong> TABLEAU DE BORD : </strong></h1></article>
				</div>
			</div>
	</div>
</body></html>


	
	<?php

	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', 'naroto10',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
	}
	catch (Exception $e)
	{
        die('Erreur : ' . $e->getMessage());
	}
	{ 
	
	echo '<table bgcolor="#FEFEFE" width="100%">'."\n"; 
	
	echo '<tr>'; 
	echo '<td bgcolor="#1C1D1D"><font color="#FE0000"><b><center>Codeproduit</b></center></font></td>'; 
	echo '<td bgcolor="#1C1D1D"><font color="#FE0000"><b><center>Designation</b></center></font></td>';  
	echo '<td bgcolor="#1C1D1D"><font color="#FE0000"><b><center>Nombre d achat</b></center></font></td>'; 
	echo '<td bgcolor="#1C1D1D"><font color="#FE0000"><b><center>Prix Total des achats</b></center></font></td>'; 
	
	echo '</tr>'."\n";  

	for ($i=1; $i <9 ; $i++) { 
		# code...
	
 		  $l1 = $bdd->prepare('SELECT Codeproduit,count(Codeproduit) as c3,sum(Montant) as c4 FROM facturer WHERE Codeproduit=? group by Codeproduit');
 		  $l1->execute(array($i)); 
	   	$abc=$l1->fetch();

	   	$l2 = $bdd->prepare('SELECT Designation FROM produit WHERE Codeproduit=? ');
 		  $l2->execute(array($i)); 
	   	$abcd=$l2->fetch();



		echo '<tr>';
		echo '<td bgcolor="#D3D4D4"><center>'.$abc["Codeproduit"].'</center></td>'; 
		echo '<td bgcolor="#D3D4D4"><center>'.$abcd["Designation"].'</center></td>';  
		echo '<td bgcolor="#D3D4D4"><center>'.$abc["c3"].'</center></td>';  
		echo '<td bgcolor="#D3D4D4"><center>'.$abc["c4"].'</center></td>'; 
		echo '</tr>'."\n"; 
	 	}
echo '</table>'."\n"; 
} 



	
?>
