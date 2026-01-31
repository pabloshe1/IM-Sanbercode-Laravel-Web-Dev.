<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>String PHP</title>
</head>
<body>
    <h1>Berlatih String PHP</h1>
    <?php   
        echo "<h3> Soal No 1</h3>";
        $first_sentence = "Hello PHP!" ; 
        echo "Kalimat 1: $first_sentence <br>";
        echo "Panjang string: " . strlen($first_sentence) . ", jumlah kata: " . str_word_count($first_sentence) . "<br>";
        
        $second_sentence = "I'm ready for the challenges"; 
        echo "Kalimat 2: $second_sentence <br>";
        echo "Panjang string: " . strlen($second_sentence) . ", jumlah kata: " . str_word_count($second_sentence) . "<br>";

        echo "<h3> Soal No 2</h3>";
        $string2 = "I love PHP";
        echo "<label>String: </label> \"$string2\" <br>";
        echo "Kata pertama: " . substr($string2, 0, 1) . "<br>" ; 
        echo "Kata kedua: " . substr($string2, 2, 4) . "<br>" ; 
        echo "Kata ketiga: " . substr($string2, 7, 3) . "<br>" ; 

        echo "<h3> Soal No 3 </h3>";
        $string3 = "PHP!";
        echo "String asli: \"$string3\" <br>";
        echo "String baru: \"" . str_replace("sexy", "awesome", $string3) . "\""; 
    ?>
</body>
</html>