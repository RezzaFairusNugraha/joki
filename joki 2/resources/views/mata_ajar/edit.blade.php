<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Mapel - Reyka</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-sm mx-auto border-0 border-top border-5 border-primary" style="max-width: 500px;">
            <div class="card-header bg-white fw-bold">Ubah Mata Pelajaran</div>
            <div class="card-body">
                <form action="/mata_ajar/{{ $item->mapel_id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label>Nama Pelajaran</label>
                        <input type="text" name="nama_pelajaran" class="form-control" value="{{ $item->nama_pelajaran }}" required>
                    </div>
                    <div class="mb-3">
                        <label>Kategori</label>
                        <select name="jenis_mapel" class="form-select">
                            <option value="Umum" {{ $item->jenis_mapel == 'Umum' ? 'selected' : '' }}>Umum</option>
                            <option value="Produktif" {{ $item->jenis_mapel == 'Produktif' ? 'selected' : '' }}>Produktif</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Simpan Perubahan</button>
                    <a href="/mata_ajar" class="btn btn-link w-100 mt-2 text-muted">Batal</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
