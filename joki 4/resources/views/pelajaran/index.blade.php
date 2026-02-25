<!DOCTYPE html>
<html>
<head>
    <title>SIAKAD - Mata Pelajaran</title>
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
            <a href="/pelajaran" class="active">Mata Pelajaran</a>
            <a href="/pengajar">Data Guru</a>
            <a href="/murid">Data Siswa</a>
            <a href="/pengumuman">Berita</a>
            <a href="/nilai_siswa">Nilai Siswa</a>
            <a href="/mengajar">Pengampu</a>
        </div>
        <div class="content">
            <h2 class="d-flex justify-content-between">
                Mata Pelajaran
                <a href="/pelajaran/create" class="btn btn-primary btn-sm">Tambah Mapel</a>
            </h2>
            <hr>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Mapel</th>
                        <th>Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mapels as $index => $m)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $m->nama_pelajaran }}</td>
                        <td>{{ $m->tipe }}</td>
                        <td>
                            <a href="/pelajaran/{{ $m->id_pelajaran }}/edit" class="btn btn-sm btn-warning">Edit</a>
                            <form action="/pelajaran/{{ $m->id_pelajaran }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin hapus?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
