<?php include("../bdd.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PUBLICATION</title>
</head>
<body>
    <form method="post">
        <input type="submit" value="creer" name="creatpost" id="creatpost"/>
    </form>
    <?php include("post.php"); ?>
    <?php include("index_back.php"); ?>
    <?php include("liste_post.php"); ?>
    <?php include("style.php"); ?>
</body>
</html>