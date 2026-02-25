<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card p-4 mx-auto" style="max-width: 700px;">
            <h3>Edit Berita</h3>
            <hr>
            <form action="/Berita/{{ $berita->id_berita }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label>Judul Berita</label>
                    <input type="text" name="judul" class="form-control" value="{{ $berita->judul }}" required>
                </div>
                <div class="mb-3">
                    <label>Isi Berita</label>
                    <textarea name="isi" class="form-control" rows="5" required>{{ $berita->isi }}</textarea>
                </div>
                <div class="mb-3">
                    <label>Penulis (Guru)</label>
                    <select name="id_guru" class="form-control" required>
                        @foreach($guru as $g)
                            <option value="{{ $g->id_guru }}" {{ $g->id_guru == $berita->id_guru ? 'selected' : '' }}>{{ $g->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Update</button>
                <a href="/Berita" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</body>
</html>
