<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Berlatih String</h1>

    <?php
    echo "<h3>Soal 1</h3>";

    $soal1 = "Selamat Datang di Sanbercode";
    echo $soal1 . "<br/>";
    echo "Panjang String soal 1 : " . strlen($soal1) . "<br>";
    echo "Jumlah Kata soal 1 : " . str_word_count($soal1) . "<br>";

    echo "<h3>Soal 2</h3>";
    $soal2 = "Hello World";
    echo "Kata 1 Soal 2 : " . substr($soal2, 0, 5) . "<br>";
    echo "Kata 2 Soal 2 : " . substr($soal2, 6) . "<br>";

    echo "<h3>Soal 3</h3>";
    $soal3 = "Suspendisse tincidunt sem sed mi tristique, id faucibus est rutrum. Integer fringilla nibh id purus consequat eleifend. Ut mattis, mi.";

    echo "Before : " . $soal3 . "<br>";
    echo "After : " . str_replace("mi", "after", $soal3) . "<br>";

    ?>
</body>
</html>