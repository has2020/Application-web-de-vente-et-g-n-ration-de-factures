<?php
		ob_start();
		session_start();

		if($_SESSION['p1'] == 1 && $_GET['nom']==1)
		  	{	
		  		echo 'Le produit Samsung est déjà dans votre panier';
		  		header("refresh:20;url=test1.php");
		  		ob_flush();
		  	}

		  if($_SESSION['p2'] == 1 && $_GET['nom']==2)
		  	{	
		  		echo 'Le produit Philips est déjà dans votre panier';
		  		header("refresh:20;url=test1.php");
		  		ob_flush();
		  	}
		  if($_SESSION['p3'] == 1 && $_GET['nom']==3 )
		  	{	
		  		echo 'Le produit Acer est déjà dans votre panier';
		  		header("refresh:20;url=test1.php");
		  		ob_flush();
		  	}
		  if($_SESSION['p4'] ==1 && $_GET['nom']==4)
		  	{	
		  		echo 'Le produit AOC est déjà dans votre panierr';
		  		header("refresh:20;url=test1.php");
		  		ob_flush();
		  	}
		  if($_SESSION['p5'] == 1 && $_GET['nom']==5)
		  	{	
		  		echo 'Le produit LG est déjà dans votre panier';
		  		header("refresh:20;url=test1.php");
		  		ob_flush();
		  	}
		  if($_SESSION['p6'] == 1 && $_GET['nom']==6)
		  	{	
		  		echo 'Le produit MSI est déjà dans votre panier';
		  		header("refresh:20;url=test1.php");
		  		ob_flush();
		  	}
		  if($_SESSION['p7'] == 1 && $_GET['nom']==7)
		  	{	
		  		echo 'Le produit Lenovo est déjà dans votre panier';
		  		header("refresh:20;url=test1.php");
		  		ob_flush();
		  	}
		  if($_SESSION['p8'] == 1 && $_GET['nom']==8)
		  	{	
		  		echo 'Le produit Dell est déjà dans votre panier';
		  		header("refresh:20;url=test1.php");
		  		ob_flush();
		  	}
?>

<!DOCTYPE html>


<?php     
		  if(($_SESSION['p1'] == 1 && $_GET['nom']==1) || ($_SESSION['p2'] == 1 && $_GET['nom']==2) || ($_SESSION['p3'] == 1 && $_GET['nom']==3) || ($_SESSION['p4'] == 1 && $_GET['nom']==4) || ($_SESSION['p5'] == 1 && $_GET['nom']==5) || ($_SESSION['p6'] == 1 && $_GET['nom']==6) || ($_SESSION['p7'] == 1 && $_GET['nom']==7) || ($_SESSION['p8'] == 1 && $_GET['nom']==8))
		  	{echo '.Retour à la page d accueil dans 3 secondes';}
		  else 
		  {

		  echo    ' Vous venez d ajouter ' .  $_POST['quantite'] . ' du produit ' .  $_GET['nom'] .' au panier' ;
		  echo    "<p> Retour à la page d'acceuil dans 3 secondes...Veuillez patienter ";
			
		  $bdd = new PDO('mysql:host=localhost;dbname=projet','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		 
		  $req1 = $bdd->prepare('SELECT * from produit where Codeproduit = ?');
		  $req1->execute(array($_GET['nom']));
		  $donneesprod=$req1->fetch();
		  
		  $total= ($donneesprod['Prixu'] * $_POST['quantite']);

		  $reqf = $bdd->prepare('INSERT INTO facturer (`Numfact`, `Codeproduit`, `Quantite`, `Montant`) VALUES (?, ?, ?, ?)');
		  $reqf->execute(array($_SESSION['facture'],$_GET['nom'],$_POST['quantite'],$total));

		  $_SESSION['nbr']=$_SESSION['nbr']+1;}
		  if($_GET['nom']==1)
		  	{	
		  		$_SESSION['p1'] = 1;
		  		
		  	}

		  if($_GET['nom']==2)
		  	{	
		  		$_SESSION['p2'] = 1;
		  	
		  	}
		  if($_GET['nom']==3)
		  	{	
		  		$_SESSION['p3'] = 1;
		  		
		  	}
		  if($_GET['nom']==4)
		  	{	
		  		$_SESSION['p4'] =1 ;
		  		
		  	}
		  if($_GET['nom']==5)
		  	{	
		  		$_SESSION['p5'] = 1;
		  		
		  	}
		  if($_GET['nom']==6)
		  	{	
		  		$_SESSION['p6'] = 1;
		  		
		  	}
		  if($_GET['nom']==7)
		  	{	
		  		$_SESSION['p7'] = 1;
		  		
		  	}
		  if($_GET['nom']==8)
		  	{	
		  		$_SESSION['p8'] = 1;
		  		
		  	}
 ?>

<meta http-equiv="refresh" content="3; url=test1.php" />