<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Mapel - Reyka</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-sm mx-auto border-0 border-top border-5 border-primary" style="max-width: 500px;">
            <div class="card-header bg-white fw-bold">Mata Pelajaran Baru</div>
            <div class="card-body">
                <form action="/mata_ajar" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label>Nama Pelajaran</label>
                        <input type="text" name="nama_pelajaran" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Jenis Mapel</label>
                        <select name="jenis_mapel" class="form-select">
                            <option value="Umum">Umum</option>
                            <option value="Produktif">Produktif</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Simpan Mata Pelajaran</button>
                    <a href="/mata_ajar" class="btn btn-link w-100 mt-2">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
