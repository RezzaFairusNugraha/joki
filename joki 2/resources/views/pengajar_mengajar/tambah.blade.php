<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tugas Mengajar - Reyka</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-sm mx-auto border-0 border-top border-5 border-primary" style="max-width: 600px;">
            <div class="card-header bg-white fw-bold">Plotting Tugas Pengajar</div>
            <div class="card-body">
                <form action="/pengajar_mengajar" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label>Guru</label>
                        <select name="pengajar_id" class="form-select">
                            @foreach($pengajar as $p)
                                <option value="{{ $p->pengajar_id }}">{{ $p->nama_pengajar }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Mapel</label>
                        <select name="mapel_id" class="form-select">
                            @foreach($mapel as $m)
                                <option value="{{ $m->mapel_id }}">{{ $m->nama_pelajaran }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Kelas</label>
                        <select name="kelas_id" class="form-select">
                            @foreach($kelas as $k)
                                <option value="{{ $k->kelas_id }}">{{ $k->nama_kelas }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Berikan Tugas</button>
                    <a href="/pengajar_mengajar" class="btn btn-link w-100 mt-2">Balik</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
