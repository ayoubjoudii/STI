<?php
require "connexion.php";
$codeH=$_POST["codeH"];
$cinClient=$_POST["cinClient"];
$dureeLoc=$_POST["dureeLoc"];
$req="select * from habit where codeHab='$codeH'";
$rep=mysql_query($req)or die (mysql_error());
if(mysql_num_rows($rep)==0) echo"inexistant";
else{
    $t=mysql_fetch_array($rep);
    $dis=$t["disponible"];
    if($dis=='N') echo"déjà loué";
    else{
        $req="select * from client where cin='$cinClient'";
        $rep=mysql_query($req)or die (mysql_error());
        if(mysql_num_rows($rep)==0) echo"client inexistant";
        else{
            $d=date('Y-m-d');
            $req="insert into location values('$d','$codeH','$cinClient','$dureeLoc')";
            $rep=mysql_query($req)or die (mysql_error());
            if (mysql_affected_rows()!=-1)echo"location succes!!";
            $req="update habit set disponible ='N' where codeHab='$codeH'";
            $rep=mysql_query($req)or die (mysql_error());
            if (mysql_affected_rows()!=-1)echo"maj succes!!"; 

        } 
    } 
    mysql_close();  
}
?>