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
					
						<a href="info.php"> <strong>Mes Informations</strong>  </a></article>
					</p></article></div>
					<article class ="col-md-4"> <h1> </h1></article>
				</div>
			</div>
	</div>


	<div class="container-fluid ">
			<div class="contenu">
				<div class="row">
					<article class ="col-md-1"> <h1> </h1></article>
					<article class ="col-md-5 maclasse2"> 

					<figure>
					 <p> <a href="imarticle/samsung.jpg"><img src="imarticle/samsung.jpg" alt ="Ecran"  class="flottant"/> </a>  <strong class=sam1> Samsung S24D330 </strong> : <br/>   *Fabriquant SAMSUNG   <br/>
						*Fréquence 60 Hz		 <br/>
						*Temps de réponse 1 ms <br/>
						*Facteur de forme 16	 <br/>
						*Taille 24 <br/>
						*Résolution Full HD 

						<form action="panier1.php?nom=1" method="POST">
						<p><label> Quantité :  <input type="number" name="quantite" min="0" max="9" /></label><input type="submit" /></p>
						</form>
						<div> <strong> <FONT face="Verdana" color="#000000" size="5">Prix : 3600 DH</FONT> </strong></div>

						 <br/>
					 </p>
						
					</figure>
					</article>

					<article class ="col-md-5 maclasse2"> 

					<figure>
					 <p> <a href="imarticle/philips2.jpg"><img src="imarticle/philips2.jpg" alt ="Ecran"  class="flottant"/> </a>  <strong class=sam1> Philips 223V5LHSB2 </strong> : <br/>   *Fabriquant PHILIPS   <br/>
						*Fréquence 60 Hz		 <br/>
						*Temps de réponse 5 ms <br/>
						*Facteur de forme 16	 <br/>
						*Taille 21 <br/>
						*Résolution Full HD 

						<form action="panier1.php?nom=2" method="POST">
						<p><label> Quantité :  <input type="number" name="quantite" min="0" max="9" /></label><input type="submit" /></p>
						</form>
						<div> <strong> <FONT face="Verdana" color="#000000" size="5">Prix : 4500 DH</FONT> </strong></div>

						 <br/>
					 </p>
						
					</figure>
					</article>
				</div>
			</div>
	</div>	

<div class="container-fluid ">
			<div class="contenu">
				<div class="row">
					<article class ="col-md-1"> <h1> </h1></article>
					<article class ="col-md-5 maclasse2"> 

					<figure>
					 <p> <a href="imarticle/acer3.jpg"><img src="imarticle/acer3.jpg" alt ="Ecran"  class="flottant"/> </a>  <strong class=sam1> Acer Predator XB241H </strong> : <br/>   *Fabriquant ACER   <br/>
						*Fréquence 144 Hz		 <br/>
						*Temps de réponse 5 ms <br/>
						*Technologie Gsync	 <br/>
						*Taille 24 <br/>
						*Résolution Full HD 

						<form action="panier1.php?nom=3" method="POST">
						<p><label> Quantité :  <input type="number" name="quantite" min="0" max="9" /></label><input type="submit" /></p>
						</form>
						<div> <strong> <FONT face="Verdana" color="#000000" size="5">Prix : 6100 DH</FONT> </strong></div>
						 <br/>
					 </p>
						
					</figure>
					</article>

					<article class ="col-md-5 maclasse2"> 

					<figure>
					 <p> <a href="imarticle/aoc4.jpg"><img src="imarticle/aoc4.jpg" alt ="Ecran"  class="flottant"/> </a>  <strong class=sam1> AOC I2281FWH  </strong> : <br/>   *Fabriquant AOC   <br/>
						*Fréquence 60 Hz		 <br/>
						*Temps de réponse 1 ms <br/>
						*Panel TN	 <br/>
						*Taille 21 <br/>
						*Résolution Full HD 

						<form action="panier1.php?nom=4" method="POST">
						<p><label> Quantité :  <input type="number" name="quantite" min="0" max="9" /></label><input type="submit" /></p>
						</form>
						<div> <strong> <FONT face="Verdana" color="#000000" size="5">Prix : 2200 DH</FONT> </strong></div>
						 <br/>
					 </p>
						
					</figure>
					</article>
				</div>
			</div>
	</div>



