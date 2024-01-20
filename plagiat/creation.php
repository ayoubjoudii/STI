<?php 
$cnx = mysqli_connect("localhost", "root") or die ('problem');

$reqCreateDatabase = "CREATE DATABASE IF NOT EXISTS Sources";
$insertDatabase = mysqli_query($cnx, $reqCreateDatabase);

if (!$insertDatabase) {
    die("Error creating database: " . mysqli_error($cnx));
}


mysqli_select_db($cnx, 'Sources');

$reqCreateTable = "CREATE TABLE IF NOT EXISTS origine (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    texte TEXT,
    source VARCHAR(50),
    date_cre DATE
);";

$insertTable = mysqli_query($cnx, $reqCreateTable);

if (!$insertTable) {
    die("Error creating table: " . mysqli_error($cnx));
}

mysqli_close($cnx);
?>
