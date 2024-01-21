<?php 
require("connexion.php");
if(!isset($_POST['ID']) || !isset($_POST['nom']) || (!isset($_POST['ns'])) || !isset($_POST['nc']) )die ("variable n'existe pas");
$id = $_POST["ID"];
$nmprnm = trim($_POST["nom"]);
$nom = substr($nmprnm,0,strpos($nmprnm, " "));
$prenom = substr($nmprnm,strpos($nmprnm, " ")+1);
$nc = $_POST["nc"];
$ns = $_POST["ns"];
echo "$id $nmprnm $nom $prenom $nc $ns";
$req0 = "SELECT * FROM eleves WHERE id = $id ";
$res0 = mysqli_query($cn,$req0);
if (mysqli_num_rows($res0)!=0) {
echo "eleve deja existant";
}
else {$req = "INSERT INTO eleves(id, nom, prenom, nc, ns) values($id,$nom,$prenom,$nc,$ns)";
$res = mysqli_query($cn,$req);
if ($res){echo "eleve ajoute ;)";} }


?>