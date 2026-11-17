<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Latihan Array</h1>
    <?php
    echo "<h3>Soal 1</h3>";

    $trainer = ["Adi", "Budi", "Citra", "Dani", "Fatmawati", "Gerald"];
    print_r($trainer);

    echo "<h3>Soal 2</h3>";
    echo "Total Trainer : " . count($trainer);
    echo "<ol>";
    echo "<li> " . $trainer[0] . "</li>";
    echo "<li> " . $trainer[1] . "</li>";
    echo "<li> " . $trainer[2] . "</li>";
    echo "<li> " . $trainer[3] . "</li>";
    echo "<li> " . $trainer[4] . "</li>";
    echo "<li> " . $trainer[5] . "</li>";
    echo "</ol>";

    echo "<h3>Soal 3</h3>";

    $bioStudent = [
        ["id" => "001", "name" => "Adi", "class" => "IPA 12"],
        ["id" => "002", "name" => "Budi", "class" => "IPS 3"],
        ["id" => "003", "name" => "Citra","class" =>  "IPS 2"],
        ["id" => "004", "name" => "Dani", "class" => "IPA 2"],
        ["id" => "005", "name" => "Fitri", "class" => "IPA 10"],
    ];

    echo "<pre>";
    print_r($bioStudent);
    echo "</pre>";

    echo "<h1>" . $bioStudent[3]["name"] . "</h3>";


    ?>
</body>
</html>