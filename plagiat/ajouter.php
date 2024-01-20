<?php

$cnx = mysqli_connect("localhost", "root", "", "Sources") or die('problem');
if(!isset($_POST['source']) || !isset($_POST['texte'])) die ("variable n'existe pas");
$source = $_POST['source'];
$texte = $_POST['texte'];
$date_cre = date("Y-m-d");

$reqInsert = "INSERT INTO ORIGINE (texte, source, date_cre) VALUES ('$texte', '$source', '$date_cre')";
$insert = mysqli_query($cnx, $reqInsert) or die("Erreur: " . mysqli_error($cnx));

echo "inseree";


?>
