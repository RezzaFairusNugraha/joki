<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class="container">
            <a class="navbar-brand" href="/">SI Sekolah Agung</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="/Kelas">Kelas</a></li>
                    <li class="nav-item"><a class="nav-link active" href="/Siswa">Siswa</a></li>
                    <li class="nav-item"><a class="nav-link" href="/Guru">Guru</a></li>
                    <li class="nav-item"><a class="nav-link" href="/Mata_Pelajaran">Mapel</a></li>
                    <li class="nav-item"><a class="nav-link" href="/Mapel_Diampu">Mapel Diampu</a></li>
                    <li class="nav-item"><a class="nav-link" href="/Nilai">Nilai</a></li>
                    <li class="nav-item"><a class="nav-link" href="/Berita">Berita</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h3>Daftar Siswa</h3>
        <a href="/Siswa/create" class="btn btn-success mb-3">Tambah Siswa</a>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>NISN</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>L/P</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($siswa as $s)
                <tr>
                    <td>{{ $s->nisn }}</td>
                    <td>{{ $s->nama }}</td>
                    <td>{{ $s->kelas->kelas }} ({{ $s->kelas->jurusan }})</td>
                    <td>{{ $s->jenis_kelamin }}</td>
                    <td>
                        <a href="/Siswa/{{ $s->id_siswa }}/edit" class="btn btn-warning btn-sm">Edit</a>
                        <form action="/Siswa/{{ $s->id_siswa }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin hapus?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
