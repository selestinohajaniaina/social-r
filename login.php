<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include("login_style.php") ?>
</head>
<body>
<form method="post" enctype="multipart/form-data">
<table cellpadding="13" id="tableau">
  <tr>  <th><h1>Login</h1></th></tr>
      <tr>
        <th><input type="text" name="nom" id="nom"placeholder="Nom" autocomplete=off required/></th>
      </tr>
      <tr>
        <th><input type="text" name="prenom" id="prenom"placeholder="Prenom" autocomplete=off required/></th>
      </tr>
      <tr>
        <th><input type="password" name="password" id="password" placeholder="Mot de passe" required></th>
      </tr>
      <tr>
        <th><input type="password" name="confirmation" id="password" placeholder="Confimation de clé" required></th>
      </tr>
      <tr>
        <th><input type="submit" name="save" id="save" value="Enregistrer"></th>
      </tr>
      <tr>
        <th><input type="file" name="photo" id="photo"/></th>
      </tr>
      <tr><th><span id="affiche"></span></th></tr>
      <tr><th><a href="sigin.php">I have account</a></th></tr>
</table>
</form>
    <?php include("login_back.php"); ?>
</body>
</html>