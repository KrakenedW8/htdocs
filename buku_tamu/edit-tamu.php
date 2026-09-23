<?php
require_once('function.php');
include_once('templates/header.php');

// Cek apakah ada id_tamu di URL
if (isset($_GET['id'])) {
    $id_tamu = $_GET['id'];

    // Ambil data tamu berdasarkan id_tamu
    $result = query("SELECT * FROM buku_tamu WHERE id_tamu = '$id_tamu'");

    // Jika data ditemukan, ambil baris pertama. Jika tidak, redirect ke buku-tamu.php
    if (!empty($result)) {
        $data = $result[0];
    } else {
        echo "<script>window.location.href='buku-tamu.php';</script>";
        exit;
    }
} else {
    // Jika tidak ada parameter ID di URL, kembalikan ke halaman buku tamu
    echo "<script>window.location.href='buku-tamu.php';</script>";
    exit;
}
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Ubah Data Tamu</h1>

    <?php
    // Jika ada tombol simpan
    if (isset($_POST['simpan'])) {
        if (ubah_tamu($_POST) > 0) {
    ?>
            <div class="alert alert-success" role="alert">
                Data berhasil diubah!
            </div>
        <?php
            // Refresh data terbaru setelah berhasil diubah
            $data = query("SELECT * FROM buku_tamu WHERE id_tamu = '$id_tamu'")[0];
        } else {
        ?>
            <div class="alert alert-danger" role="alert">
                Data gagal diubah!
            </div>
    <?php
        }
    }
    ?>

    <!-- Konten Edit Data Tamu -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6>Data Tamu</h6>
        </div>
        <div class="card-body">

            <form method="post" action="" enctype="multipart/form-data">
                <input type="hidden" name="id_tamu" id="id_tamu" value="<?= htmlspecialchars($id_tamu) ?>">
                <input type="hidden" name="gambarLama" id="gambarLama" value="<?= htmlspecialchars($data['gambar'] ?? '') ?>">

                <div class="form-group row">
                    <label for="nama_tamu" class="col-sm-3 col-form-label">Nama Tamu</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama_tamu" name="nama_tamu" value="<?= htmlspecialchars($data['nama_tamu']) ?>" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" id="alamat" name="alamat" required><?= htmlspecialchars($data['alamat']) ?></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="no_hp" class="col-sm-3 col-form-label">No. Telepon</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= htmlspecialchars($data['no_hp']) ?>" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="bertemu" class="col-sm-3 col-form-label">Bertemu dg.</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="bertemu" name="bertemu" value="<?= htmlspecialchars($data['bertemu']) ?>" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="kepentingan" class="col-sm-3 col-form-label">Kepentingan</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="kepentingan" name="kepentingan" value="<?= htmlspecialchars($data['kepentingan']) ?>" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="gambar" class="col-sm-3 col-form-label">Gambar Foto</label>
                    <div class="col-sm-8">
                        <?php if (!empty($data['gambar'])) : ?>
                            <img src="assets/upload_gambar/<?= htmlspecialchars($data['gambar']) ?>" alt="" width="30%" class="mb-2 d-block">
                        <?php endif; ?>
                        <input type="file" class="form-control-file" id="gambar" name="gambar">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label"></label>
                    <div class="col-sm-8 d-flex justify-content-end">
                        <div>
                            <a class="btn btn-danger btn-icon-split" href="buku-tamu.php">
                                <span class="icon text-white-50">
                                    <i class="fas fa-chevron-left"></i>
                                </span>
                                <span class="text">Kembali</span>
                            </a>
                            <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

<?php
include_once('templates/footer.php');
?>