<!DOCTYPE html>
<html>
<head>
    <title>SIAKAD - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; margin: 0; }
        .wrapper { display: flex; min-height: 100vh; }
        .sidebar { width: 250px; background: #2c3e50; color: white; padding-top: 20px; flex-shrink: 0; }
        .sidebar h4 { text-align: center; margin-bottom: 20px; }
        .sidebar a { padding: 12px 20px; display: block; color: #ecf0f1; text-decoration: none; border-bottom: 1px solid #34495e; }
        .sidebar a:hover { background: #34495e; }
        .sidebar a.active { background: #2980b9; }
        .content { flex: 1; padding: 30px; }
        .stats-box { background: white; padding: 20px; border: 1px solid #ddd; border-radius: 5px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="sidebar">
            <h4 class="text-center">SIAKAD</h4>
            <a href="/" class="active">Dashboard</a>
            <a href="/kelas_sekolah">Data Kelas</a>
            <a href="/pelajaran">Mata Pelajaran</a>
            <a href="/pengajar">Data Pengajar</a>
            <a href="/murid">Data Murid</a>
            <a href="/pengumuman">Pengumuman</a>
            <a href="/nilai_siswa">Nilai Siswa</a>
            <a href="/mengajar">Pengampu</a>
        </div>
        <div class="content">
            <div class="alert alert-info">
                Selamat Datang, Admin! Anda sedang berada di Dashboard SIAKAD 4.
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="stats-box">
                        <h5>Ringkasan Data:</h5>
                        <hr>
                        <table class="table table-sm">
                            <tr>
                                <td>TOTAL SISWA</td>
                                <td>:</td>
                                <td><strong>{{ $totalSiswa }} Orang</strong></td>
                            </tr>
                            <tr>
                                <td>TOTAL GURU</td>
                                <td>:</td>
                                <td><strong>{{ $totalGuru }} Orang</strong></td>
                            </tr>
                            <tr>
                                <td>TOTAL KELAS</td>
                                <td>:</td>
                                <td><strong>{{ $totalKelas }} Kelas</strong></td>
                            </tr>
                            <tr>
                                <td>TOTAL MAPEL</td>
                                <td>:</td>
                                <td><strong>{{ $totalMapel }} Pelajaran</strong></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card h-100">
                        <div class="card-header bg-dark text-white">Informasi</div>
                        <div class="card-body">
                            <p>Gunakan menu di sebelah kiri untuk mengelola data sekolah secara mandiri.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
</html>
