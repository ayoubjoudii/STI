<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="tous.css">
</head>
<body>
    <table>
        
        <tr><th>Nom et Prenom</th><th>Moyenne</th></tr>
        <?php 
        require("connexion.php");
        $req = "SELECT * FROM eleves";
        $res = mysqli_query($cn,$req) or die("erreur select");
        while ($l = mysqli_fetch_array($res)){
            echo '<tr><td>'.$l["nom"]." ".$l["prenom"].'</td>';
            echo '<td>'.(($l["nc"]+$l["ns"]*2)/3).'</td></tr>';
        }
        ?>
        
    </table>
</body>
</html>