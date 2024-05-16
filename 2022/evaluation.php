<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <fieldset>
        <legend>evali</legend>
        <form action="eval.php" method="post" onsubmit="return verif2()">
            <div>
                <label for="">N permis:</label>
                <input type="text" name="np" id="np">
                <label for="">Modele teste: </label>
                <select name="sel" id="sel">
                    <option value="">selectioner smth</option>
                    <?php
                    $cnx = mysqli_connect('localhost','root','','2022');
                    $res = mysqli_query($cnx,'SELECT libelle,idmodele from modelvoiture ');
                    while ($t=mysqli_fetch_array($res)){
                        echo '<option value="'.$t['idmodele'].'">'.$t['libelle'].'</option>';
                    }
                    ?>
                </select>
            </div>
            <div>
                <label for="">Notes attribuees</label>
            </div>
            <div>
                <label for="">securite</label>
                <input type="text" name="sec" id="sec">
                <label for="">Conduite:</label>
                <input type="text" name="cond" id="cond">
                <label for="">Confort:</label>
                <input type="text" name="conf" id="conf">
            </div>
            <div>
                <label for="">Je ne suis pas un robot: </label>
                <input type="checkbox" name="box" id="box">
            </div>
            <div>
                <input value="annuler" type="reset" name="" id="">
                <input type="submit" name="" id="">
            </div>
        </form>
    </fieldset>

<script src="controle.js"></script>
</body>
</html>