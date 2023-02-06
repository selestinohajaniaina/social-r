<?php
include("bdd.php");
if(isset($_POST["save"])){
    $nom=$_POST["nom"];
    $prenom=strtolower($_POST["prenom"]);
    $passe=$_POST["password"];
    $photo=$_FILES["photo"]["name"];
    if(empty($photo)){
        $photo="icon";
    }
    $upload="picture/".$photo;
   if($_POST["password"] == $_POST["confirmation"]){

    $doublon = $connection -> prepare("SELECT * FROM information WHERE nom = :nom2 AND prenom = :prenom2 AND passe = :age2");
    $doublon -> execute([
        "nom2"=> $_POST["nom"],
        "prenom2"=> $_POST["prenom"],
        "age2"=> $_POST["password"]
    ]);
    $nb_doublon = $doublon ->rowCount();
    if($nb_doublon > 0){
        echo "cette information existe deja";
    }
    else{

    $insertion = $connection -> prepare("INSERT INTO information(nom, prenom, passe,photo) VALUES(:nom , :prenom , :passe, :photoName)");
    $insertion -> execute([
        "nom"=>$nom,
        "prenom"=>$prenom,
        "passe"=>$passe,
        "photoName"=>$upload
    ]);
    move_uploaded_file($_FILES["photo"]["tmp_name"],$upload);
    header("location:sigin.php");
   }
}
   else{
    ?>
    <script>
        var aff = document.POSTElementById("affiche");
        aff.innerHTML="Mot de pass inegale";
        aff.style.color="red";
    </script>
    <?php
   }
}
?>