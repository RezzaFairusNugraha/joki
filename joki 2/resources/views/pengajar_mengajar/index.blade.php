<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tugas Mengajar - Reyka</title>
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

    <div class="container mt-4">
        <h3>Penugasan Guru Mengajar</h3>
        <a href="/" class="btn btn-secondary btn-sm mb-3">Balik Home</a>
        <a href="/pengajar_mengajar/create" class="btn btn-primary btn-sm mb-3">Tambah Tugas</a>

        <div class="card p-3 shadow-sm border-0 border-top border-5 border-primary">
            <table class="table table-bordered bg-white shadow-sm">
                <thead class="table-dark">
                    <tr>
                        <th>GURU</th>
                        <th>MAPEL</th>
                        <th>KELAS</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                @foreach($list as $l)
                <tr>
                    <td>{{ $l->pengajar->nama_pengajar }}</td>
                    <td>{{ $l->mataAjar->nama_pelajaran }}</td>
                    <td>{{ $l->kelas->nama_kelas }}</td>
                    <td>
                        <form action="/pengajar_mengajar/{{ $l->mengajar_id }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin hapus?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>
</html>
