<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tugas 1</title>
</head>
<body>

    <h2>Form Cek Kelulusan</h2>

    <form method="POST" action="">
        <label for="tugas">Masukkan Nilai Tugas:</label>
        <br>
        
        <input type="number" id="tugas" name="tugas" step="any" 
        required><br><br>

        <label for="ujian">Masukkan Nilai Ujian:</label>
        <br>

        <input type="number" id="ujian" name="ujian" step="any" 
        required><br><br>

        <button type="submit" name="proses">Enter</button>
    </form>

    <br>

    <?php
    function cekKelulusan($tugas, $ujian) {
        $nilaiAkhir = (0.30 * $tugas) + (0.70 * $ujian);
        return ($nilaiAkhir >= 75) ? "SELAMAT ANDA LULUS!" : "ANDA LULUS TAPI BOONG!";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['proses'])) {
        $tugas = floatval($_POST['tugas']);
        $ujian = floatval($_POST['ujian']);

        $status = cekKelulusan($tugas, $ujian);

        echo "<strong>Hasil: $status</strong>";
    }
    ?>

</body>
</html>