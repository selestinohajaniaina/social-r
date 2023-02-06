<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGIN</title>
    <?php include("sigin_style.php"); ?>
</head>
<body>
    <form method="post" id="formulaire">
        <h1>Sigin</h1>
        <input type="text" name="prenom" id="prenom" placeholder="User name" autocomplete=off required/>
        <input type="password" name="password" id="password" placeholder="Password" autocomplete=off required/>
        <span id="erreur"></span>
        <input type="submit" name="connexion" id="bouton" value="connexion">
        <a href="login.php">Creat new account</a>
    </form> 
    <?php include("sigin_back.php");?>
</body>
</html>