<?php
$cnx = mysqli_connect("localhost", "root", "", "Sources") or die('probleme');
if(!isset($_POST['text'])) die ("variable n'existe pas");
$text = $_POST['text'];
function espace($text) {
    $text = trim($text);
    while (strpos($text, '  ') !== false) {
        $text = str_replace('  ', ' ', $text);
    }

}
echo 'le texte : '.$text
?>
