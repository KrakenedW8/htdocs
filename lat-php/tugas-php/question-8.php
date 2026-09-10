<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tugas 8</title>
</head>
<body>

    <h2>Konversi Suhu Celcius</h2>

    <form method="POST" action="">
        <label for="celcius">Nilai Suhu (Celcius):</label><br>
        <input type="number" id="celcius" name="celcius" step="any" value="30" required><br><br>

        <label for="satuan">Satuan Tujuan:</label><br>
        <select id="satuan" name="satuan" required>
            <option value="F">Fahrenheit (F)</option>
            <option value="R">Reamur (R)</option>
        </select><br><br>

        <button type="submit" name="konversi">Enter</button>
    </form>

    <br>

    <?php
    function konversiSuhu($celcius, $satuanTujuan) {
        $satuan = strtoupper($satuanTujuan);

        if ($satuan === "F") {
            return (1.8 * $celcius) + 32;
        } elseif ($satuan === "R") {
            return 0.8 * $celcius;
        } else {
            return null;
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['konversi'])) {
        $celcius = floatval($_POST['celcius']);
        $satuan = $_POST['satuan'];

        $hasil = konversiSuhu($celcius, $satuan);
        $namaSatuan = ($satuan === "F") ? "Fahrenheit" : "Reamur";

        echo "<strong>Hasil Konversi: {$celcius}°C = {$hasil}° {$namaSatuan}</strong>";
    }
    ?>

</body>
</html>