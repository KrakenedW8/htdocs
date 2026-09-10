<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tugas 4</title>
</head>
<body>

    <h2>Tempat Amang Parkir</h2>

    <form method="POST" action="">
        <label for="jenis">Jenis Kendaraan:</label><br>
        <select id="jenis" name="jenis" required>
            <option value="mobil">Mobil</option>
            <option value="motor">Motor</option>
        </select><br><br>

        <label for="jam">Lama Parkir:</label><br>
        <input type="number" id="jam" name="jam" min="1" required><br><br>

        <button type="submit" name="hitung">Enter</button>
    </form>

    <br>

    <?php
    function hitungParkir($jenis, $jam) {
        if ($jam <= 0) return 0;

        if (strtolower($jenis) === "mobil") {
            $tarifAwal = 5000;
            $tarifBerikutnya = 3000;
        } elseif (strtolower($jenis) === "motor") {
            $tarifAwal = 2000;
            $tarifBerikutnya = 1000;
        } else {
            return 0;
        }

        return $tarifAwal + (($jam - 1) * $tarifBerikutnya);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['hitung'])) {
        $jenis = $_POST['jenis'];
        $jam = intval($_POST['jam']);

        $totalBiaya = hitungParkir($jenis, $jam);

        echo "<strong>Total Biaya Parkir (Karena anda pakai $jenis, $jam jam): Rp " . number_format($totalBiaya, 0, ',', '.') . "</strong>";
    }
    ?>

</body>
</html>