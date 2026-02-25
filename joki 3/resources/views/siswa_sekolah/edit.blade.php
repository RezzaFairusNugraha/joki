<!DOCTYPE html>
<html>
<head>
    <title>Edit Siswa - Majid School</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h3>Halaman Edit Siswa</h3>
        <hr>
        <form action="/siswa_sekolah/{{ $item->id_siswa }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label>NISN (Tidak bisa diubah)</label>
                <input type="text" class="form-control" value="{{ $item->nisn_siswa }}" disabled>
            </div>
            <div class="mb-3">
                <label>Nama Lengkap</label>
                <input type="text" name="nama_siswa" class="form-control" value="{{ $item->nama_siswa }}" required>
            </div>
            <div class="mb-3">
                <label>Pilih Kelas</label>
                <select name="id_kelas" class="form-control">
                    @foreach($kelas as $k)
                        <option value="{{ $k->id_kelas }}" {{ $k->id_kelas == $item->id_kelas ? 'selected' : '' }}>{{ $k->nama_kelas }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label>Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control">
                    <option value="Laki-laki" {{ $item->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="Perempuan" {{ $item->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label>Alamat</label>
                <textarea name="alamat_siswa" class="form-control">{{ $item->alamat_siswa }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="/siswa_sekolah" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>
