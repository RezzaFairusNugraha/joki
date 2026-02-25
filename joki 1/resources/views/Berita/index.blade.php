<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Berita Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class="container">
            <a class="navbar-brand" href="/">SI Sekolah Agung</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="/Kelas">Kelas</a></li>
                    <li class="nav-item"><a class="nav-link" href="/Siswa">Siswa</a></li>
                    <li class="nav-item"><a class="nav-link" href="/Guru">Guru</a></li>
                    <li class="nav-item"><a class="nav-link" href="/Mata_Pelajaran">Mapel</a></li>
                    <li class="nav-item"><a class="nav-link" href="/Mapel_Diampu">Mapel Diampu</a></li>
                    <li class="nav-item"><a class="nav-link" href="/Nilai">Nilai</a></li>
                    <li class="nav-item"><a class="nav-link active" href="/Berita">Berita</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h3>Berita Sekolah</h3>
        <a href="/Berita/create" class="btn btn-success mb-3">Tulis Berita</a>

        @foreach($berita as $b)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $b->judul }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Oleh: {{ $b->guru->nama }} | {{ $b->tanggal_post }}</h6>
                <p class="card-text">{{ $b->isi }}</p>
                <a href="/Berita/{{ $b->id_berita }}/edit" class="btn btn-warning btn-sm">Edit</a>
                <form action="/Berita/{{ $b->id_berita }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin hapus?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</body>
</html>
