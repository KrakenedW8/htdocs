<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    // memasukan / menyambungkan file koneksi ke index.php
    // include      : memasukan file, akan menampilkan warning jika file tidak ditemukan
    // include_once : memasukan file hanya sekali, warning jika tidak ditemukan
    // require      : memasukan file, akan menampilkan fatal error jika file tidak ditemukan
    // require_once : memasukan file hanya sekali, fatal error jika tidak ditemukan
    include "koneksi.php";

    $result = mysqli_query($koneksi, "SELECT * FROM `datamurid`");
    ?>

    <h2>Data Siswa</h2>
    <a href="tambah.php">Tambah Siswa</a>

    <table border="1">
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Aksi</th>
        </tr>

        <?php
        $no = 1;
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row['Nis'] ?></td>
                <td><?= $row['Nama'] ?></td>
                <td><?= $row['Kelas'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $siswa['NIS'] ?>" class="btn btn-success btn-sm">Edit</a>
                    <a href="hapus.php?id=<?= $siswa['NIS'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>

</body>

</html>