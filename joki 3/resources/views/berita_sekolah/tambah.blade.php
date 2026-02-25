<!DOCTYPE html>
<html>
<head>
    <title>Sistem Sekolah - Tambah Berita Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h3>Berita Sekolah</h3>
        <hr>
        <form action="/berita_sekolah" method="POST">
            @csrf
            <div class="mb-3">
                <label>Judul Berita</label>
                <input type="text" name="judul" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Penulis (Guru)</label>
                <select name="id_guru" class="form-control">
                    @foreach($guru as $g)
                        <option value="{{ $g->id_guru }}">{{ $g->nama_guru }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label>Konten Berita</label>
                <textarea name="isi" class="form-control" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Publikasikan</button>
            <a href="/berita_sekolah" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>
