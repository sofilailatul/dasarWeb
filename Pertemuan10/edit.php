<!DOCTYPE html>
<html>
    <head>
        <title>Edit Data Anggota</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
        include('koneksi.php');
        $id = $_GET['id'];
        $query = "SELECT * FROM anggota WHERE id = $id";
        $result = mysqli_query($koneksi, $query);
        $row = mysqli_fetch_assoc($result);
        mysqli_close($koneksi);
        ?>
        <div class="container mt-4">
            <h2>Edit Data Anggota</h2>
            <form action="proses.php?aksi=ubah" method="post">
                <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $row['nama'];?>" required>
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin:</label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="jenis_kelamin" value="L" id="laki" <?php if($row['jenis_kelamin'] === 'L') echo 'checked'; ?> required>
                        <label for="laki" class="form-check-label">Laki-laki</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="jenis_kelamin" value="P" id="perempuan" <?php if($row['jenis_kelamin'] === 'L') echo 'checked'; ?> required>
                        <label for="perempuan" class="form-check-label">Perempuan</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $row['alamat']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="no_telp">No. Telp:</label>
                    <input type="text" class="form-control" name="no_telp" id="no_telp" value="<?php echo $row['no_telp']; ?>" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </form>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </div>
    </body>
</html>