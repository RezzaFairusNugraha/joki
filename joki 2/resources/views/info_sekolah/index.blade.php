<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Berita - Reyka</title>
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
        <h3>Informasi & Berita Sekolah</h3>
        <a href="/" class="btn btn-sm btn-secondary mb-3">Balik</a>
        <a href="/info_sekolah/create" class="btn btn-sm btn-primary mb-3">Tulis Info</a>

        @foreach($feeds as $f)
        <div class="card mb-3 border-0 border-top border-5 border-primary shadow-sm">
            <div class="card-header bg-white fw-bold">
                {{ $f->judul_berita }}
            </div>
            <div class="card-body">
                <p>{{ $f->isi_berita }}</p>
                <small class="text-muted">Penulis: {{ $f->pengajar->nama_pengajar }} | {{ $f->tanggal_upload }}</small>
                <hr>
                <form action="/info_sekolah/{{ $f->berita_id }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin hapus?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                </form>
                <a href="/info_sekolah/{{ $f->berita_id }}/edit" class="btn btn-warning btn-sm">Edit</a>
            </div>
        </div>
        @endforeach
    </div>
</body>
</html>
