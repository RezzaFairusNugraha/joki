<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Siswa / Murid - Reyka</title>
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
        <h3>Daftar Murid</h3>
        <a href="/" class="btn btn-secondary btn-sm mb-3">Home</a>
        <a href="/data_murid/create" class="btn btn-primary btn-sm mb-3">Registrasi Baru</a>

        <div class="card p-3 shadow-sm border-0 border-top border-5 border-primary">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $m)
                    <tr>
                        <td>{{ $m->nomor_induk }}</td>
                        <td>{{ $m->nama_murid }}</td>
                        <td>{{ $m->kelas->nama_kelas }}</td>
                        <td>
                            <a href="/data_murid/{{ $m->murid_id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <form action="/data_murid/{{ $m->murid_id }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin hapus?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
