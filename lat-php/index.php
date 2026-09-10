<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Latihan FORM</h1>
    <form action="" method="post"><!--Method ada 2, get: data nya akan tampil di URL, 
                                                    post: data akan muncul di content web, 
                                                    Action: data akan muncul tergantung pada tempat (default: index)-->
            <label for ="panjang">Panjang:</label>
            <input type="number" name="panjang" id="panjang"
            required>
            <br><br>
            <label for="lebar">Lebar:</label>
            <input type="number" name="lebar" id="lebar"
            required>
            <br><br>
            <label for="tinggi">tinggi:</label>
            <input type="number" name="tinggi" id="tinggi"
            required>
            <br><br>
            <input type="submit" name="submit" value="Hitung Volume">
            <br><br>
    </form>

    <?php
    //buat function volumeBalok untuk menghitung volume balok
    function VolumeBalok($panjang, $lebar, $tinggi) {
        return $panjang * $lebar * $tinggi;
    }
    # menangkap data dari form
    # $_GET dan $_POST
    if (isset($_POST['submit'])) { // mengecek apakah form telah disubmit
        // isset itu mengecek apakah $_POST nya kosong dan !empty untuk mengecek apakah variable itu ada
        // menangkap data dari form
        // $_GET dan $_POST adalah superglobal array yang digunakan untuk menangkap data dari form
    var_dump($_POST);
    $panjang = $_POST['panjang']; //ambil nilai panjang
    $lebar = $_POST['lebar'];  //ambil nilai lebar
    $tinggi = $_POST['tinggi']; //ambil nilai tinggi

    $volume = VolumeBalok($panjang, $lebar, $tinggi); //rumus
    echo "<p>Volume balok adalah: $volume</p>";
    }
    ?>
</body>
</html>