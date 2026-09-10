<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tugas 5</title>
</head>
<body>

    <h2>Filter Nilak Siswa (> 70)</h2>

    <form method="POST" action="">
        <label for="inputNilai">Masukkan Daftar Nilai (pisahkan dengan koma):</label><br>
        <input type="text" id="inputNilai" name="inputNilai" placeholder="Contoh: 65, 80, 45, 90, 75" style="width: 300px;" required><br><br>

        <button type="submit" name="proses">Filter Nilai</button>
    </form>

    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['proses'])) {
        $rawInput = $_POST['inputNilai'];

        $arrayNilai = explode(',', $rawInput);

        echo "<h3>Hasil Filter Nilai (&ge; 70):</h3>";
        echo "<ul>";

        $adaNilaiLulus = false;

        foreach ($arrayNilai as $nilai) {
            $nilaiAngka = floatval(trim($nilai));

            if ($nilaiAngka >= 70) {
                echo "<li>$nilaiAngka</li>";
                $adaNilaiLulus = true;
            }
        }

        if (!$adaNilaiLulus) {
            echo "<li><em>Tidak ada nilai yang mencapai atau melebihi 70.</em></li>";
        }

        echo "</ul>";
    }
    ?>

</body>
</html>