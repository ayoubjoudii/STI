<?php
$cnx = mysqli_connect("localhost",'root','','revprat');
$sta = strtoupper($_POST["stat"]);
$ann = $_POST["ann"];
$stat = mysqli_fetch_array(mysqli_query($cnx,"select codesta from station where nomsta = '$sta'"))[0];
$res0 = mysqli_query($cnx,"select * from seisme where codesta = '$stat' and YEAR(dateseisme) ='$ann' ");
if(mysqli_num_rows($res0) == 0){
    echo 'aucune activite enre';
}
else{
    echo '<table>
    <tr>
        <th>Date et heure </th>
        <th>Magnitude </th>
        <th>nom region </th>
    </tr>
</table>';
while($t = mysqli_fetch_array($res0)){
    $nr= $t["numreg"];
    $res = mysqli_query($cnx,"select nomreg from region  where numreg = '$nr'  ");
    $nomreg = mysqli_fetch_array($res)[0];
    echo '<tr> <td>'.$t["dateseisme"].'</td>';
    echo '<td>'.$t["magnitude"].'</td>';
    echo '<td>'.$nr.'</td> </tr>';
}    
}

?>
