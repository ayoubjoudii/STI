<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <table>
        <tr>
            <th>Modele</th>
            <th>Securite</th>
            <th>Conduite</th>
            <th>confort</th>
            <th>Nbr Tests</th>
        </tr>
        
            <?php 
            $cnx = mysqli_connect('localhost','root','','2022');
            $res = mysqli_query($cnx,"SELECT libelle , AVG(securite) as moys , AVG(conduite) as moyc , AVG(confort) as moyf , COUNT(e.idmodele) as nbr FROM `evaluation` e, `modelvoiture` m  WHERE e.idmodele = m.idmodele  GROUP BY libelle");
            while ($t= mysqli_fetch_array($res)){
                echo '<tr><td>'.$t['libelle'].'</td>';
                echo '<td>'.$t['moys'].'</td>';
                echo '<td>'.$t['moyc'].'</td>';
                echo '<td>'.$t['moyf'].'</td>';
                echo '<td>'.$t['nbr'].'</td></tr>';
            }
            ?>
        
    </table>
</body>
</html>