<!DOCTYPE html>
<html>
<head>
    <title>SIAKAD - Tambah Mapel</title>
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
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="sidebar">
            <h4 class="text-center">SIAKAD</h4>
            <a href="/">Dashboard</a>
            <a href="/kelas_sekolah">Data Kelas</a>
            <a href="/pelajaran" class="active">Mata Pelajaran</a>
            <a href="/pengajar">Data Guru</a>
            <a href="/murid">Data Siswa</a>
            <a href="/pengumuman">Berita</a>
            <a href="/nilai_siswa">Nilai Siswa</a>
            <a href="/mengajar">Pengampu</a>
        </div>
        <div class="content">
            <h2>Tambah Mata Pelajaran</h2>
            <hr>

            <div class="card">
                <div class="card-body">
                    <form action="/pelajaran" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label>Nama Mata Pelajaran</label>
                            <input type="text" name="nama_pelajaran" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Tipe</label>
                            <select name="tipe" class="form-control" required>
                                <option value="Umum">Umum</option>
                                <option value="Produktif">Produktif</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="/pelajaran" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
