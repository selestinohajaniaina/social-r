<?php
    include("bdd.php");
    
    $prenom =$_POST["prenom"];
    $tableau = $connection -> prepare("SELECT * FROM information WHERE prenom= :prenom");
    $tableau->execute([
        "prenom"=>$prenom
    ]);
    $fetch = $tableau ->fetch();
    $passe=$fetch("passe");
    echo $passe;
    ?>