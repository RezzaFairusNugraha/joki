<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Sekolah Reyka</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="/">🏠 SEKOLAH REYKA</a>
            <div class="navbar-nav">
                <a class="nav-link" href="/data_kelas">Data Kelas</a>
                <a class="nav-link" href="/data_murid">Data Murid</a>
                <a class="nav-link" href="/data_pengajar">Data Pengajar</a>
                <a class="nav-link" href="/mata_ajar">Mata Ajar</a>
                <a class="nav-link" href="/pengajar_mengajar">Penugasan</a>
                <a class="nav-link" href="/rekap_nilai">Rekap Nilai</a>
                <a class="nav-link" href="/info_sekolah">Info Sekolah</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="p-5 mb-4 bg-white rounded-3 shadow-sm border-top border-5 border-primary">
            <h1>Selamat Datang di Sistem Sekolah Reyka</h1>
            <p>Ini adalah halaman utama untuk mengelola data sekolah secara sederhana.</p>
            <hr>
            <div class="row text-center mt-4">
                <div class="col-md-3">
                    <div class="border p-3">
                        <h3 class="text-primary">{{ $statistik['murid'] }}</h3>
                        <p>Total Murid</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="border p-3">
                        <h3 class="text-primary">{{ $statistik['pengajar'] }}</h3>
                        <p>Total Pengajar</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="border p-3">
                        <h3 class="text-primary">{{ $statistik['kelas'] }}</h3>
                        <p>Total Kelas</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="border p-3">
                        <h3 class="text-primary">{{ $statistik['mapel'] }}</h3>
                        <p>Total Mapel</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
