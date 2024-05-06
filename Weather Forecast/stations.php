<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <h1>Stations Meteorologiques</h1>
    <a href="ajoutstation.html">Nouvelle Station</a> <br>
    Nombre de stations: <?php 
            require("connexion.php");
            $res = mysqli_query($cnx,"SELECT count(numstation) from station ");
            $row = mysqli_fetch_row($res);
            echo $row[0];
    ?> 
    <table>
        <tr>
            <th>Numero Station</th>
            <th>Nom</th>
            <th>Ville</th>
        </tr>
            <?php 
                $res = mysqli_query($cnx,"SELECT numstation , nomst , villest from station");
                while ($t = mysqli_fetch_array($res)){
                    echo '<tr> <td>'.$t["numstation"].'</td>';
                    echo '<td>'.$t["nomst"].'</td>';
                    echo '<td>'.$t["villest"].'</td> </tr>';
                };
            ?>
    </table>
    
    
</body>
</html>