<div class="container-fluid ">
			<div class="contenu">
				<div class="row">
					<article class ="col-md-1"> <h1> </h1></article>
					<article class ="col-md-5 maclasse2"> 

					<figure>
					 <p> <a href="imarticle/lg5.jpg"><img src="imarticle/lg5.jpg" alt ="Ecran"  class="flottant"/> </a>  <strong class=sam1> LG 24BK750Y </strong> : <br/>   *Fabriquant LG   <br/>
						*Fréquence 60 Hz		 <br/>
						*Panel IPS <br/>
						*Technologie Gsync	 <br/>
						*Taille 24 <br/>
						*Résolution Full HD 

						<form action="panier1.php?nom=5" method="POST">
						<p><label> Quantité :  <input type="number" name="quantite" min="0" max="9" /></label><input type="submit" /></p>
						</form>
						<div> <strong> <FONT face="Verdana" color="#000000" size="5">Prix : 3400 DH</FONT> </strong></div>
						 <br/>
					 </p>
						
					</figure>
					</article>

					<article class ="col-md-5 maclasse2"> 

					<figure>
					 <p> <a href="imarticle/msi6.jpg"><img src="imarticle/msi6.jpg" alt ="Ecran"  class="flottant"/> </a>  <strong class=sam1> MSI Optix G24C Gaming  </strong> : <br/>   *Fabriquant MSI   <br/>
						*Fréquence 144 Hz		 <br/>
						*Temps de réponse 1 ms <br/>
						*Panel VA	 <br/>
						*Taille 21 <br/>
						*Résolution Full HD 

						<form action="panier1.php?nom=6" method="POST">
						<p><label> Quantité :  <input type="number" name="quantite" min="0" max="9" /></label><input type="submit" /></p>
						</form>
						<div> <strong> <FONT face="Verdana" color="#000000" size="5">Prix : 4000 DH</FONT> </strong></div>
						 <br/>
					 </p>
						
					</figure>
					</article>
				</div>
			</div>
	</div>

<div class="container-fluid ">
			<div class="contenu">
				<div class="row">
					<article class ="col-md-1"> <h1> </h1></article>
					<article class ="col-md-5 maclasse2"> 

					<figure>
					 <p> <a href="imarticle/lenovo7.jpg"><img src="imarticle/lenovo7.jpg" alt ="Ecran"  class="flottant"/> </a>  <strong class=sam1> Lenovo ThinkVision X1 </strong> : <br/>   *Fabriquant Lenovo   <br/>
						*Fréquence 60 Hz		 <br/>
						*Panel IPS <br/>
						*Temps de réponse 6 ms	 <br/>
						*Taille 27 <br/>
						*Résolution 4k

						<form action="panier1.php?nom=7" method="POST">
						<p><label> Quantité :  <input type="number" name="quantite" min="0" max="9" /></label><input type="submit" /></p>
						</form>
						<div> <strong> <FONT face="Verdana" color="#000000" size="5">Prix : 10 000 DH</FONT> </strong></div>
						 <br/>
					 </p>
						
					</figure>
					</article>

					<article class ="col-md-5 maclasse2"> 

					<figure>
					 <p> <a href="imarticle/dell8.jpg"><img src="imarticle/dell8.jpg" alt ="Ecran"  class="flottant"/> </a>  <strong class=sam1> Dell Ultrasharp U2414H  </strong> : <br/>   *Fabriquant Dell   <br/>
						*Fréquence 60 Hz		 <br/>
						*Temps de réponse 8 ms <br/>
						*Panel tn	 <br/>
						*Taille 24 <br/>
						*Résolution Full HD 

						<form action="panier1.php?nom=8" method="POST">
						<p><label> Quantité :  <input type="number" name="quantite" min="0" max="9" /></label><input type="submit" /></p>
						</form>
						<div> <strong> <FONT face="Verdana" color="#000000" size="5">Prix : 3400 DH</FONT> </strong></div>
						 <br/>
					 </p>
						
					</figure>
					</article>
				</div>
			</div>
	</div>
<br/>

<div class="container-fluid ">
			<div>
				<div class="row">
					<article class ="col-md-4"> <h1> </h1></article>
					<article class ="col-md-2 old"> <a href="anupan.php"> <strong><font color="black">Vider le panier</strong></font>  </a></article>
					<article class ="col-md-2 new"> <a href="facture.php" target='_blank'> <strong><font color="black">Confirmer</strong></font>  </a></article>
					<article class ="col-md-4"> <h1> </h1></article>
				</div>
			</div>
	</div>





</body>
</html>