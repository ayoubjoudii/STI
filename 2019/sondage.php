<?php
$cnx = mysqli_connect('localhost','root','','2019');
if (!isset($_POST["mail"]) || !isset($_POST["mdp"]) || !isset($_POST["sel"]) || !isset($_POST["1"]) || !isset($_POST["2"]) ||!isset($_POST["3"]));
$mail = $_POST["mail"];
$mdp = $_POST["mdp"];
$genre = $_POST["sel"];
$q1 = $_POST["1"];
$q2 = $_POST["2"];
$q3 = $_POST["3"];

$resm = mysqli_query($cnx,"select * from participant where mail = '$mail' and mdp = '$mdp' ");
if(mysqli_num_rows($resm)== 0){

}
$resm = mysqli_query($cnx,"select * from participant where mail = '$mail' and mdp <> '$mdp' ");
if(mysqli_num_rows($resm)!=0){
    die("erreur d'authentification");
}
$res0 = mysqli_query($cnx,"select idparticipant from participant where mail = '$mail' ") or die("3amer yadi");
$id = mysqli_fetch_array($res0)[0];
$ress = mysqli_query($cnx,"select * from reponse where nums = '1' and idparticipant = '$id' ");
if (mysqli_num_rows($ress)!=0){
    $resp = mysqli_query($cnx,"update reponse set rep ='$q1' where idparticipant = '$id' and numq='1'  ");
    $resp1 = mysqli_query($cnx,"update reponse set rep ='$q2' where idparticipant = '$id' and numq='2'  ");
    $resp2 = mysqli_query($cnx,"update reponse set rep ='$q3' where idparticipant = '$id' and numq='3'  ");
    if($resp && $resp1 && $resp2) die("mise a jour succees");
}
else{
    $res = mysqli_query($cnx,"insert into reponse values('1','1','$id','$q1'),('2','1','$id','$q2'),('3','1','$id','$q3') ");
    if($res) die("insertion success");
}
$resm = mysqli_query($cnx,"select * from participant where mail = '$mail' and mdp = '$mdp' ");
if(mysqli_num_rows($resm)== 0){
    $resi = mysqli_query($cnx,"insert into participant(mail,mdp,genre) values('$mail','$mdp','$sel') ");
    $res0 = mysqli_query($cnx,"select idparticipant from participant where mail = '$mail' ");
    $id = mysqli_fetch_array($res0)[0];
    $resi1 = mysqli_query($cnx,"insert into reponse values('1','1','$id','$q1'),('2','1','$id','$q2'),('3','1','$id','$q3') ");
    
}


?>