<?php 
require("connexion.php");
if(!isset($_POST["num"]) || !isset($_POST["ville"]) || !isset($_POST["nom"])) die("erreur valuers vidse");
$num = $_POST["num"];
$nom = $_POST["nom"];
$ville = $_POST["ville"];
$res = mysqli_query($cnx,"SELECT * from station where nomst = '$nom'");
if (mysqli_num_rows($res) != 0) die("station deja existantes");
$res1 = mysqli_query($cnx,"SELECT * from station where numstation = '$num'");
if (mysqli_num_rows($res1) != 0){
    echo ("numero station deja existantes");
    if(!isset($_POST["upd"])) die("mise a jour desactive");
    else {
        $res2 = mysqli_query($cnx,"UPDATE station set nomst = '$nom'  , villest = '$ville' where numstation = '$num' ");
        if($res2) echo "station mise a jour success ";
    }
    }
else {
    $res3 = mysqli_query($cnx,"INSERT into station(numstation , nomst , villest) values ('$num','$nom','$ville') ");
    if($res3) echo "nouvelle insertion ajoutee";
}


?>