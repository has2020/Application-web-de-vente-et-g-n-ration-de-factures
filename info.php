<?php
session_start();
if (($_SESSION['nom']) && ($_SESSION['email']))
{
    echo 'Bonjour ' . $_SESSION['nom'];
}else
{
	header('Location:login.php');
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
				<div class="row oldnew">
					<article class ="col-md-4"> <h1> </h1></article>
					<article class ="col-md-4"> <div class="informat"><h1><strong>Mes Informations</strong></h1></p></div></article>
					
					<article class ="col-md-4"> <h1> </h1></article>
				</div>
			</div>
		</div>
	</body>
	</html>
<div class="container-fluid ">
			<div class="contenu">
				<div class="row ">
					<article class ="col-md-2 textfinal"> <h1> </h1></article><strong>
						<?php
							$bdd = new PDO('mysql:host=localhost;dbname=projet','root','root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		 
		 				 $req123 = $bdd->prepare('SELECT * from client where Email = ?');
		  				 $req123->execute(array($_SESSION['email']));
		  				 $informations=$req123->fetch();
		  				 echo 'Code : ' . $informations['Codeclient'];
		  				 echo '</br>';
		  				 echo 'Nom : ' . $informations['Nom'] ;
		  				 echo '</br>';
		  				 echo 'Tel : ' . $informations['Tel'] . '</br>';
		  				 echo 'Adresse : ' . $informations['Adresse'] . '</br>';
		  				 echo 'Email : ' . $informations['Email'] . '</br>';
		  				 ?>
		  				</strong></div></div></div>
