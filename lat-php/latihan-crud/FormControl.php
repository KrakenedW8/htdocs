<?php
require_once("koneksi.php");

if (isset($_POST['tambah'])) { 
    // Ambil data dari form
    $nis     = $_POST['nis'];
    $nama    = $_POST['nama'];
    $kelas   = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    // Query disesuaikan dengan nama kolom database (NIS, Nama, Kelas, Jurusan)
    $query = mysqli_query($koneksi, "INSERT INTO datamurid (NIS, Nama, Kelas, Jurusan) VALUES ('$nis', '$nama', '$kelas', '$jurusan')");

    if ($query) {
        header("Location: home.php");
        exit;
    } else {
        echo "<script>alert('Data gagal ditambahkan: " . mysqli_error($koneksi) . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container my-5">
    <div class="card">
        <div class="card-header">
            Tambah Data Siswa
        </div>
        <div class="card-body">

            <form action="" method="POST">
                <div class="mb-3">
                    <label class="form-label">NIS</label>
                    <input type="text" name="nis" class="form-control" placeholder="Masukkan NIS" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap" required>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Kelas</label>
                    <input type="text" name="kelas" class="form-control" placeholder="Contoh: XI-RPL-3" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Jurusan</label>
                    <select name="jurusan" class="form-select" required>
                        <option value="" selected disabled>-- Pilih Jurusan --</option>
                        <option value="PPLG">PPLG</option>
                        <option value="RPL">RPL</option>
                        <option value="TJKT">TJKT</option>
                        <option value="AKKUL">AKKUL</option>
                        <option value="PS">PS</option>
                        <option value="MPLB">MPLB</option>
                    </select>
                </div>
                
                <button type="submit" name="tambah" class="btn btn-primary">Simpan Data</button>
                <a href="home.php" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </div>
</div>

</body>
</html>