<!DOCTYPE html>
<html>
<head>
    <title>Tambah Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h3>Form Input Siswa</h3>
        <form action="/siswa_sekolah" method="POST">
            @csrf
            NISN: <input type="text" name="nisn_siswa" class="form-control" required><br>
            Nama: <input type="text" name="nama_siswa" class="form-control" required><br>
            Kelas: 
            <select name="id_kelas" class="form-control">
                @foreach($kelas as $k)
                    <option value="{{ $k->id_kelas }}">{{ $k->nama_kelas }}</option>
                @endforeach
            </select><br>
            Jenis Kelamin: 
            <select name="jenis_kelamin" class="form-control">
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select><br>
            Alamat: <textarea name="alamat_siswa" class="form-control"></textarea><br>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="/siswa_sekolah">Kembali</a>
        </form>
    </div>
</body>
</html>
