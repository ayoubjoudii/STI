
<?php
if(!isset($_POST["list"])) die ("erreur");
$id = $_POST["list"];
require("connexion.php");
$res = mysqli_query($cnx,"SELECT nom,prenom,nc,ns from eleves where id = $id" );
$t = mysqli_fetch_array($res);
$nom = $t["nom"].$t["prenom"];
$nc= $t["nc"];
$ns = $t["ns"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="all.css">
</head>
<body>
    <fieldset>
        <form action="modiff.php" method="post">
            <div>
                <input type="text" value="<?php echo $id?>" name="<?php echo $id?>" disabled>
                <label for="">Nom Prenom:</label>
                <input type="text" name="nom" id="nom" value ="<?php echo $nom ?>" disabled >
            </div>
            <div>
                <label for="">note de controle:</label>
                <input type="text" name="<?php echo $nc?>" value="<?php echo $nc?>" id="nc">
            </div>
            <div>
                <label for="">note de synthese:</label>
                <input type="text" name="<?php echo $ns ?>" value="<?php echo $ns ?>" id="ns">
            </div>
            <input type="submit" value="Modifier">
            <a href="modifier.php">retourner</a>
        </form>
    </fieldset>
    <script src="controle.js"></script> 
</body>
</html>
 