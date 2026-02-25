<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Murid - Reyka</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-sm mx-auto border-0 border-top border-5 border-primary" style="max-width: 600px;">
            <div class="card-header bg-white fw-bold">Edit Identitas Murid</div>
            <div class="card-body">
                <form action="/data_murid/{{ $item->murid_id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label>Pilih Kelas</label>
                        <select name="kelas_id" class="form-select">
                            @foreach($kelas as $k)
                                <option value="{{ $k->kelas_id }}" {{ $k->kelas_id == $item->kelas_id ? 'selected' : '' }}>{{ $k->nama_kelas }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama_murid" class="form-control" value="{{ $item->nama_murid }}" required>
                    </div>
                    <div class="mb-3">
                        <label>Jenis Kelamin</label>
                        <select name="jk" class="form-select">
                            <option value="Laki-laki" {{ $item->jk == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="Perempuan" {{ $item->jk == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Alamat</label>
                        <textarea name="alamat_rumah" class="form-control" rows="3">{{ $item->alamat_rumah }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Update Murid</button>
                    <a href="/data_murid" class="btn btn-link w-100 mt-2">Batal</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
