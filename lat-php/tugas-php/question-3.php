<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tugas 3</title>
</head>
<body>
    <form method="POST" action="">
        <label for="password">Masukkan Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit" name="submit">Enter</button>
    </form>

    <br>

    <?php
    function validasiPassword($password) {
        if (strlen($password) < 8) {
            return false;
        }
        if (strpos($password, ' ') !== false) {
            return false;
        }
        return true;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        $inputPassword = $_POST['password'];

        if (validasiPassword($inputPassword)) {
            echo "<p><strong>Anjay Password Valid!</strong></p>";
        } else {
            echo "<p><strong>Password Invalid! (Minimal 8 huruf dong dan jangan pake spasi ya!)</strong></p>";
        }
    }
    ?>

</body>
</html>