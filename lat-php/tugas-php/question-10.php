<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tugas 10</title>
</head>
<body>

    <h2>Calculator Discount!</h2>

    <form method="POST" action="">
        <label for="totalBelanja">Total Belanja (Rp):</label><br>
        <input type="number" id="totalBelanja" name="totalBelanja" value="150000" min="0" required><br><br>

        <label>Status Membership:</label><br>
        <input type="radio" id="gold" name="membership" value="1" checked>
        <label for="gold">Gold Member</label><br>
        <input type="radio" id="non" name="membership" value="0">
        <label for="non">Non-Member</label><br><br>

        <button type="submit" name="hitung">Enter</button>
    </form>

    <br>

    <?php
    function hitungTotalBayar($totalBelanja, $isGoldMember) {
        if ($isGoldMember) {
            $diskon = ($totalBelanja >= 100000) ? 0.20 : 0.10;
        } else {
            $diskon = ($totalBelanja >= 100000) ? 0.05 : 0.00;
        }

        return $totalBelanja - ($totalBelanja * $diskon);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['hitung'])) {
        $totalBelanja = floatval($_POST['totalBelanja']);
        $isGoldMember = ($_POST['membership'] == "1");

        $totalBayar = hitungTotalBayar($totalBelanja, $isGoldMember);
        $statusMember = $isGoldMember ? "Gold Member" : "Non-Member";

        echo "<strong>Total Bayar ($statusMember): Rp " . number_format($totalBayar, 0, ',', '.') . "</strong>";
    }
    ?>

</body>
</html>