<div class="profil_">
    <h4><u>Profils</u></h4>
    <img src="../<?php

    $selection=$connection ->prepare("SELECT * FROM information WHERE id= :pdp");
    $selection->execute([
        "pdp"=>$_GET["idUser"]
    ]);
    $fetch=$selection->fetch();
    echo($fetch["photo"]);
    ?>" id="image_profil"/>
    <span id="name"><b><?=$fetch["nom"]." ".$fetch["prenom"];?></b></span><br>
    <span><i>You are active now :)</i></span>
</div>
<style>
    .profil_{
        position: fixed;
        right:10%;
        top:10%;
        color:#fff;
        display:flex;
        flex-direction:column;
        align-items:center;
    }
    #image_profil{
        max-width:100px;
    }
    #name{
        font-family:cooper;
        font-size:15pt;
        color:#005fcb;
    }
</style>