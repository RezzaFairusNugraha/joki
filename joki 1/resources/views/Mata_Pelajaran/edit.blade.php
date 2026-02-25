<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Mapel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card p-4 mx-auto" style="max-width: 500px;">
            <h3>Edit Mata Pelajaran</h3>
            <hr>
            <form action="/Mata_Pelajaran/{{ $mapel->id_mapel }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label>Nama Mata Pelajaran</label>
                    <input type="text" name="nama_mapel" value="{{ $mapel->nama_mapel }}" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Kategori</label>
                    <select name="kategori" class="form-control">
                        <option value="Umum" {{ $mapel->kategori == 'Umum' ? 'selected' : '' }}>Umum</option>
                        <option value="Produktif" {{ $mapel->kategori == 'Produktif' ? 'selected' : '' }}>Produktif</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Update</button>
                <a href="/Mata_Pelajaran" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</body>
</html>
