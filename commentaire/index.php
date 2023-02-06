<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="retour">
        <form method="post">
        <input type="submit" value="< retour" name="retour" id="retour"/>
        </form>
    </div>
    <?php 
    include("../bdd.php");
    $idUser=$_GET["iduser"];
    include("index_back.php");
    include("style.php");
    if(isset($_POST["retour"])){
        header("location:../publication/index.php?iduser=$idUser");
    }
?>
</body>
</html>