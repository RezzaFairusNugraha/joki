<!DOCTYPE html>
<html>
<head>
    <title>Sistem Sekolah - Edit Mata Pelajaran Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h3>Edit Mata Pelajaran Sekolah</h3>
        <hr>
        <form action="/mata_pelajaran_sekolah/{{ $item->id_mapel }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label>Nama Mata Pelajaran</label>
                <input type="text" name="nama_mapel" class="form-control" value="{{ $item->nama_mapel }}" required>
            </div>
            <div class="mb-3">
                <label>Kategori</label>
                <select name="kategori_mapel" class="form-control">
                    <option value="Umum" {{ $item->kategori_mapel == 'Umum' ? 'selected' : '' }}>Umum</option>
                    <option value="Produktif" {{ $item->kategori_mapel == 'Produktif' ? 'selected' : '' }}>Produktif</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="/mata_pelajaran_sekolah" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>
