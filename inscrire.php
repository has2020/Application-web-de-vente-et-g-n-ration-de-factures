
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/style_inscription.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    
</head>

<body>
    <form method="post" action="login.php"><input type="submit" name="inscrire" value="Retour to Login" class="btn-login"/></form>
    <div class="container">
    <img src="image/login2.ico">    
        <form method="post" action="verif_inscription.php">
           <div class ="form-input">
                <input type="text" name="nom" placeholder="Nom" required class="in" >
            </div>
            <div class="form-input">
                <input type="tel" name="tele" placeholder="Num_tele" class="in">      
            </div>
            <div class="form-input">
                <input type="text" name="adres" placeholder="Adresse" class="in">
            </div>
            <div class="form-input">
                <input type="email" name="email" placeholder="mail@domaine.com" required class="in" >
            </div>
            <div class="form-input">
                <input type="password" name="password" placeholder="Password" required class="in">
            </div>
            <input type="submit" name="inscrire" value="Enregistrer" class="btn-login"/></form>
        
            
            
            
        
        
    </div>
</body>
</html>
