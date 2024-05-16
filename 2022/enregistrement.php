<?php 
$cnx = mysqli_connect('localhost','root','','2022');
if (!isset($_POST['np'])||!isset($_POST['nom'])||!isset($_POST['prenom'])||!isset($_POST['nem'])) die("errrtteu") ;

$np = $_POST["np"];
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$nem = $_POST["nem"];

$res = mysqli_query($cnx,"SELECT * from testeur where numpermis = '$np' ");
if(mysqli_num_rows($res)!=0){
    die("deja existant");
}
$res1 = mysqli_query($cnx,"INSERT into testeur values ('$np','$nom' , '$prenom' , '$nem') ");

?>