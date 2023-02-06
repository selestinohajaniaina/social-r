<?php
include("bdd.php");
if(isset($_POST["connexion"])){
    if(!empty($_POST["prenom"]) && !empty($_POST["password"])){
        $pass_hash = password_hash($_POST["password"],PASSWORD_BCRYPT);
        
        $prenom =$_POST["prenom"];
    $selection = $connection -> prepare("SELECT * FROM information WHERE prenom= :prenom");
    $selection->execute([
        "prenom"=>$prenom
    ]);
    $nb_select=$selection->rowCount();
    if($nb_select>0){
        $fetch=$selection->fetch();
        $passe = $fetch["passe"];
        $id=$fetch["id"];
        if(password_verify($passe,$pass_hash)){
            header("location:publication/index.php?prenom=$prenom&iduser=$id");
        }
        else{
            ?>
            <script>
                var affichage = document.getElementById("erreur");
                affichage.innerHTML = "mot de pass incorrect";
            </script>
            <?php  
        }
    }
    else{
        ?>
        <script>
            var affichage = document.getElementById("erreur");
            affichage.innerHTML = "compte introuvable";
        </script>
        <?php
    }
    }
    else{
        ?>
        <script>
            var affichage = document.getElementById("erreur");
            affichage.innerHTML = "error of information";
        </script>
        <?php
    }
}
?>