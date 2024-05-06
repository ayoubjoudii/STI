<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="all.css">
</head>
<body>
    <h1>modifier les notes</h1>
    <fieldset>
        <legend>Les notes a modifier:</legend>
        <form action="modif.php" method="post" onsubmit="return verifc()">
            <div>
                <label for="">ID:</label>
                <select name="list" id="list">
                    <option value="">Selectionner l'id de l'eleve</option>
                    <?php
                        require("connexion.php");
                        $res = mysqli_query($cnx,"SELECT id from eleves");
                        while ($t = mysqli_fetch_array($res)){
                            echo '<option value="'.$t["id"].'" >'.$t["id"].'</option>';
                        }
                    ?>
                </select>
            </div>
            
            <input type="submit" value="Modifier">
            <input type="reset" name="" value="Annuler"> 
        </form>
    </fieldset>
    <script src="controle.js"></script> 
</body>
</html>