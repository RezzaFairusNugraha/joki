<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Sekolah</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class="container">
            <a class="navbar-brand" href="/">SI Sekolah Agung</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" href="/">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="/Kelas">Kelas</a></li>
                    <li class="nav-item"><a class="nav-link" href="/Siswa">Siswa</a></li>
                    <li class="nav-item"><a class="nav-link" href="/Guru">Guru</a></li>
                    <li class="nav-item"><a class="nav-link" href="/Mata_Pelajaran">Mapel</a></li>
                    <li class="nav-item"><a class="nav-link" href="/Mapel_Diampu">Mapel Diampu</a></li>
                    <li class="nav-item"><a class="nav-link" href="/Nilai">Nilai</a></li>
                    <li class="nav-item"><a class="nav-link" href="/Berita">Berita</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1>Selamat Datang di Sistem Informasi Sekolah</h1>
        <p>Ini adalah project Laravel sederhana untuk tugas sekolah.</p>
        <hr>

        <div class="row mt-4">
            <div class="col-md-3">
                <div class="card bg-info text-white p-3">
                    <h3>Siswa</h3>
                    <h1>{{ $jumlah_siswa }}</h1>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-success text-white p-3">
                    <h3>Guru</h3>
                    <h1>{{ $jumlah_guru }}</h1>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-warning text-white p-3">
                    <h3>Kelas</h3>
                    <h1>{{ $jumlah_kelas }}</h1>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-danger text-white p-3">
                    <h3>Mapel</h3>
                    <h1>{{ $jumlah_mapel }}</h1>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <h4>Menu Cepat:</h4>
            <ul>
                <li><a href="/Siswa//editcreate">Tambah Siswa Baru</a></li>
                <li><a href="/Guru//editcreate">Tambah Guru Baru</a></li>
                <li><a href="/Berita//editcreate">Tulis Berita Baru</a></li>
            </ul>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
