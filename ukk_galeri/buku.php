<?php
// Inisialisasi array album
$albumList = [];

// Proses menambah album
if (isset($_POST['submit'])) {
    $nama_album = htmlspecialchars($_POST['nama_album']);
    $tahun = htmlspecialchars($_POST['tahun']);
    $deskripsi = htmlspecialchars($_POST['deskripsi']);
    
    // Ambil URL gambar
    $gambar_url = htmlspecialchars($_POST['gambar_url']);

    // Simpan data album ke array
    $albumList[] = [
        'nama_album' => $nama_album,
        'tahun' => $tahun,
        'deskripsi' => $deskripsi,
        'gambar' => $gambar_url
    ];
    
    echo '<script>alert("Album berhasil ditambahkan.");</script>';
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('assets/img/smkn4bogor.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }
        .img-fluid {
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>

<div class="container mt-4">
    <h1 class="mt-4">Album Sekolah</h1>

    <!-- Menampilkan Album -->
    <div class="card">
        <div class="card-body">
            <h5>Daftar Album Sekolah</h5>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nama Album</th>
                        <th>Tahun</th>
                        <th>Deskripsi</th>
                        <th>Gambar</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                // Menampilkan daftar album
                if (!empty($albumList)) {
                    foreach ($albumList as $album) {
                        echo "<tr>
                                <td>{$album['nama_album']}</td>
                                <td>{$album['tahun']}</td>
                                <td>{$album['deskripsi']}</td>
                                <td><img src='{$album['gambar']}' alt='{$album['nama_album']}' width='100'></td>
                              </tr>";
                    }
                } else {
                    echo '<tr><td colspan="4">Belum ada album yang ditambahkan.</td></tr>';
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Form Menambah Album -->
    <div class="card mt-4">
        <div class="card-body">
            <h5>Tambah Album Baru</h5>
            <form method="post">
                <div class="row mb-3">
                    <div class="col-md-2">Nama Album</div>
                    <div class="col-md-8"><input type="text" class="form-control" name="nama_album" required></div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">Tahun</div>
                    <div class="col-md-8"><input type="number" class="form-control" name="tahun" required></div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">Deskripsi</div>
                    <div class="col-md-8">
                        <textarea name="deskripsi" rows="5" class="form-control" required></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">URL Gambar</div>
                    <div class="col-md-8"><input type="url" class="form-control" name="gambar_url" required></div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
