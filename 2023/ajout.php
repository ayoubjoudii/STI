<?php 
$cnx = mysqli_connect('localhost','root','','2023');
if (!isset($_POST['sel']) || !isset($_POST['t']) || !isset($_POST['desc']) || !isset($_POST['prx']));
$choix = $_POST["sel"];
$t = $_POST["t"];
$desc = $_POST["desc"];
$prx  = $_POST["prx"];

$res0 = mysqli_query($cnx,"select * from categorie where codecat = $choix");
if (mysqli_num_rows($res0) == 0){
    $res = mysqli_query($cnx," INSERT into categorie(codecat) values('$choix')");
}
$res1 = mysqli_query($cnx,"INSERT into habit(description,taille,prix,codecat) values('$desc','$t','$prx','$choix')");
echo mysqli_error($cnx); 

?>