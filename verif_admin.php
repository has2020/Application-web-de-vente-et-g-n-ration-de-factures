<?php



if(($_POST['email']!='admin') || ($_POST['password']!='admin'))
{
	echo 'Mauvais identifiant ou mot de passe !';
        
	
	
}
else
{
        session_start();  
        $_SESSION['email'] =$_POST['email'];
        header('Location:page_admin.php');
}

?>