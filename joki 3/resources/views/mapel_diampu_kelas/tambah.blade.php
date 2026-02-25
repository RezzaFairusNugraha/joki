<!DOCTYPE html>
<html>
<head>
    <title>Sistem Sekolah - Tambah Mapel Diampu Kelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h3>Mapel Diampu Kelas</h3>
        <hr>
        <form action="/mapel_diampu_kelas" method="POST">
            @csrf
            <div class="mb-3">
                <label>Pilih Guru</label>
                <select name="id_guru" class="form-control">
                    @foreach($guru as $g)
                        <option value="{{ $g->id_guru }}">{{ $g->nama_guru }}</option>
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
                <label>Pilih Kelas</label>
                <select name="id_kelas" class="form-control">
                    @foreach($kelas as $k)
                        <option value="{{ $k->id_kelas }}">{{ $k->nama_kelas }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Atur Tugas</button>
            <a href="/mapel_diampu_kelas" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>
