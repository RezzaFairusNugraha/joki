<!DOCTYPE html>
<html>
<head>
    <title>Sistem Sekolah - Edit Berita Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h3>Berita Sekolah</h3>
        <hr>
        <form action="/berita_sekolah/{{ $item->id_berita }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label>Judul Berita</label>
                <input type="text" name="judul" class="form-control" value="{{ $item->judul }}" required>
            </div>
            <div class="mb-3">
                <label>Isi/Konten</label>
                <textarea name="isi" class="form-control" rows="5" required>{{ $item->isi }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Berita</button>
            <a href="/berita_sekolah" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>
