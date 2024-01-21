<?php 
$cn = mysqli_connect("localhost","root") or die("erreur connexion");
mysqli_select_db($cn,"gestion_notes") or die("erreur db");


?>