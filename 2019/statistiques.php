<?php
$cnx = mysqli_connect('localhost','root','','2019');
if(!isset($_POST["sond"])) die("erreur valuers");

$sond = $_POST['sond'];
$res = mysqli_query($cnx,"select * from sondage where nums = '$sond'");
if(mysqli_num_rows($res)==0)die('Sondage non encore lancé! ');
else{
    $res = mysqli_query($cnx,"select * from reponse where nums = '$sond'");
    if(mysqli_num_rows($res)==0)die("aucune participation enregistres pour le moment");
    else{
        $rest = mysqli_query($cnx,"select count(distinct p.idparticipant) from reponse r , participant p  where p.idparticipant = r.idparticipant and nums = '$sond'");
        $total = mysqli_fetch_array($rest)[0];
        $resf = mysqli_query($cnx,"select count(distinct p.idparticipant) from reponse r , participant p  where p.idparticipant = r.idparticipant and nums = '$sond' and p.genre = 'F'");
        $totalf = mysqli_fetch_array($resf)[0];
        $resm = mysqli_query($cnx,"select count(distinct p.idparticipant) from reponse r , participant p  where p.idparticipant = r.idparticipant and nums = '$sond' and p.genre = 'M'");
        $totalm = mysqli_fetch_array($resm)[0];
        echo '<!DOCTYPE html>
        <html lang="en">
        <head>
        <link rel="stylesheet" href="css.css">
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <h1 style="text-align: center;">Statistiques du sondage</h1>
            <h2>Nombres total de participants : '.$total.'</h2>  
            <h2>Nombres des femmes : '.$totalf.'</h2> 
            <h2>Nombres des hommes : '.$totalm.'</h2> 
            <table>
                <tr>
                    <th></th>
                    <th></th>
                    <th colspan="3">Pourcentages</th>
                </tr>
                <tr>
                    <th>N°</th>
                    <th>Question</th>
                    <th>"Oui"</th>
                    <th>"Non"</th>
                    <th>"Sans avis"</th>
                </tr>';
                $resq = mysqli_query($cnx,"select * from question where nums= '$sond'");
                while($t=mysqli_fetch_array($resq)){
                    $numq = $t['numq'];
                    echo '<tr><td>'.$numq.'</td>';
                    echo '<td>'.$t["contenu"].'</td>';
                    $reso = mysqli_query($cnx,"select count(*) from reponse where rep = 'O' and numq = '$numq'");
                    $no = mysqli_fetch_array($reso)[0];
                    $no = ((float)$no )/$total * 100;
                    $resn = mysqli_query($cnx,"select count(*) from reponse where rep = 'N' and numq = '$numq'");
                    $nn = mysqli_fetch_array($resn)[0];
                    $nn = ((float)$nn) /$total * 100;
                    $ress = mysqli_query($cnx,"select count(*) from reponse where rep = 'S' and numq = '$numq'");
                    $ns = mysqli_fetch_array($ress)[0];
                    $ns = ((float)$ns) /$total * 100;
                    echo '<td>'.$no.'%</td>';
                    echo '<td>'.$nn.'%</td>';
                    echo '<td>'.$ns.'%</td>';

                }
                
            echo'</table>
        </body>
        </html>';

    }
}

?>