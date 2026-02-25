<!DOCTYPE html>
<html>
<head>
    <title>SIAKAD - Edit Data Ampu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; margin: 0; }
        .wrapper { display: flex; min-height: 100vh; }
        .sidebar { width: 250px; background: #2c3e50; color: white; padding-top: 20px; flex-shrink: 0; }
        .sidebar h4 { text-align: center; margin-bottom: 20px; }
        .sidebar a { padding: 12px 20px; display: block; color: #ecf0f1; text-decoration: none; border-bottom: 1px solid #34495e; }
        .sidebar a:hover { background: #34495e; }
        .sidebar a.active { background: #2980b9; }
        .content { flex: 1; padding: 30px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="sidebar">
            <h4 class="text-center">SIAKAD</h4>
            <a href="/">Dashboard</a>
            <a href="/kelas_sekolah">Data Kelas</a>
            <a href="/pelajaran">Mata Pelajaran</a>
            <a href="/pengajar">Data Guru</a>
            <a href="/murid">Data Siswa</a>
            <a href="/pengumuman">Berita</a>
            <a href="/nilai_siswa">Nilai Siswa</a>
            <a href="/mengajar" class="active">Pengampu</a>
        </div>
        <div class="content">
            <h2>Edit Data Ampu</h2>
            <hr>

            <div class="card">
                <div class="card-body">
                    <form action="/mengajar/{{ $ampu->id_mengajar }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label>Pengajar</label>
                            <select name="id_pengajar" class="form-control" required>
                                @foreach($gurus as $g)
                                    <option value="{{ $g->id_pengajar }}" {{ $ampu->id_pengajar == $g->id_pengajar ? 'selected' : '' }}>{{ $g->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Kelas</label>
                            <select name="id_kelas" class="form-control" required>
                                @foreach($kelases as $k)
                                    <option value="{{ $k->id_kelas }}" {{ $ampu->id_kelas == $k->id_kelas ? 'selected' : '' }}>{{ $k->nama_kelas }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Pelajaran</label>
                            <select name="id_pelajaran" class="form-control" required>
                                @foreach($mapels as $m)
                                    <option value="{{ $m->id_pelajaran }}" {{ $ampu->id_pelajaran == $m->id_pelajaran ? 'selected' : '' }}>{{ $m->nama_pelajaran }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="/mengajar" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
