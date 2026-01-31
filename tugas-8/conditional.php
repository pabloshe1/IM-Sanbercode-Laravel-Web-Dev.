<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Function</title>
</head>
<body>
    <h1>Berlatih Function PHP</h1>
    <?php
        echo "<h3> Soal No 1 Greetings </h3>";
        function greetings($nama) {
            echo "Halo " . ucfirst($nama) . ", Selamat Datang di Sanbercode!<br>";
        }

        greetings("Bagas");
        greetings("Wahyu");
        greetings("Febriana");

        echo "<h3>Soal No 2 Reverse String</h3>";
        function reverseString($str) {
            $panjangString = strlen($str);
            $output = "";
            for ($i = $panjangString - 1; $i >= 0; $i--) {
                $output .= $str[$i];
            }
            echo $output . "<br>";
        }

        reverseString("Febriana");
        reverseString("Sanbercode");
        reverseString("We Are Sanbers Developers");

        echo "<h3>Soal No 3 Tentukan Nilai </h3>";
        function tentukan_nilai($nilai) {
            if ($nilai >= 85 && $nilai <= 100) {
                return "Sangat Baik<br>";
            } else if ($nilai >= 70 && $nilai < 85) {
                return "Baik<br>";
            } else if ($nilai >= 60 && $nilai < 70) {
                return "Cukup<br>";
            } else {
                return "Kurang<br>";
            }
        }

        echo tentukan_nilai(98); //Sangat Baik
        echo tentukan_nilai(76); //Baik
        echo tentukan_nilai(67); //Cukup
        echo tentukan_nilai(43); //Kurang
    ?>
</body>
</html>