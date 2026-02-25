<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Pengajar - Reyka</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-sm mx-auto border-0 border-top border-5 border-primary" style="max-width: 600px;">
            <div class="card-header bg-white fw-bold">Edit Data Pengajar</div>
            <div class="card-body">
                <form action="/data_pengajar/{{ $item->pengajar_id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label>NIP</label>
                        <input type="text" class="form-control" value="{{ $item->nip_pengajar }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label>Nama Pengajar</label>
                        <input type="text" name="nama_pengajar" class="form-control" value="{{ $item->nama_pengajar }}" required>
                    </div>
                    <div class="mb-3">
                        <label>Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-select">
                            <option value="Laki-laki" {{ $item->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="Perempuan" {{ $item->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email_pengajar" class="form-control" value="{{ $item->email_pengajar }}">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Update Data</button>
                    <a href="/data_pengajar" class="btn btn-link w-100 mt-2">Batal</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
