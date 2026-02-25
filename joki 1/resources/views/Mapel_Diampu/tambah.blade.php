<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Pembagian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card p-4 mx-auto" style="max-width: 500px;">
            <h3>Tambah Pembagian Mapel</h3>
            <hr>
            <form action="/Mapel_Diampu" method="POST">
                @csrf
                <div class="mb-3">
                    <label>Pilih Guru</label>
                    <select name="id_guru" class="form-control" required>
                        @foreach($guru as $g)
                            <option value="{{ $g->id_guru }}">{{ $g->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label>Pilih Mata Pelajaran</label>
                    <select name="id_mapel" class="form-control" required>
                        @foreach($mapel as $m)
                            <option value="{{ $m->id_mapel }}">{{ $m->nama_mapel }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label>Pilih Kelas</label>
                    <select name="id_kelas" class="form-control" required>
                        @foreach($kelas as $k)
                            <option value="{{ $k->id_kelas }}">{{ $k->kelas }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="/Mapel_Diampu" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</body>
</html>
