<!DOCTYPE html>
<html>
<head>
    <title>Sistem Sekolah - Tambah Mata Pelajaran Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h3>Tambah Mata Pelajaran Sekolah</h3>
        <hr>
        <form action="/mata_pelajaran_sekolah" method="POST">
            @csrf
            <div class="mb-3">
                <label>Nama Mata Pelajaran</label>
                <input type="text" name="nama_mapel" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Kategori</label>
                <select name="kategori_mapel" class="form-control">
                    <option value="Umum">Umum</option>
                    <option value="Produktif">Produktif</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="/mata_pelajaran_sekolah" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>
