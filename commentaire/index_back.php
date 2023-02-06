<?php
$rang_post = $_GET["rangpost"];
$my_coms = $_GET["coms"];

//selection de publication
$selection = $connection -> prepare("SELECT * FROM publication WHERE idpost= $rang_post");
$selection->execute();
$fetch = $selection->fetch();
$post_img=$fetch["image"];
$post_legende=$fetch["legende"];
$post_id_auteur=$fetch["auteur"];
$post_coms=$fetch["coms"];
if($post_coms==""){
    $post_coms="_";
}
$post_coms=$post_coms."_".$my_coms;
?>

<!-- //la publication selectionné -->
<div class="contenaire">
    <div class="table">
        <?php
            
            //selection d'utilisateur du compte
            $selecUser=$connection ->prepare("SELECT * FROM information WHERE id=$post_id_auteur");
            $selecUser->execute();
            $fetchUser=$selecUser->fetch();
            $imgUserPost = $fetchUser["photo"];
            $nameUserPost = $fetchUser["nom"];
            $surnameserPost = $fetchUser["prenom"];

            // echo $nameUserPost;
            ?>
            <!-- pdp + nom + prenom de proprietaire -->
            <div class="th">
            <img src="../<?=$imgUserPost?>" id="PDP"/>
            <h5><?=$nameUserPost." ".$surnameserPost?></h5>
            </div>
            <!-- image + legende du publication -->
            <div class="td">
            <p class="legende"><?=$post_legende?></p>
            <img src="../<?=$post_img?>"/>
            
            </div>
            <!-- barre du commentaire -->
            <div class="comments">
                <?=$post_coms;?>
            </div>
</div>
</div>