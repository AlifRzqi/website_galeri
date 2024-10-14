<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('assets/img/smkn4bogor.jpg');
        }
        .card {
            background-color: rgba(0, 0, 0, 0.7); /* Transparansi hitam */
            color:white;
        }
        .button-container {
            display: flex;
            flex-direction: column; /* or row for horizontal alignment */
            gap: 10px; /* space between buttons */
            align-items: center; /* center alignment */
        }
    </style>
</head>
<body>
<div class="container mt-4">
    <h1 class="mt-4 text-white">Kategori</h1>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="assets/img/smk4.jpg" class="card-img-top" alt="SMKN 4 BOGOR">
                <div class="card-body">
                    <h5 class="card-title">SMKN 4 BOGOR</h5>
                    <p class="card-text">Deskripsi SMKN 4 BOGOR yang lebih mendalam.</p>
                    <ul>
                        <li>Gambar Lingkungan Sekolah</li>
                    </ul>
                    <div class="button-container">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modalSMKN4">Lihat Gambar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="assets/img/pplg.jpg" class="card-img-top" alt="JURUSAN PPLG">
                <div class="card-body">
                    <h5 class="card-title">JURUSAN PPLG</h5>
                    <p class="card-text">Deskripsi Jurusan PPLG yang lebih mendalam.</p>
                    <ul>
                        <li>Gambar siswa dan lab PPLG</li>
                    </ul>
                    <div class="button-container">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modalPPLG">Lihat Gambar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="assets/img/tkr.jpg" class="card-img-top" alt="JURUSAN OTOMOTIF">
                <div class="card-body">
                    <h5 class="card-title">JURUSAN OTOMOTIF</h5>
                    <p class="card-text">Deskripsi jurusan TKR yang lebih mendalam.</p>
                    <ul>
                        <li>Siswa Otomotif</li>
                    </ul>
                    <div class="button-container">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modalTransKrab">Lihat Gambar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal untuk SMKN 4 BOGOR -->
<div class="modal fade" id="modalSMKN4" tabindex="-1" role="dialog" aria-labelledby="modalSMKN4Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalSMKN4Label">Gambar SMKN 4 BOGOR</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="assets/img/smkn4bogor.jpg" class="img-fluid" alt="Gambar SMKN 4 BOGOR">
                <!-- Tambahkan gambar lain jika perlu -->
            </div>
        </div>
    </div>
</div>

<!-- Modal untuk JURUSAN PPLG -->
<div class="modal fade" id="modalPPLG" tabindex="-1" role="dialog" aria-labelledby="modalPPLGLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalPPLGLabel">Gambar JURUSAN PPLG</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="assets/img/pplgg.jpg" class="img-fluid" alt="Gambar JURUSAN PPLG">
                <!-- Tambahkan gambar lain jika perlu -->
            </div>
        </div>
    </div>
</div>

<!-- Modal untuk Trans 4 Krab -->
<div class="modal fade" id="modalTransKrab" tabindex="-1" role="dialog" aria-labelledby="modalTransKrabLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTransKrabLabel">Gambar Siswa Otomotif</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="assets/img/tkrr.jpg" class="img-fluid" alt="Gambar Trans 4 Krab">
                <!-- Tambahkan gambar lain jika perlu -->
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>