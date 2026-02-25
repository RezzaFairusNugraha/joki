<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Kelas - Reyka</title>
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
        <h3>Data Kelas Sekolah</h3>
        <a href="/" class="btn btn-secondary btn-sm mb-3">Kembali ke Home</a>
        <a href="/data_kelas/create" class="btn btn-primary btn-sm mb-3">Tambah Kelas</a>

        <div class="card p-3 shadow-sm border-0 border-top border-5 border-primary">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Jurusan</th>
                        <th>Nama Kelas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $k)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $k->nama_jurusan }}</td>
                        <td>{{ $k->nama_kelas }}</td>
                        <td>
                            <a href="/data_kelas/{{ $k->kelas_id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <form action="/data_kelas/{{ $k->kelas_id }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin hapus?')">
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
