<?php 
require("connexion.php");
$id = $_POST["liste"];
$req = "SELECT nom, prenom, nc, ns from eleves where id = $id"; 
$res = mysqli_query($cn,$req) or die("erreur req");
while ($l = mysqli_fetch_array($res)){
    
    $nom = "$l[0] $l[1]";
$nc = $l[2];
$ns = $l[3];
} 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="tous.css">
</head>
<body>
    <h1>Modifier les Notes:</h1>
    <fieldset>
        <legend>Les Notes a modifier:</legend>
        <form action="modifier3.php" method = "post" onsubmit="return decimal()">
        <label for="">ID selectionne : </label><select name="idd" id="">
            
            <?php echo '<option  value="'.$id.'">'.$id.'</option>' ?></select>
            <div><label for="nom">Nom Prenom: </label> <input disabled type="text" value="<?php echo $nom ?>" name="nom" id="nom"></div>
            <div><label for="nc">Note de Controle: </label> <input  type="text"  value="<?php echo $nc ?>" name="nc" id="nc"></div>
            <div><label for="ns">Note de synthese: </label> <input  type="text" value="<?php echo $ns ?>"  name="ns" id="ns"></div>
            <input type="submit" value="modifier">
            <button><a href="modifier.php">retourner</a></button>
        </form>
    </fieldset>
    <script src="controle.js">
    </script>
        </body>
        </html>