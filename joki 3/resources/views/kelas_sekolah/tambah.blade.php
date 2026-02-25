<!DOCTYPE html>
<html>
<head>
    <title>Sistem Sekolah - Tambah Kelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h3>Form Tambah Kelas</h3>
        <hr>
        <form action="/kelas_sekolah" method="POST">
            @csrf
            <div class="mb-3">
                <label>Nama Jurusan</label>
                <input type="text" name="jurusan_kelas" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Nama Kelas</label>
                <input type="text" name="nama_kelas" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Kelas</button>
            <a href="/kelas_sekolah" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>
