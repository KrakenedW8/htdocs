<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar php</title>
</head>
<body>
    <h1>ARYA MANDI BAU</h1>
    <?php
        echo "ARYA MANDI";
        //ini adalah komentar dalam satu baris dalam php
        /*ini dalah komentar multi-baris dalam php
        yang digunakan untuk memberikan */

        echo "<br>"; //Manambah barisan baru
        echo "<h1>Belajar PHP itu menyenangkan!</h1>";
        echo "<p>Baris ini adalah paragraf dalam php.</p>";
        echo "<h2>ARYA BAU MANDI</h2>";
    ?>

    <h1>Variable di php</h1>
    <?php
    $nama = "John doe"; /*Variable String
                        variable diawali dengan tanda $
                        variable tidak boleh diawali dengan angka
                        variable tidak boleh mengandung spasi
                        huruf besar dan kecil akan menjadi variable yang berbeda (case sensitive
                        contoh: $nama dan $Nama
                        */
    $umur = 21;
    echo "<p>Nama saya adalah: $nama ,dan umur saya : $umur</p>";
    echo '<p>Nama saya adalah : ' . $nama . '</p>';

    $angka1 = 5;
    $angka2 = '5';

  ( $angka1 === $angka2) ? $hasil = "sama" : $hasil = "tidak sama";
  //operator ternary digunakan untuk membuat

    echo "<p>hasil perbandingannya adalah $hasil</p>";

    /* debugging di PHP
    var dump () digunakan untuk menampilkan informasi tentang sebuah variable, termasuk tipe data dan nilainya. */ 
    var_dump($angka1);
    var_dump($angka2);
    var_dump($angka1 === $angka2);

    $nilai = 10;
    $kehadiran = 90;
    if ($nilai >75 || $kehadiran >= 80) {
        echo "<p>Selamat, Anda lulus!</p>";
    } else {
        echo "<p>Maaf, Anda tidak lulus</p>";
    }

    $menu = 3;
    switch ($menu) {
    case 1:
        echo "<p>ARYA TARA MANDI!</p>";
        break;
    case 2:
        echo "<p>ARYA CAN OBEH</p>";
        break;
    case 3:
        echo "<p>ARYA NGOJAY DI KOLAM SUSU GANYU";
        break;
    default:
        echo "<p>ARYA ACAN DAHAR";
        break;
    }

    /* percabangan juga bisa menggunakan switch dan dilama nya menggunakan case 1: dst seibagai kodisi kesatu dan kedua setelah masukan nama variable nya harus memakai break:
        sedangkan kondisi default adalah kondisi elsenya*/

     /* NASTED IF adalah */
    echo "<h1>NASTED IF</h1>";
    $username = "admin";
    $password = "12345";

    if ($username == "admin") { // Cek username terdaftar
        if ($password == "12345") { // Jika usename terdaftar, cek password
            echo "<p>Login Berhasil</p>";
        } else {
            echo "<p>Password salah</p>";
        }
    } else {
        echo "<p>Usename tidak ditemukan</p>";
    }
    ?>
</body>
</html>