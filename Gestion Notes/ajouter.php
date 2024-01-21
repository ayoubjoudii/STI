<?php 
require("connexion.php");
$id = $_POST["ID"];
$nmprnm = trim($_POST["nom"]);
$nom = substr($nmprnm,0,strpos($nmprnm, " "));
$prenom = substr($nmprnm,strpos($nmprnm, " ")+1);
$nc = $_POST["nc"];
$ns = $_POST["ns"];
echo $id.$nmprnm.$nom.$prenom.$nc.$ns;
$req = "INSERT INTO eleves(id, nom, prenom, nc, ns) values($id,$nom,$prenom,$nc,$ns)";
$res = mysqli_query($cn,$req);
if ($res){echo "eleve ajoute ;)";}
else {echo "eleve deja existant";}

?>