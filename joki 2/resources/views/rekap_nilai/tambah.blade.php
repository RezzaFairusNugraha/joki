<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Input Nilai - Reyka</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-sm mx-auto border-0 border-top border-5 border-primary" style="max-width: 600px;">
            <div class="card-header bg-white fw-bold">Input Nilai Siswa</div>
            <div class="card-body">
                <form action="/rekap_nilai" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label>Pilih Murid</label>
                        <select name="murid_id" class="form-select">
                            @foreach($murid as $m)
                                <option value="{{ $m->murid_id }}">{{ $m->nama_murid }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Mata Pelajaran</label>
                        <select name="mapel_id" class="form-select">
                            @foreach($mapel as $mp)
                                <option value="{{ $mp->mapel_id }}">{{ $mp->nama_pelajaran }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Nilai Tengah</label>
                            <input type="number" name="nilai_tengah" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Nilai Akhir</label>
                            <input type="number" name="nilai_akhir_semester" class="form-control" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Simpan Nilai</button>
                    <a href="/rekap_nilai" class="btn btn-link w-100 mt-2">Batal</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
