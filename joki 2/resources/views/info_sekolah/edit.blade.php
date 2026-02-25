<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Info - Reyka</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-sm mx-auto border-0 border-top border-5 border-primary" style="max-width: 800px;">
            <div class="card-header bg-white fw-bold">Edit Posting Berita</div>
            <div class="card-body">
                <form action="/info_sekolah/{{ $item->berita_id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label>Judul Berita</label>
                        <input type="text" name="judul_berita" class="form-control" value="{{ $item->judul_berita }}" required>
                    </div>
                    <div class="mb-3">
                        <label>Penulis</label>
                        <select name="pengajar_id" class="form-select">
                            @foreach($pengajar as $p)
                                <option value="{{ $p->pengajar_id }}" {{ $p->pengajar_id == $item->pengajar_id ? 'selected' : '' }}>{{ $p->nama_pengajar }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Isi Berita</label>
                        <textarea name="isi_berita" class="form-control" rows="8" required>{{ $item->isi_berita }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Update Artikel</button>
                    <a href="/info_sekolah" class="btn btn-link w-100 mt-2">Batal</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
