<?php
$selection=$connection ->prepare("SELECT * FROM information");
$id=$_GET["iduser"];
$selection -> execute();
            $liste = $selection->fetchAll();
            $tout = count($liste);
            ?>
<table class="list_membre">
            <?php
            for($i=0;$i<$tout;$i++){
                ?>
                <tr id="prod">
                    <td class="td"><img src="../<?php echo $liste[$i]["photo"]; ?> " id="image_profile"/></td>
                    <td class="td"><?php echo $liste[$i]["nom"]; ?></td>
                    <td class="td"><?php echo $liste[$i]["prenom"]; ?></td>
                    <td class="td"><a href="../mp/index.php?prenom=<?=$_GET["prenom"];?>&friend=<?=$liste[$i]["prenom"];?>&photo=<?=$liste[$i]["photo"];?>&iduser=<?=$id;?>"><img src="../msg2.png" id="msg"/></a></td>
                </tr>
                <?php
            }
            ?>
            </table>