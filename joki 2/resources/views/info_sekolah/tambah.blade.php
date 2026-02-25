<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tulis Berita - Reyka</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-sm mx-auto border-0 border-top border-5 border-primary" style="max-width: 800px;">
            <div class="card-header bg-white fw-bold">Posting Pengumuman</div>
            <div class="card-body">
                <form action="/info_sekolah" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label>Judul Artikel</label>
                        <input type="text" name="judul_berita" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Penulis</label>
                        <select name="pengajar_id" class="form-select">
                            @foreach($pengajar as $p)
                                <option value="{{ $p->pengajar_id }}">{{ $p->nama_pengajar }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Konten</label>
                        <textarea name="isi_berita" class="form-control" rows="8" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Publish Berita</button>
                    <a href="/info_sekolah" class="btn btn-link w-100 mt-2">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
