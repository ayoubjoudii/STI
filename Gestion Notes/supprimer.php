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
        <legend>Les Notes a supprimer:</legend>
        <form action="supprimer2.php" method="post">
            <div><label for="liste">ID: </label>
            <select name="liste" id="liste">
                <option value="">Selectionner l'id de leleve</option>
                <?php
                    require("connexion.php");
                    $req = "SELECT id FROM eleves ";
                    $res = mysqli_query($cn,$req);
                    while ($ligne = mysqli_fetch_array($res)){
                        echo '<option value="'.$ligne['id'].'" >'.$ligne['id'].'</option>';
                    }
                    ?>

            </select></div>
            <input type="submit" value="supprimer" id="sup">
            <input type="reset" value="annuler" id="">
        </form>
    </fieldset>
</body>
</html>