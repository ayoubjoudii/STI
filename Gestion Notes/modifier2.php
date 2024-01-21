<?php 
$nom = "mohsen";
$nc = 20;
$ns = 20;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="tous.css">
</head>
<body>
    <h1>Modifier les Notes:</h1>
    <fieldset>
        <legend>Les Notes a modifier:</legend>
        <div><label for="nom">Nom Prenom: </label> <input type="text" value="<?php echo $nom ?>" id="nom"></div>
        <div><label for="nc">Note de Controle: </label> <input  type="text"  value="<?php echo $nc ?>" id="nc"></div>
        <div><label for="ns">Note de synthese: </label> <input  type="text" value="<?php echo $ns ?>"  id="ns"></div>
        <button onclick="verifchange()">modifier</button>
        <button><a href="modifier.html">retourner</a></button>
    </fieldset>
    <script>
    function verifchange(){
    const nc = document.getElementById("nc").value 
const ns = document.getElementById("ns").value ;
if(isNaN(parseFloat(nc)) ||
    isNaN(parseFloat(ns)) ||
    parseFloat(nc) < 0.00 ||
    parseFloat(nc) > 20.00 ||
    parseFloat(ns) < 0.00 ||
    parseFloat(ns) > 20.00) {
        alert("decimaux et entre 0.00 et 20.00")
        return false
    }else{
        <?php ?>
    }}</script>
        </body>
        </html>