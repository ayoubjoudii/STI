<?php
$cnx=mysqli_connect('localhost','root','','2020');
if (!isset($_POST["nom"]) || !isset($_POST["prenom"]) || !isset($_POST["tel"]) ||!isset($_POST["add"]) || !isset($_POST["mdp"]) ) die("edrrreur");

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$tel = $_POST["tel"];
$add= $_POST["add"];
$mdp = $_POST["mdp"];

$res = mysqli_query($cnx,"select * from client where nom = '$nom' and prenom = '$prenom' and tel = '$tel'");
if (mysqli_num_rows($res) != 0){
    die("client deja inscrits");
}
$res1 = mysqli_query($cnx,"select * from client where (nom <>'$nom' or prenom <> '$prenom') and tel = '$tel'");
if (mysqli_num_rows($res1) != 0){
    die("nom prenom eronee");
}
else{
    $res0 = mysqli_query($cnx,"insert into client values('$tel','$nom','$prenom','$add','$mdp') ");
    if ($res0) die("success");
}
?>