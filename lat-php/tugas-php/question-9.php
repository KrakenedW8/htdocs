<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tugas 9</title>
</head>
<body>
    <form method="POST" action="">
        <label for="nama">Nama Produk:</label><br>
        <input type="text" id="nama" name="nama" placeholder="Contoh: BEBAS" required><br><br>

        <label for="kategori">Kategori:</label><br>
        <input type="text" id="kategori" name="kategori" placeholder="Contoh: Aksesoris" required><br><br>

        <label for="harga">Harga (Rp):</label><br>
        <input type="number" id="harga" name="harga" placeholder="Contoh: 250000" required><br><br>

        <button type="submit" name="tambah">Tambah ke Daftar</button>
    </form>

    <br>

    <?php
    $produk = [
        ["nama" => "Laptop", "kategori" => "Elektronik", "harga" => 7000000],
        ["nama" => "Meja Belajar", "kategori" => "Furniture", "harga" => 450000],
        ["nama" => "Mouse", "kategori" => "Elektronik", "harga" => 150000]
    ];

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['tambah'])) {
        $produkBaru = [
            "nama" => $_POST['nama'],
            "kategori" => $_POST['kategori'],
            "harga" => floatval($_POST['harga'])
        ];
        $produk[] = $produkBaru;
    }

    echo "<h3>Daftar Produk Saat Ini:</h3>";
    echo "<ul>";
    foreach ($produk as $item) {
        $hargaFormat = "Rp " . number_format($item['harga'], 0, ',', '.');
        echo "<li><strong>{$item['nama']}</strong> | Kategori: {$item['kategori']} | Harga: {$hargaFormat}</li>";
    }
    echo "</ul>";
    ?>

</body>
</html>