<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Guru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <div class="card p-4 mx-auto" style="max-width: 600px;">
            <h3>Edit Data Guru</h3>
            <hr>
            <form action="/Guru/{{ $guru->id_guru }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label>NIP (Tidak bisa diubah)</label>
                    <input type="text" value="{{ $guru->nip }}" class="form-control" disabled>
                </div>
                <div class="mb-3">
                    <label>Nama Guru</label>
                    <input type="text" name="nama" class="form-control" value="{{ $guru->nama }}" required>
                </div>
                <div class="mb-3">
                    <label>Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control">
                        <option value="Laki-laki" {{ $guru->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="Perempuan" {{ $guru->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="{{ $guru->email }}">
                </div>
                <div class="mb-3">
                    <label>No HP</label>
                    <input type="text" name="no_hp" class="form-control" value="{{ $guru->no_hp }}">
                </div>
                <button type="submit" class="btn btn-success">Update Guru</button>
                <a href="/Guru" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</body>
</html>
