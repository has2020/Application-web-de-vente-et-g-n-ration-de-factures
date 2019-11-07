<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login_ADMIN</title>
    <link rel="stylesheet" type="text/css" href="css/style_admin.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    
</head>

<body>
	<form method="post" action="login.php"><input type="submit" name="inscrire" value="Retour to Login" class="btn-login"/></form>
	<div class="container">
	<img src="image/login3.ico">
		<form method="post" action="admin_login.php">
			<div class ="form-input">
				<input type="text" name="email" placeholder="pseudo" class="in" >
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="enter password" class="in">
				
			</div>
			<div><p><input type="submit" name="inscrire" value="login" class="btn-login"/></p></div>
			<?php
			if (!empty($_POST) ){
			 	if ($_POST['inscrire']!="Retour to Login") {
			 		include('verif_admin.php');
			 	}
			 	

			 }?>		
			
			
			
			
			
		</form>
		
	</div>
</body>
</html>