<?php
$cnx=mysqli_connect('localhost','root','','2020');
if (!isset($_POST["sel"]) || !isset($_POST["tel"]) ||!isset($_POST["qte"]) || !isset($_POST["mdp"]) ) die("edrrreur");

$sel = $_POST["sel"];
$tel = $_POST["tel"];
$qte = $_POST["qte"];
$mdp = $_POST["mdp"];

$res = mysqli_query($cnx,"SELECT * from client where tel = '$tel' and motpass = '$mdp' ");
if (mysqli_num_rows($res) == 0) die("les values nexiste psa");
$res1 = mysqli_query($cnx,"select idpizza from pizza where nompizza = '$sel'");
$id = mysqli_fetch_array($res1)["idpizza"];
$dat = date('Y-m-d H:i:s');
$res = mysqli_query($cnx,"insert into commande values('$id','$tel','$dat','$qte') ");
if($res) echo "successs"
?>