<!DOCTYPE html>
<html>
<head>
    <title>Sistem Sekolah - Tambah Nilai Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h3>Nilai Siswa</h3>
        <hr>
        <form action="/nilai_siswa" method="POST">
            @csrf
            <div class="mb-3">
                <label>Nama Siswa</label>
                <select name="id_siswa" class="form-control">
                    @foreach($siswa as $s)
                        <option value="{{ $s->id_siswa }}">{{ $s->nama_siswa }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label>Pilih Mata Pelajaran</label>
                <select name="id_mapel" class="form-control">
                    @foreach($mapel as $m)
                        <option value="{{ $m->id_mapel }}">{{ $m->nama_mapel }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label>Nilai UTS</label>
                <input type="number" name="nilai_uts" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Nilai UAS</label>
                <input type="number" name="nilai_uas" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Nilai</button>
            <a href="/nilai_siswa" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>
