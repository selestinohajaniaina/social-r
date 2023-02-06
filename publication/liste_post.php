<?php
$idUser=$_GET["iduser"];


//selection de publication
$selection = $connection -> prepare("SELECT * FROM publication ORDER BY idpost DESC");
$selection->execute();
$fetch=$selection->fetchAll();
$listeNbr = count($fetch);

//list of all post include at <class=table>
for($i=0;$i<$listeNbr;$i++){
    ?>
<div class="contenaire">
    <div class="table">
        <?php
            $post_id=$fetch[$i]["idpost"];
            $post_img=$fetch[$i]["image"];
            $post_legende=$fetch[$i]["legende"];
            $post_id_auteur=$fetch[$i]["auteur"];

            //la cache du bouton message
            if($idUser==$post_id_auteur){
                ?>
                <style>
                    <?=".msg$post_id_auteur"?>{
                        visibility:hidden;
                    }
                </style>
                <?php
            }
            
            //selection d'utilisateur du compte
            $selecUser=$connection ->prepare("SELECT * FROM information WHERE id=$post_id_auteur");
            $selecUser->execute();
            $fetchUser=$selecUser->fetch();
            $imgUserPost = $fetchUser["photo"];
            $nameUserPost = $fetchUser["nom"];
            $surnameserPost = $fetchUser["prenom"];

            
            ?>
            <!-- pdp + nom + prenom de proprietaire -->
            <div class="th">
            <img src="../<?=$imgUserPost?>" id="PDP"/>
            <h5><?=$nameUserPost." ".$surnameserPost?></h5>
            <!-- image message vers privé -->
            <a href="../mp/index.php?idUser=<?=$idUser?>&idFriend=<?=$post_id_auteur?>" class="<?="msg$post_id_auteur"?>"><img src="../msg2.png" id="msg"/></a>
            </div>
            <!-- image + legende du publication -->
            <div class="td">
            <p class="legende"><?=$post_legende?></p>
            <img src="../<?=$post_img?>" title="<?=$post_id?>"/>
            
            </div>
            <!-- barre du commentaire -->
            <div class="comments">
                <form method="post">
                <input type="text" name="commentaire" id="comentaire" placeholder="envoyer votre comentaire..." autocomplete="off" required>
                <input type="submit" value="" name="valider" style="visibility:hidden;">
                </form>
                <?php
                $newID=$post_id;
                if(isset($_POST["valider"])){
                    $commentaire=$_POST["commentaire"];
                    header("location:../commentaire/index.php?iduser=$idUser&rangpost=$newID&coms=$commentaire");
                }
                ?>
            </div>
</div>
</div>
<?php
}
?>