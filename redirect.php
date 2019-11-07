<?php

if ($_POST['inscrire'] == "inscrire" )
{
	header('Location:inscrire.php');
} 
elseif ($_POST['inscrire'] == "se connecter en tant q'admistrateur") 
{
	header('Location:admin_login.php');
}
else 
{
	
	include('verif_login.php');
}


?>
