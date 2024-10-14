<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('assets/img/smkn4bogor.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            height: 90vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            background-color: rgba(0, 0, 0, 0.7); /* Latar belakang hitam transparan */
            color: white; /* Ubah teks menjadi putih agar kontras dengan background */
            padding: 100px;
            border-radius: 50px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            max-width: 800px;
            width: 100%;
        }
        .img-fluid {
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>

<div class="container mt-4">
    <h1 class="mt-4 text-center">Komentar</h1>

    <!-- Array untuk menyimpan komentar sementara -->
    <?php
    // Inisialisasi array komentar
    $komentarList = [];

    // Proses penambahan komentar
    if (isset($_POST['submit'])) {
        $nama = htmlspecialchars($_POST['nama']);
        $komentar = htmlspecialchars($_POST['komentar']);
        $waktu = date('d F Y, H:i');

        // Simpan komentar ke array
        $komentarList[] = [
            'nama' => $nama,
            'komentar' => $komentar,
            'waktu' => $waktu
        ];
    }
    ?>

    <!-- Form untuk menambah komentar -->
    <form method="post" action="">
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="komentar">Komentar:</label>
            <textarea name="komentar" class="form-control" rows="3" required></textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Kirim Komentar</button>
    </form>

    <!-- Menampilkan daftar komentar -->
    <div class="list-group mt-4">
        <?php
        // Jika ada komentar yang sudah di-submit, tampilkan
        if (!empty($komentarList)) {
            foreach ($komentarList as $komentarItem) {
                ?>
                <div class="list-group-item bg-dark text-white">
                    <h5 class="mb-1"><?php echo $komentarItem['nama']; ?></h5>
                    <p class="mb-1"><?php echo $komentarItem['komentar']; ?></p>
                    <small>Waktu: <?php echo $komentarItem['waktu']; ?></small>
                </div>
                <?php
            }
        } else {
            echo '<div class="alert alert-info">Belum ada komentar.</div>';
        }
        ?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
