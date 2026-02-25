<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Kelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card p-4 mx-auto" style="max-width: 500px;">
            <h3>Tambah Kelas Baru</h3>
            <hr>
            <form action="/Kelas" method="POST">
                @csrf <!-- Token keamanan Laravel -->
                <div class="mb-3">
                    <label>Nama Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" placeholder="Contoh: RPL" required>
                </div>
                <div class="mb-3">
                    <label>Nama Kelas</label>
                    <input type="text" name="kelas" class="form-control" placeholder="Contoh: XII RPL 1" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan Data</button>
                <a href="/Kelas" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</body>
</html>
