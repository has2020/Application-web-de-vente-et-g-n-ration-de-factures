<?php
		session_start();
if (!isset($_SESSION['email'])) {

	header ('Location:login.php'); 
	exit(); 
}
?>
<?php 
 $total=0;
 		  $bdd = new PDO('mysql:host=localhost;dbname=projet','root','naroto10',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
 		  $r1 = $bdd->prepare('SELECT * from facturer where Numfact = ?');
		  $r1->execute(array($_SESSION['facture']));
 while($cursorp=$r1->fetch())
		{	$total=$total +$cursorp['Montant'];}
			$totaltva=$total*0.2;
			$totalttc=$total+$totaltva;

 		  $r2 = $bdd->prepare('UPDATE `facture` SET `TotalHT` = ?, `MontantTVA` = ?, `TotalTTC` = ? WHERE Numfact = ?');
          $r2->execute(array($total,$totaltva,$totalttc,$_SESSION['facture']));

 		  $r3 = $bdd->prepare('INSERT INTO `bonliv` (`Numbliv`, `DateBliv`, `NumFact`) VALUES (NULL, DATE(DATE_ADD(NOW(), INTERVAL 10 DAY)), ?)');
		  $r3->execute(array($_SESSION['facture']));



		  $r4 = $bdd->prepare('SELECT * from client where Email = ?');
		  $r4->execute(array($_SESSION['email']));
		  $cursorc=$r4->fetch();

		  $r5 = $bdd->prepare('SELECT * from facture where Numfact = ?');
		  $r5->execute(array($_SESSION['facture']));		  
		  $cursorf=$r5->fetch();

		  $r6 = $bdd->prepare('SELECT * from bonliv where Numfact = ?');
		  $r6->execute(array($_SESSION['facture']));		  
		  $cursorb=$r6->fetch();
		  $result = $bdd->prepare('SELECT * FROM produit join facturer on produit.Codeproduit=facturer.Codeproduit WHERE Numfact=?');
			$result->execute(array($_SESSION['facture'])); 

require('pdf/fpdf.php');


$pdf = new FPDF('P','mm','A4');
//add new page
$pdf->AddPage();
//set font to arial, bold, 14pt
$pdf->SetFont('Arial','B',14);
$pdf->Cell(20 ,5,'',0,1);
$pdf->Cell(20 ,5,'',0,1);

$pdf->Cell(130 ,5,'ELECTRO-ENSIAS',0,0);
$pdf->Cell(59 ,5,'FACTURE',1,1,'C');

$pdf->SetFont('Arial','',12);
$pdf->Cell(130 ,5,'',0,0);

$pdf->Cell(59 ,5,'',0,1);
$pdf->Cell(130 ,5,'Agdal',0,0);
$pdf->Cell(25 ,5,'Num_fact',0,0);
$pdf->Cell(34 ,5,$_SESSION['facture'],0,1);

$pdf->Cell(130 ,5,'[Rabat, Maroc, Africa]',0,0);
$pdf->Cell(25 ,5,'Date_fact',0,0);
$pdf->Cell(34 ,5,$cursorf['Datefact'],0,1);

$pdf->Cell(130 ,5,'Phone +212 656487852',0,0);
$pdf->Cell(25 ,5,'Num_BLiv',0,0);
$pdf->Cell(34 ,5,$cursorb['Numbliv'],0,1);

$pdf->Cell(130 ,5,'Fax +2125699822',0,0);
$pdf->Cell(25 ,5,'Date_BLiv',0,0);
$pdf->Cell(34 ,5,$cursorb['DateBliv'],0,1);

$pdf->Cell(189 ,30,'',0,1);

$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,5,'  CLIENT  ',1,1);

$pdf->SetFont('Arial','',12);
$pdf->Cell(20 ,10,'',0,1);
$pdf->Cell(10 ,10,'',0,0);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(30 ,5,'Id_Client',0,0);

$pdf->Cell(10 ,5,$cursorc['Codeclient'],0,0);
$pdf->Cell(70 ,5,'',0,0);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(30 ,5,'Nom',0,0);
$pdf->Cell(10 ,5,$cursorc['Nom'],0,1);

$pdf->Cell(10 ,10,'',0,0);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(30 ,5,'Email',0,0);
$pdf->Cell(10 ,5,$cursorc['Email'],0,0);
$pdf->Cell(70 ,5,'',0,0);
$pdf->Cell(30 ,5,'tel',0,0);
$pdf->Cell(10 ,5,$cursorc['Tel'],0,1);

$pdf->Cell(10 ,10,'',0,0);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(30 ,5,'Address',0,0);
$pdf->Cell(10 ,5,$cursorc['Adresse'],0,0);

$pdf->Cell(20 ,20,'',0,1);
//invoice contents
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190 ,5,'  PRODUIT  ',1,1);

$pdf->Cell(20 ,10,'',0,1);
$pdf->Cell(20 ,10,'',0,0);
$pdf->Cell(35 ,5,'Code_produit',1,0);
$pdf->Cell(40 ,5,'Designation',1,0);
$pdf->Cell(25 ,5,'Quantite',1,0);
$pdf->Cell(25 ,5,'Prix-U',1,0);
$pdf->Cell(25 ,5,'Mantant',1,0);

