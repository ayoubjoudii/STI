<?php 
$cnx = mysqli_connect("localhost","root",'','2017');
if(!isset($_POST["cin"]) || !isset($_POST["nom"]) || !isset($_POST["prenom"]) || !isset($_POST["tel"]) || !isset($_POST["art"]) || !isset($_POST["prx"])) die("eruuuer");

$cin = $_POST["cin"];
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$tel = $_POST["tel"];
$art = $_POST["art"];
$prx = $_POST["prx"];

$prix = mysqli_fetch_array(mysqli_query($cnx,"select prixbase from article where codee = '$art'"))[0];
if((int)$prx < (int)$prix){
    die("offre rejete");
}
$res = mysqli_query($cnx,"select * from client where cin = '$cin' and nom = '$nom' and prenom = '$prenom' and tel = '$tel'");
if(mysqli_num_rows($res) == 0){
    $res1 = mysqli_query($cnx,"insert into client values('$cin' , '$nom' , '$prenom' , '$tel') ");
    $res2 = mysqli_query($cnx,"insert into offre values('$cin','$art','$prx') ");
    if($res1 && $res2){
        echo "offre enregistree pour ce nouveau client";
    }
    else{
        echo "erreur enregistrement";
    }
}
else{
    $resm = mysqli_query($cnx,"select * from offre where cin = '$cin' and codee = '$art'");
    if(mysqli_num_rows($resm) == 0){
        $ress = mysqli_query($cnx,"insert into offre values('$cin','$art','$prx')");
        if($ress){
            echo "nouvelle offre enregistree";
        }else{
            echo "erreur enregistrement";
        }
    }
    else{
        $res = mysqli_query($cnx,"update offre set prixpropose = '$prx' where cin = '$cin' and codee = '$art'");
        if($res){
            echo "mise a jour faite avec succes";
        }else{
            echo "erreur enregistrement";
        }

    }
}
mysqli_close($cnx);



?>