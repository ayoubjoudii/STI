<?php 
require("connexion.php");
$id = $_POST["liste"];
$req = "DELETE FROM eleves WHERE id = $id";
$res = mysqli_query($cn,$req) or die("erreur de supprimer");
if ($res) echo "supprime avec succes" 
?>