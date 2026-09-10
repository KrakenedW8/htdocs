<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tugas 6</title>
</head>
<body>

    <h2>Minimarket</h2>

    <form method="POST" action="">
        <p><strong>Input Stok Barang:</strong></p>
        <label>Minyak: </label>
        <input type="number" name="stok[Minyak]" value="12" min="0" required><br><br>

        <label>Gula: </label>
        <input type="number" name="stok[Gula]" value="0" min="0" required><br><br>

        <label>Beras: </label>
        <input type="number" name="stok[Beras]" value="5" min="0" required><br><br>

        <label>Telur: </label>
        <input type="number" name="stok[Telur]" value="0" min="0" required><br><br>

        <button type="submit" name="cek">Cek Stok</button>
    </form>

    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['cek'])) {
        $stokBarang = $_POST['stok'];

        echo "<h3>Status Stok Barang:</h3>";
        echo "<ul>";
        foreach ($stokBarang as $barang => $jumlah) {
            $jumlah = intval($jumlah);
            if ($jumlah > 0) {
                echo "<li><strong>$barang</strong> : Tersedia ($jumlah unit)</li>";
            } else {
                echo "<li><strong>$barang</strong> : STOK HABIS!</li>";
            }
        }
        echo "</ul>";
    }
    ?>

</body>
</html>