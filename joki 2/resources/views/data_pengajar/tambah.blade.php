<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Pengajar - Reyka</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-sm mx-auto border-0 border-top border-5 border-primary" style="max-width: 600px;">
            <div class="card-header bg-white fw-bold">Input Data Pengajar</div>
            <div class="card-body">
                <form action="/data_pengajar" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label>NIP</label>
                        <input type="text" name="nip_pengajar" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Nama Pengajar</label>
                        <input type="text" name="nama_pengajar" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-select">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email_pengajar" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Simpan Pengajar</button>
                    <a href="/data_pengajar" class="btn btn-link w-100 mt-2">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
