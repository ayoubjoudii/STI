<?php 
require("connexion.php");
$id = $_POST["id"];
$nc = $_POST["nc"];
$ns = $_POST["ns"];
$res = mysqli_query($cnx,"UPDATE eleves set nc = $nc,ns = $ns  where id = $id ") or die("errreu insertion");

?>