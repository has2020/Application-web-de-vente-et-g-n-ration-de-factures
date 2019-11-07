
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/style_login.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    
</head>

<body>
	<div class="container">
	<img src="image/login2.ico">
		<form method="post" action="login.php">
			<div class ="form-input">
				<input type="email" name="email" placeholder="enter your email" class="in" >
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="enter password" class="in">
				
			</div>
			<input type="submit" name="inscrire" value="login" class="btn-login"/>
			<input type="submit" name="inscrire" value="inscrire" class="btn-login"/>
			<div><p><input type="submit" name="inscrire" value="se connecter en tant q'admistrateur" class="btn-login"/></p></div>
			<?php
			 if (!empty($_POST) ){
			 	if ($_POST['inscrire']!="Retour to Login") {
			 		include('redirect.php');
			 	}
			 	

			 }?>			
			
		</form>
		
	</div>
</body>
</html>