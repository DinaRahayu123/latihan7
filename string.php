<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String PHP</title>
</head>
<>
<h1>Berlatih String PHP</h1>
<?php
    echo "<h3> Soal No 1</h3>";
$first_sentence = "Hello PHP!";
echo $first_sentence;
echo '<br>';
echo "Panjang String :". strlen($first_sentence);
echo '<br>';
echo "Jumlah Kata :". str_word_count($first_sentence);
echo '<br>';
echo '<br>';

$second_sentence = "I'm ready for the challenges";
echo $second_sentence;
echo '<br>';
echo "Panjang String :". strlen($second_sentence);
echo '<br>';
echo "Jumlah Kata :". str_word_count($second_sentence);
echo '<br>';
echo '<br>';

    echo "<h3> Soal No 2</h3>";
$string2 = "I love PHP";
echo "<label>String: </label> \"$string2\" <br>";
echo "Kata pertama (1): " . substr($string2, 0, 1) . "<br>" ;
echo "Kata kedua (2): " . substr($string2, 2, 4) . "<br>" ;
echo "Kata ketiga (3): " . substr($string2, 7, 3) . "<br>" ;
echo '<br>';
echo '<br>';

    echo "<h3> Soal No 3</h3>";
$string3 = "PHP is old but sexy!";
$string3 = "PHP is old but awesome";
echo "String: \"$string3\" ";
 // OUTPUT : "PHP is old but awesome"

 ?>
</body>
</html>