$pdf->SetFont('Arial','',12);
for($j=0;$j<$_SESSION['nbr'];$j++)

	{ 	$row=$result->fetch();

$pdf->Cell(20 ,5,'',0,1);		
$pdf->Cell(20 ,10,'',0,0);
$pdf->Cell(35 ,5,$row["Codeproduit"],1,0);
$pdf->Cell(40 ,5,$row["Designation"],1,0);
$pdf->Cell(25 ,5,$row["Quantite"],1,0);
$pdf->Cell(25 ,5,$row["Prixu"],1,0);
$pdf->Cell(25 ,5,$row["Montant"],1,0);
}
$pdf->Cell(20 ,5,'',0,1);
$pdf->Cell(20 ,5,'',0,1);
$pdf->Cell(122 ,5,'',0,0);
$pdf->Cell(22 ,5,'Total_HT',0,0);
$pdf->Cell(8 ,5,'DH',1,0);
$pdf->Cell(20 ,5,$total,1,1,'R');

$pdf->Cell(122 ,5,'',0,0);
$pdf->Cell(22 ,5,'Total_TVA',0,0);
$pdf->Cell(8 ,5,'DH',1,0);
$pdf->Cell(20 ,5,$totaltva,1,1,'R');

$pdf->Cell(122 ,5,'',0,0);
$pdf->Cell(22 ,5,'Total_TTC',0,0);
$pdf->Cell(8 ,5,'DH',1,0);
$pdf->Cell(20 ,5,$totalttc,1,1,'R');
$pdf->Output();


$pdf->Output();

 /*echo  '<strong> Numéro de facture </strong> : ' . $_SESSION['facture']  ;
?><br/><?php
echo '  <strong> Date de facture</strong> : ' .  $cursorf['Datefact'] ;
?>
<br/>
<br/>
<?php
echo  '<strong> Numéro de bon de livraison </strong> : ' . $cursorb['Numbliv']  ;
?><br/><?php
echo '  <strong> Date de bon de livraison </strong> : ' .  $cursorb['DateBliv'] ;
 ?>
<br/>
<br/>
<br/>
<?php
echo  '<strong> Code client </strong> : ' . $cursorc['Codeclient']  ;
?><br/><?php
echo  '<strong> Nom du client </strong> : ' . $cursorc['Nom']  ;
?><br/><?php
echo  '<strong> Telephone </strong> : ' . $cursorc['Tel']  ;
?><br/><?php
echo  '<strong> Adresse </strong> : ' . $cursorc['Adresse']  ;
?><br/><?php
echo  '<strong> Email </strong> : ' . $cursorc['Email']  ;
?><br/><br/><br/><br/><br/>*/



$result = $bdd->prepare('SELECT * FROM produit join facturer on produit.Codeproduit=facturer.Codeproduit WHERE Numfact=?');
$result->execute(array($_SESSION['facture'])); 

{ 
	
	echo '<table bgcolor="#FEFEFE" width="100%">'."\n"; 
	
	echo '<tr>'; 
	echo '<td bgcolor="#1C1D1D"><font color="#FE0000"><b><center>Codeproduit</b></center></font></td>'; 
	echo '<td bgcolor="#1C1D1D"><font color="#FE0000"><b><center>Designation</b></center></font></td>';  
	echo '<td bgcolor="#1C1D1D"><font color="#FE0000"><b><center>Quantite</b></center></font></td>'; 
	echo '<td bgcolor="#1C1D1D"><font color="#FE0000"><b><center>Prixu</b></center></font></td>'; 
	echo '<td bgcolor="#1C1D1D"><font color="#FE0000"><b><center>Montant</b></center></font></td>'; 
	echo '</tr>'."\n";  
	for($j=0;$j<$_SESSION['nbr'];$j++)

	{ 	$row=$result->fetch();
		echo '<tr>';
		echo '<td bgcolor="#D3D4D4"><center>'.$row["Codeproduit"].'</center></td>'; 
		echo '<td bgcolor="#D3D4D4"><center>'.$row["Designation"].'</center></td>';  
		echo '<td bgcolor="#D3D4D4"><center>'.$row["Quantite"].'</center></td>';  
		echo '<td bgcolor="#D3D4D4"><center>'.$row["Prixu"].'</center></td>'; 
		echo '<td bgcolor="#D3D4D4"><center>'.$row["Montant"].'</center></td>'; 
		echo '</tr>'."\n"; 
	 	}
echo '</table>'."\n"; 
} 





echo  '<strong> TotalHT </strong> : ' . $total  ;
?><br/><?php
echo  '<strong> TotalTVA </strong> : ' . $totaltva  ;
?><br/><?php
echo  '<strong> TotalTTC </strong> : ' . $totalttc  ;
?><br/>

</div>


	<div class="container-fluid ">
			<div >
				<div class="row">
					<article class ="col-md-8"> <h1> </h1></article>
					<article class ="col-md-6">  <a href="deconexion.php?deconex=1"> <strong>Se déconnecter</strong>  </a></article>
					<article class ="col-md-2"> <p> </p></article>
				</div>
			</div>
	</div>


$pdf->Output();



</body>
</html>
?>