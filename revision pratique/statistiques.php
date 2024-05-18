
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mesStyles.css">
</head>
<body>
    <table>
        <tr>
            <th>Nom Station</th>
            <th>Nombre de seismes</th>
            <th>Magnitude Maximale</th>
        </tr>
        <?php
        $cnx = mysqli_connect("localhost",'root','','revprat');
        $restat = mysqli_query($cnx,"select nomsta , count(dateseisme) , max(magnitude) from seisme s , station st where s.codesta = st.codesta group by st.codesta ");
        while($t = mysqli_fetch_array($restat)){
            echo '<tr> <td>'.$t[0].'</td> <td>'.$t[1].'</td> <td>'.$t[2].'</td> </tr>';
        }
?>
    </table>    
</body>
</html>