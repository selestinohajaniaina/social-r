<?php
$id_uses_account=$_GET["idUser"];
$id_uses_friend=$_GET["idFriend"];

//selection de mon information (user)
$uses_account_select = $connection->prepare("SELECT * FROM information WHERE id= $id_uses_account");
$uses_account_select->execute();
$userFecth = $uses_account_select->fetch();
$userPrenom=$userFecth["prenom"];

//selection d'info celle d'amis (friend)
$uses_friend_select = $connection->prepare("SELECT * FROM information WHERE id= $id_uses_friend");
$uses_friend_select->execute();
$friendFecth = $uses_friend_select->fetch();
$friendPrenom=$friendFecth["prenom"];
$friendPhoto=$friendFecth["photo"];


//changement de variable
$prenom=$userPrenom;
$friend=$friendPrenom;
$friend_photo=$friendPhoto;
$iduser=$id_uses_account;
$user=$prenom."//".$friend;
$useUser=$friend."//".$prenom;
//premier selection
$selection=$connection ->prepare("SELECT * FROM mp WHERE user= :mp_membre");
$selection->execute([
    "mp_membre"=>$user,
]);
$liste = $selection->fetchAll();
//deuxieme selection
if(empty($liste)){
    $selection=$connection ->prepare("SELECT * FROM mp WHERE user= :mp_mbr");
$selection->execute([
    "mp_mbr"=>$useUser,
]);
$liste_ = $selection->fetchAll();
$user=$useUser;
if(empty($liste_)){
    $insertion=$connection ->prepare("INSERT INTO mp (user,texte) VALUES (:user_name , :user_text)");
    $insertion->execute([
        "user_name"=>$user,
        "user_text"=>""
    ]);
}

}
//message
$userInfo=$connection ->prepare("SELECT * FROM mp WHERE user= :mp_membre");
$userInfo->execute([
    "mp_membre"=>$user,
]);
$fetch=$userInfo->fetch();
$texte=$fetch["texte"];
$id=$fetch["num_mp"];
if(!empty($texte)){
    $msgText=explode("//",$texte);
    $nbr=count($msgText);
    for($i=1;$i<$nbr;$i++){
        $prenom_txt=explode("_",$msgText[$i]);
        echo("<div id='".$prenom_txt[0]."'><span>".$prenom_txt[1]."</span></div>");
    }
}else{
    echo "<h6 style='color:#fff;'><i>demarer votre premier message!</i></h6>";
}

?>
<style>
    .body <?="#$prenom";?>{
        position:relative;
        margin:1px;
        padding-bottom:22px;
    }
    .body><?="#$prenom";?> span{
        background:orange;
        position:absolute;
        right:0;
        width:fit-content;
        padding:2px 2px 2px 3px;
        border-radius:8px 5px 0 8px;
    }
    .body <?="#$friend";?>{
        background:white;
        margin:1px;
        padding:2px;
        width:fit-content;
        border-radius:5px 8px 8px 0;
    }
</style>