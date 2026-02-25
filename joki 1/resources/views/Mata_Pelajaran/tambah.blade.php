<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Mapel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card p-4 mx-auto" style="max-width: 500px;">
            <h3>Tambah Mata Pelajaran</h3>
            <hr>
            <form action="/Mata_Pelajaran" method="POST">
                @csrf
                <div class="mb-3">
                    <label>Nama Mata Pelajaran</label>
                    <input type="text" name="nama_mapel" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Kategori</label>
                    <select name="kategori" class="form-control">
                        <option value="Umum">Umum</option>
                        <option value="Produktif">Produktif</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="/Mata_Pelajaran" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</body>
</html>
