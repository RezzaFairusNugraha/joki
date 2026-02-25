<!DOCTYPE html>
<html>
<head>
    <title>Sistem Sekolah - Edit Guru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h3>Form Edit Guru</h3>
        <hr>
        <form action="/guru_sekolah/{{ $item->id_guru }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label>NIP (Tetap)</label>
                <input type="text" class="form-control" value="{{ $item->nip_guru }}" disabled>
            </div>
            <div class="mb-3">
                <label>Nama Lengkap</label>
                <input type="text" name="nama_guru" class="form-control" value="{{ $item->nama_guru }}" required>
            </div>
            <div class="mb-3">
                <label>Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control">
                    <option value="Laki-laki" {{ $item->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="Perempuan" {{ $item->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email_guru" class="form-control" value="{{ $item->email_guru }}">
            </div>
            <div class="mb-3">
                <label>No HP</label>
                <input type="text" name="no_hp_guru" class="form-control" value="{{ $item->no_hp_guru }}">
            </div>
            <button type="submit" class="btn btn-primary">Update Data</button>
            <a href="/guru_sekolah" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>
