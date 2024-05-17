<?php
require "connexion.php";
$cat=$_POST["cat"];
$des=$_POST["des"];
$taille=$_POST["taille"];
$prix=$_POST["prix"];
$req="insert into habit 
    values('','$des','$taille','$prix','D', '$cat')";
$rep=mysql_query($req)or die (mysql_error());
if (mysql_affected_rows()!=-1)echo"succes!!";
mysql_close();
?>
