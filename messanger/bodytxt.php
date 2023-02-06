<?php
$nbrMsg=$connection ->prepare("SELECT * FROM text ORDER BY rang ASC");
$nbrMsg->execute();
$txtMsg=$nbrMsg->fetchAll();
$tout=count($txtMsg);
for($i=0;$i<$tout;$i++){
    ?>
        <div class=<?='"'.$txtMsg[$i]["prenom"].'"'?> > <?=$txtMsg[$i]["msg"]?> </div>
    <?php
}
?>