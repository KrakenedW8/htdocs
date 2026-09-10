<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2</title>
</head>
<body>
    
    <h2>ATM</h2>

    <form method="POST" action="">
        <label for="saldoAwal">Saldo Awal:</label><br>
        <input type="number" id="saldoAwal" name="saldoAwal" value="500000" required><br><br>

        <label for="jumlahTarik">Jumlah Tarik:</label><br>
        <input type="number" id="jumlahTarik" name="jumlahTarik" value="200000" required><br><br>

        <button type="submit" name="tarik">Enter</button>
    </form>

    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['tarik'])) {
        $saldoAwal = floatval($_POST['saldoAwal']);
        $jumlahTarik = floatval($_POST['jumlahTarik']);
        $minSaldo = 50000;

        // Logika Pengecekan Kondisi Penarikan
        if (($saldoAwal - $jumlahTarik) >= $minSaldo) {
            $sisaSaldo = $saldoAwal - $jumlahTarik;
            echo "<p><strong>Penarikan berhasil. Sisa saldo Anda saat ini: Rp " . number_format($sisaSaldo, 0, ',', '.') . "</strong></p>";
        } else {
            echo "<p><strong>Penarikan gagal: Saldo tidak mencukupi. (Sisa saldo minimal harus Rp " . number_format($minSaldo, 0, ',', '.') . ")</strong></p>";
        }
    }
    ?>
</body>
</html>