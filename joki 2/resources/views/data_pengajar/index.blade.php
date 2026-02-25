<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pengajar - Reyka</title>
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
        <h3>Daftar Guru Pengajar</h3>
        <a href="/" class="btn btn-secondary btn-sm mb-3">Beranda</a>
        <a href="/data_pengajar/create" class="btn btn-primary btn-sm mb-3">Tambah Pengajar</a>

        <div class="card p-3 shadow-sm border-0 border-top border-5 border-primary">
            <table class="table table-bordered text-center">
                <thead class="table-dark">
                    <tr>
                        <th>NIP</th>
                        <th>NAMA</th>
                        <th>EMAIL</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($list as $p)
                    <tr>
                        <td>{{ $p->nip_pengajar }}</td>
                        <td>{{ $p->nama_pengajar }}</td>
                        <td>{{ $p->email_pengajar }}</td>
                        <td>
                            <a href="/data_pengajar/{{ $p->pengajar_id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <form action="/data_pengajar/{{ $p->pengajar_id }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin hapus?')">
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
