<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tugas 7</title>
</head>
<body>

    <h2>Analisis Keranjang Belanja</h2>

    <form method="POST" action="">
        <label for="keranjangInput">Masukkan Harga Barang (pisahkan dengan koma):</label><br>
        <input type="text" id="keranjangInput" name="keranjangInput" value="12000, 45000, 30000, 15000, 8000" style="width: 350px;" required><br><br>

        <button type="submit" name="analisis">Analisis Keranjang</button>
    </form>

    <br>

    <?php
    function analisisKeranjang($keranjang) {
        $totalBelanja = 0;
        $jumlahBarang = count($keranjang);

        foreach ($keranjang as $harga) {
            $totalBelanja += floatval(trim($harga));
        }

        $rataRata = ($jumlahBarang > 0) ? ($totalBelanja / $jumlahBarang) : 0;

        echo "<h3>Hasil Analisis:</h3>";
        echo "<strong>Jumlah Barang:</strong> " . $jumlahBarang . " item<br>";
        echo "<strong>Total Belanja:</strong> Rp " . number_format($totalBelanja, 0, ',', '.') . "<br>";
        echo "<strong>Rata-rata Harga:</strong> Rp " . number_format($rataRata, 2, ',', '.') . "<br>";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['analisis'])) {
        $rawInput = $_POST['keranjangInput'];
        $keranjangArray = explode(',', $rawInput);

        analisisKeranjang($keranjangArray);
    }
    ?>

</body>
</html>