<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Input Nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card p-4 mx-auto" style="max-width: 500px;">
            <h3>Input Nilai Siswa</h3>
            <hr>
            <form action="/Nilai" method="POST">
                @csrf
                <div class="mb-3">
                    <label>Pilih Siswa</label>
                    <select name="id_siswa" class="form-control" required>
                        @foreach($siswa as $s)
                            <option value="{{ $s->id_siswa }}">{{ $s->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label>Pilih Mapel</label>
                    <select name="id_mapel" class="form-control" required>
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
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="/Nilai" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</body>
</html>
