<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Kelas - Reyka</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-sm mx-auto border-0 border-top border-5 border-primary" style="max-width: 500px;">
            <div class="card-header bg-white fw-bold">Ubah Data Kelas</div>
            <div class="card-body">
                <form action="/data_kelas/{{ $item->kelas_id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label>Nama Jurusan</label>
                        <input type="text" name="nama_jurusan" class="form-control" value="{{ $item->nama_jurusan }}" required>
                    </div>
                    <div class="mb-3">
                        <label>Nama Kelas</label>
                        <input type="text" name="nama_kelas" class="form-control" value="{{ $item->nama_kelas }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Simpan Perubahan</button>
                    <a href="/data_kelas" class="btn btn-link w-100 mt-2 text-muted">Batal</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
