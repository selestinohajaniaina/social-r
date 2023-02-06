<?php include("../bdd.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message privé</title>
    <?php
     include("style.php");
     //mon image
     $selectimage=$connection ->prepare("SELECT * FROM information WHERE id= :pdp");
    $selectimage->execute([
        "pdp"=>$_GET["idUser"]
    ]);
    $fetch=$selectimage->fetch();

    //image d'amie
    $idFriend=$_GET["idFriend"];
     $selectimageFriend=$connection ->prepare("SELECT * FROM information WHERE id= $idFriend");
    $selectimageFriend->execute();
    $fetchFriend=$selectimageFriend->fetch();
     ?>
</head>
<body>
    <div class="contener">
    <div class="header">
        <img src="../<?=$fetchFriend["photo"];?>" id="friend_pdp"/>
        <h2><?=$fetchFriend["prenom"];?></h2>
    </div>
    <div class="body">
<?php include("index_back.php"); ?>
    </div>
    <div class="end">
        <form method="post">
        <input type="text" name="msg" id="msg" autocomplet=off placeholder="taper entrer pour envoyer..." required/>
        <input type="submit" value="" name="send"style="position:absolute;visibility:hidden;"/>
        </form>
    </div>
</div>
<?php 
include("insertion.php"); 
include("pdp_user.php");
?>
</body>
</html>