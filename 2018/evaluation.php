<?php
$cnx = mysqli_connect('localhost','root','','2018');
if(!isset($_POST["hot"]) || !isset($_POST["a"]) || !isset($_POST["r"]) ) die("erreur value");
if(!isset($_POST["e"]) || !isset($_POST["e1"]) || !isset($_POST["e2"])) {
    $notee = 0;
}
else{
    $notee = $_POST["e"] + $_POST["e1"] + $_POST["e2"];
}
$dat = date('Y-m-d');
$id = $_POST["hot"];
$notea = $_POST["a"];
$noter = $_POST["r"];
$res0 = mysqli_query($cnx,"select * from evaluation where idhotel = '$id' and dateeval = '$dat' ");
if(mysqli_num_rows($res0)!=0)echo("cet hotel deja existe");
else{
    if(mysqli_query($cnx,"insert into evaluation values('$dat','$id','$notea','$noter','$notee')")) echo("insertion succes");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <table>
        <tr>
            <th>N°</th>
            <th>Hotel</th>
            <th>Accueil</th>
            <th>Restauration</th>
            <th>Extra</th>
        </tr>
        
            <?php 
            $res = mysqli_query($cnx,"select nomhotel , AVG(noteaccueil),AVG(noterest),AVG(noteextra) from evaluation e,hotel h where h.idhotel = e.idhotel group by e.idhotel");
            $i = 0;
            while($t = mysqli_fetch_array($res)){
                $i = $i +1;
                echo '<tr> <td>'.$i.'</td>';
                echo '<td>'.$t[0].'</td>';
                echo '<td>'.$t[1].'</td>';
                echo '<td>'.$t[2].'</td>';
                echo '<td>'.$t[3].'</td> </tr>';
            }
?>
        </tr>
    </table>
</body>
</html>