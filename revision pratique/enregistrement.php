<?php
$cnx = mysqli_connect("localhost",'root','','revprat');
$sta = strtoupper($_POST["cit"]);
$nr = $_POST["nr"];
$ds = $_POST["ds"];
$hs = $_POST["hs"];
$mag = $_POST["mag"];
$lat = $_POST["lat"];
$long = $_POST["long"];

$res = mysqli_query($cnx,"select * from seisme where codesta = '$sta' and numreg = '$nr' and dateseisme ='$ds' ");
if(mysqli_num_rows($res)!=0){
    echo "activite deja enregistre";
}
else{
    $res = mysqli_query($cnx,"select * from region where nomreg = '$nr'");
    if(mysqli_num_rows($res)==0){
        $resq = mysqli_query($cnx,"insert into region(nomreg) values('$nr')");
        $resq = mysqli_query($cnx,"select * from region where nomreg = '$nr'");
        $numreg = mysqli_fetch_array($resq)["numregion"];
        $stat = mysqli_fetch_array(mysqli_query($cnx,"select codesta from station where nomsta = '$sta'"))[0];
        $resm = mysqli_query($cnx,"insert into seisme values('$stat','$numreg','$ds','$lat','$long','$mag')");
        if($resm)echo'insertion success';
        
    }
    else{
        $resm = mysqli_query($cnx,"insert into seisme values('$sta','$numreg','$ds','$lat','$long','$mag')");
        if($resm)echo'insertion success';
    }
}

?>