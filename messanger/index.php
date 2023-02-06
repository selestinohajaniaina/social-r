<?php include("bdd.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>MESSANGER</title>
</head>
<body>
    <?php include("insertion.php"); ?>
    <div class="contener">
        <div class="head">
            <div class="img"><img src="../<?= $photo ?>" id="img" /></div><div class="prenom"><?=$prenom ?></div>
        </div>
        <div class="body">
        <?php 
        include("bodytxt.php");
         ?>
        </div>
        <div class="end">
            <form method="post">
            <input type="text" name="message" id="message" required/>
            <input type="submit" value="" name="send"/>
            </form>
        </div>
        <?php include("alignMsg.php"); ?>
    </div>
</body>
</html>