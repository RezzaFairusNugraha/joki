<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <div class="card p-4 mx-auto" style="max-width: 600px;">
            <h3>Edit Data Siswa</h3>
            <hr>
            <form action="/Siswa/{{ $siswa->id_siswa }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label>NISN (Tidak bisa diubah)</label>
                    <input type="text" value="{{ $siswa->nisn }}" class="form-control" disabled>
                </div>
                <div class="mb-3">
                    <label>Nama Siswa</label>
                    <input type="text" name="nama" class="form-control" value="{{ $siswa->nama }}" required>
                </div>
                <div class="mb-3">
                    <label>Pilih Kelas</label>
                    <select name="id_kelas" class="form-control" required>
                        @foreach($kelas as $k)
                            <option value="{{ $k->id_kelas }}" {{ $k->id_kelas == $siswa->id_kelas ? 'selected' : '' }}>
                                {{ $k->kelas }} - {{ $k->jurusan }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label>Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control">
                        <option value="Laki-laki" {{ $siswa->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="Perempuan" {{ $siswa->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control">{{ $siswa->alamat }}</textarea>
                </div>
                <div class="mb-3">
                    <label>No HP</label>
                    <input type="text" name="no_hp" class="form-control" value="{{ $siswa->no_hp }}">
                </div>
                <div class="mb-3">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control" value="{{ $siswa->tanggal_lahir }}">
                </div>
                <button type="submit" class="btn btn-success">Update Siswa</button>
                <a href="/Siswa" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</body>
</html>
