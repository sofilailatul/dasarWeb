<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Data Anggota</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <h2>Tambah Data Anggota</h2>

            <form action="proses.php?aksi=tambah" method="post">
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" name="nama" id="nama" required>
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin:</label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="jenis_kelamin" value="L" id="laki" required>
                        <label class="form-check-label" for="laki">Laki-laki</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="jenis_kelamin" value="P" id="perempuan" required>
                        <label for="perempuan" class="form-check-label">Perempuan</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <input type="text" class="form-control" name="alamat" id="alamat" required>
                </div>
                <div class="form-group">
                    <label for="no_telp">No. Telp:</label>
                    <input type="text" class="form-control" name="no_telp" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan Data</button>
            </form>
            <a href="index.php" class="btn btn-secondary mt-2">Kembali</a>
        </div>
    </body>
</html>