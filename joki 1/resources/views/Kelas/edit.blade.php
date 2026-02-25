<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Kelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card p-4 mx-auto" style="max-width: 500px;">
            <h3>Edit Data Kelas</h3>
            <hr>
            <form action="/Kelas/{{ $kelas->id_kelas }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label>Nama Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" value="{{ $kelas->jurusan }}" required>
                </div>
                <div class="mb-3">
                    <label>Nama Kelas</label>
                    <input type="text" name="kelas" class="form-control" value="{{ $kelas->kelas }}" required>
                </div>
                <button type="submit" class="btn btn-success">Update Data</button>
                <a href="/Kelas" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</body>
</html>
