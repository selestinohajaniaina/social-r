<?php
//envoi message
if(isset($_POST["send"])){

    $selection=$connection ->prepare("SELECT * FROM mp WHERE user= :mp_membre");
    $selection->execute([
    "mp_membre"=>$user,
]);
$fetch=$selection->fetch();
$id=$fetch["num_mp"];

    $message=$_POST["msg"];
    $new_text = $texte . "//" . $prenom . "_" . $message;
    $insertion = $connection -> prepare("UPDATE mp set texte= :new_txt WHERE num_mp= :id");
    $insertion->execute([
        "new_txt"=>$new_text,
        "id"=>$id
    ]);
    $idUser=$_GET["idUser"];
    $idFriend=$_GET["idFriend"];
    header("location:index.php?idUser=$idUser&idFriend=$idFriend");
}
?>