<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <?php 
        $cnx = mysqli_connect('localhost','root','','2021');
        $nom = $_POST["stat1"];
        echo 'Station : '.$nom;
        ?>
    <table>
        <tr>
            <th>Saison</th>
            <th>Annee</th>
            <th>Mesure enregistres</th>

        </tr>
        <?php 
        $choix = $_POST["t"];
        $res0 = mysqli_query($cnx,"select idstation from station where nom = '$nom' ");
        $t = mysqli_fetch_array($res0);
        $id = $t["idstation"];
        if ($choix == "1"){
            $res = mysqli_query($cnx,"select saison,annee,temperature from mesure where idstation = $id");
            while($t1 = mysqli_fetch_array($res)){
                echo '<tr> <td>'.$t1["saison"].'</td>';
                echo '<td>'.$t1["annee"].'</td>';
                echo '<td>'.$t1["temperature"].'</td> </tr>';

            }
            
        }
        if ($choix == "2"){
            $res = mysqli_query($cnx,"select saison,annee,pluie from mesure where idstation = $id");
            while($t1 = mysqli_fetch_array($res)){
                echo '<tr> <td>'.$t1["saison"].'</td>';
                echo '<td>'.$t1["annee"].'</td>';
                echo '<td>'.$t1["pluie"].'</td> </tr>';

            }

        }
        $t1 = mysqli_fetch_array($res);


                ?>
    </table>
</body>
</html>