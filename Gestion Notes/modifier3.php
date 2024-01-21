<?php 
require("connexion.php");
$id = $_POST["idd"];    
$nc = $_POST["nc"];
$ns = $_POST["ns"];
$req1 = "UPDATE eleves SET nc = $nc , ns = $ns where id = $id";
$res2 = mysqli_query($cn,$req1) or die("erreur mettre a jour");
if ($res2) echo "success";
else echo("erreur changer")


?>