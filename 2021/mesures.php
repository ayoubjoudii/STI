<?php 
$cnx = mysqli_connect('localhost','root','','2021');
if ( !isset($_POST['stat']) || !isset($_POST['sais']) || !isset($_POST['a']) || !isset($_POST['temp']) || !isset($_POST['pluie']) ) die("erreur");
$stat = $_POST["stat"];
$sais = $_POST["sais"];
$annee = $_POST["a"];
$temp = $_POST["temp"];
$pluie = $_POST["pluie"];


$res0 = mysqli_query($cnx,"select idstation from station where nom = '$stat'");
$id = mysqli_fetch_array($res0)[0];
$res = mysqli_query($cnx , "SELECT * from mesure where idstation = '$id' and annee = '$annee' and saison = '$sais' ");
if(mysqli_num_rows($res) != 0){
    die("Mesures deja enregistres");
}
$res1 = mysqli_query($cnx,"insert into mesure values('$id','$annee','$sais','$temp','$pluie') ");
if($res1) die("Ajout effectué");
?> 