<?php 
$cnx = mysqli_connect('localhost','root','','2022');
if (!isset($_POST['np'])||!isset($_POST['sec'])||!isset($_POST['conf'])||!isset($_POST['cond']) ||!isset($_POST['box']) || !isset($_POST["sel"])) die("errrtteu") ;

$np = $_POST["np"];
$sel = $_POST["sel"];
$sec = $_POST["sec"];
$conf = $_POST["conf"];
$cond = $_POST["cond"];
$box = $_POST["box"];


$res = mysqli_query($cnx,"SELECT * from testeur where numpermis = '$np' ");
if(mysqli_num_rows($res)==0){
    die("non inscrit");
}
$res1 = mysqli_query($cnx,"SELECT * from evaluation where numpermis = '$np' and idmodele = '$sel' ");
if(mysqli_num_rows($res1)!=0){
    die("deja rempli");
}
$dat = date("Y-m-d  H:i");
$res2 = mysqli_query($cnx,"INSERT into evaluation values ('$np','$sel','$dat','$sec', '$cond','$conf') ");

?>