<?php 
if (!isset($_POST["id"]) || !isset($_POST["nom"]) || !isset($_POST["nc"]) || !isset($_POST["ns"]) ) die("nexiste pas ");
$id = $_POST["id"];
$poses = strpos($_POST["nom"]," ");
$nom = substr($_POST["nom"],0,$poses);
$prenom = substr($_POST["nom"],$poses);
$nc = $_POST["nc"];
$ns = $_POST["ns"];
require("connexion.php");
$res1 = mysqli_query($cnx,"SELECT * from eleves where id = $id");
if (mysqli_num_rows($res1) != 0) die ("eleves deja ajoutee");
else{
    $req = "INSERT INTO eleves values('$id','$nom','$prenom','$nc','$ns')";
    $res = mysqli_query($cnx,$req);
}
if($res) echo "eleve ajoutee sucees";
?>