<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1 Tabung!</title>
</head>
<body>
    <h1>Form Tabung!!!!!</h1>
    <form action="" method="post">
        <label for ="r">Jari-Jari</label>
        <input type="number" name="r"
        required>
        <br><br>
        <label for ="tinggi">Tinggi</label>
        <input type="number" name="tinggi" id="tinggi"
        required>
        <br><br>
        <input type="submit" name="submit" value="Hitung Volume">
    </form>

    <?php
    
    function VolumeTabung($r, $tinggi) {
        $hasil = 3.14 * $r * $r * $tinggi;
        return $hasil;
    }

    if (isset($_POST['submit'])) {
        var_dump($_POST);
        $r = $_POST['r'];
        $tinggi = $_POST['tinggi'];

        $volume = VolumeTabung($r, $tinggi);
        echo "<p>Volume tabung adalah: $volume</p>";
    }
    ?>



    <br><br>
    
    <?php
    //ARRAY DI PHP

    echo "<h1>ARRAY DI PHP</h1>";
    // 1. Array Numeric
    $fruits = ["Apel", "Pisang", "Jeruk"];
    echo "<p>Buah pertama: " . $fruits[1] . "</p>";
    //tampil semua buah
    foreach ($fruits as $fruit)
        echo "<p>Buah: $fruit</p>";

    // 2. Array Asosiatif

    $characters = [
        "nama" => "Toph",
        "umur" => 23,
        "bender" => "Earth"
    ];

    foreach ($characters as $C){
        echo "<p>$C</p>";
    };

    ?>



    <br><br>

    <?php
    $casts = [
        ["nama" => "Zuko", "umur" => 29, "bender" => "Fire"],
        ["nama" => "Aang", "umur" => 24, "bender" => "AVATAR"],
        ["nama" => "Katara", "umur" => 26, "bender" => "Water"],
        ["nama" => "Toph", "umur" => 23, "bender" => "Earth"]
    ];
    foreach ($casts as $Cs){
        echo "<p>$Cs[nama], umur $Cs[umur], bender $Cs[bender]</p>";
    };

    ?>



    <br><br>

    <?php
    // 3. Array Multidimensi
    $matriks = [
        [1, 2, 3],
        [4 ,5 ,6],
        [7, 8, 9]
    ];
    echo "<p>Elemen matriks [1][2]: " . $matriks [1][0] . "</p>";

    ?>



    <?php

    ?>
</body>
</html>