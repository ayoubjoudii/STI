<?php 
$cnx = mysqli_connect("localhost",'root','','2023');
if (!isset($_POST['codehab']) || !isset($_POST['cin']) || !isset($_POST['duree']));
$codehab = $_POST["codehab"];
$cin = $_POST["cin"];
$duree = $_POST["duree"];

$res = mysqli_query($cnx,"select * from habit where codehab = $codehab");
if (mysqli_num_rows($res)==0){
    die("Erreur : habit inexistant");
}
else {
    $res1 = mysqli_query($cnx,"select disponible from habit where codehab = $codehab");
    $t = mysqli_fetch_array($res);
    if ($t[0] == 'N') die("Erreur habit deja loue");
    else {
        $res2 = mysqli_query($cnx,"select cin from client where cin = $cin");
        if (mysqli_num_rows($res2)==0) die("client inexistant");
        else{
            $dat  = date('Y-m-d H:i:s');
            $resw = mysqli_query($cnx,"UPDATE habit set disponible = 'N' WHERE codehab = $codehab ");
            $res3 = mysqli_query($cnx,"INSERT into location values('$dat','$codehab','$cin','$duree') ") ;
            if ($res3) echo "operation effectue avec succes ";
        }

    }

}
?>