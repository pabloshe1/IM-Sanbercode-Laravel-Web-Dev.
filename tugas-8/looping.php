<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Looping</title>
</head>
<body>
    <h1>Berlatih Looping</h1>
    <?php 
        echo "<h3>Soal No 1 Looping I Love PHP</h3>";
        echo "LOOPING PERTAMA<br>";
        for ($i = 2; $i <= 20; $i += 2) {
            echo "$i - I Love PHP<br>";
        }

        echo "LOOPING KEDUA<br>";
        for ($j = 20; $j >= 2; $j -= 2) {
            echo "$j - I Love PHP<br>";
        }

        echo "<h3>Soal No 2 Loop Associative Array</h3>";
        $items = [
            ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'], 
            ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],
            ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
            ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']
        ];
        
        foreach ($items as $val) {
            $itemAsosiatif = [
                "id" => $val[0],
                "name" => $val[1],
                "price" => $val[2],
                "description" => $val[3],
                "source" => $val[4]
            ];
            print_r($itemAsosiatif);
            echo "<br>";
        }

        echo "<h3>Soal No 3 Asterix </h3>";
        echo "Asterix: <br>";
        for ($row = 1; $row <= 5; $row++) {
            for ($star = 1; $star <= $row; $star++) {
                echo "* ";
            }
            echo "<br>";
        }
    ?>
</body>
</html>