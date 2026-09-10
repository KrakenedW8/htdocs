<?php
require_once('koneksi.php');

if (isset($_GET['nis'])) {
    $nis = $_GET['nis'];
    $query = mysqli_query($koneksi, "DELETE FROM datamurid WHERE NIS = '$nis'");

    if ($query) {
        echo "<script>
        alert('Data berhasil dihapus.');
        window.location.href = 'home.php';
        </script>";
    } else {
        echo "<script>
        alert('Gagal menghapus data: " . mysqli_error($koneksi) . "');
        window.location.href = 'home.php';
        </script>";
    }
}
