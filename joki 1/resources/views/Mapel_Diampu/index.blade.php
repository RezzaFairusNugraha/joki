<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mapel Diampu</title>
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
                    <li class="nav-item"><a class="nav-link" href="/Siswa">Siswa</a></li>
                    <li class="nav-item"><a class="nav-link" href="/Guru">Guru</a></li>
                    <li class="nav-item"><a class="nav-link" href="/Mata_Pelajaran">Mapel</a></li>
                    <li class="nav-item"><a class="nav-link active" href="/Mapel_Diampu">Mapel Diampu</a></li>
                    <li class="nav-item"><a class="nav-link" href="/Nilai">Nilai</a></li>
                    <li class="nav-item"><a class="nav-link" href="/Berita">Berita</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h3>Pembagian Tugas Mengajar (Mapel Diampu)</h3>
        <a href="/Mapel_Diampu/create" class="btn btn-success mb-3">Tambah Pembagian</a>

        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Guru</th>
                    <th>Mapel</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ampu as $a)
                <tr>
                    <td>{{ $a->guru->nama }}</td>
                    <td>{{ $a->mataPelajaran->nama_mapel }}</td>
                    <td>{{ $a->kelas->kelas }}</td>
                    <td>
                        <a href="/Mapel_Diampu/{{ $a->id_ampu }}/edit" class="btn btn-warning btn-sm">Edit</a>
                        <form action="/Mapel_Diampu/{{ $a->id_ampu }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin hapus?')">
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
