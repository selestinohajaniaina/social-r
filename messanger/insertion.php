<?php
$selection = $connection -> prepare("SELECT * FROM information WHERE id=:rang");
$selection->execute([
    "rang"=>$_GET["rang"]
]);
$fetch=$selection->fetch();
$prenom = $fetch["prenom"];
$photo = $fetch["photo"];
if(isset($_POST["send"])){
        $msg=$_POST["message"];
        if($msg!=0){
           ?>
           <script>alert("veillez remplir");</script>
           <?php
        }else{
            $inser = $connection ->prepare("INSERT INTO text(prenom,msg) VALUES(:user , :userMessage)");
            $inser ->execute([
                "user"=>$prenom,
                "userMessage"=>$msg
            ]);
            $msg =0;
        }
}
?>
