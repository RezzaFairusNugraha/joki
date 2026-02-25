<!DOCTYPE html>
<html>
<head>
    <title>Sistem Sekolah - Tambah Guru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h3>Form Tambah Guru</h3>
        <hr>
        <form action="/guru_sekolah" method="POST">
            @csrf
            <div class="mb-3">
                <label>NIP Guru</label>
                <input type="text" name="nip_guru" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Nama Lengkap</label>
                <input type="text" name="nama_guru" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email_guru" class="form-control">
            </div>
            <div class="mb-3">
                <label>No HP</label>
                <input type="text" name="no_hp_guru" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Simpan Data</button>
            <a href="/guru_sekolah" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>
