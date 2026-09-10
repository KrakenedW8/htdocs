<?php
require_once('koneksi.php');

$siswa = null;

// 1. Ambil data siswa berdasarkan NIS dari URL
if (isset($_GET['nis'])) {
    $nis = $_GET['nis'];
    $ambilData = mysqli_query($koneksi, "SELECT * FROM datamurid WHERE NIS = '$nis'"); 
    if ($ambilData) {
        $siswa = mysqli_fetch_assoc($ambilData);
    }
}

// 2. Proses simpan perubahan data
if (isset($_POST['edit'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    $query = mysqli_query($koneksi, "UPDATE datamurid SET Nama = '$nama', Kelas = '$kelas', Jurusan = '$jurusan' WHERE NIS = '$nis'");

    if ($query) {
        header("Location: home.php");
        exit;
    } else {
        echo "Data gagal diubah: " . mysqli_error($koneksi);
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container my-5">
    <div class="card">
        <div class="card-header">
            Edit Data
        </div>
        <div class="card-body">
            <?php if ($siswa) : ?>
                <form action="" method="POST">
                    <!-- Simpan NIS sebagai acuan di hidden input -->
                    <input type="hidden" name="nis" value="<?= $siswa['NIS']; ?>">

                    <div class="mb-3">
                        <label class="form-label">NIS</label>
                        <input type="text" class="form-control" value="<?= $siswa['NIS']; ?>" disabled>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" value="<?= $siswa['Nama']; ?>" required>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Kelas</label>
                        <input type="text" name="kelas" class="form-control" value="<?= $siswa['Kelas']; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Jurusan</label>
                        <select name="jurusan" class="form-control" required>
                            <option value="PPLG" <?= ($siswa['Jurusan'] == 'PPLG') ? 'selected' : ''; ?>>PPLG</option>
                            <option value="RPL" <?= ($siswa['Jurusan'] == 'RPL') ? 'selected' : ''; ?>>RPL</option>
                            <option value="TJKT" <?= ($siswa['Jurusan'] == 'TJKT') ? 'selected' : ''; ?>>TJKT</option>
                            <option value="AKKUL" <?= ($siswa['Jurusan'] == 'AKKUL') ? 'selected' : ''; ?>>AKKUL</option>
                            <option value="MPLB" <?= ($siswa['Jurusan'] == 'MPLB') ? 'selected' : ''; ?>>MPLB</option>
                        </select>
                    </div>

                    <button type="submit" name="edit" class="btn btn-success">Simpan Perubahan</button>
                    <a href="home.php" class="btn btn-danger">Batal</a>
                </form>
            <?php else : ?>
                <div class="alert alert-danger" role="alert">
                    Data tidak ditemukan!
                </div>
                <a href="home.php" class="btn btn-secondary">Kembali</a>
            <?php endif; ?>
        </div>
    </div>
</div>

</body>
</html>