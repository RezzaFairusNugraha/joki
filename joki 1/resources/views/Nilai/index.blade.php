<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Nilai</title>
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
                    <li class="nav-item"><a class="nav-link" href="/Mapel_Diampu">Mapel Diampu</a></li>
                    <li class="nav-item"><a class="nav-link active" href="/Nilai">Nilai</a></li>
                    <li class="nav-item"><a class="nav-link" href="/Berita">Berita</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h3>Daftar Nilai Siswa</h3>
        <a href="/Nilai/create" class="btn btn-success mb-3">Input Nilai</a>

        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Siswa</th>
                    <th>Mapel</th>
                    <th>UTS</th>
                    <th>UAS</th>
                    <th>Akhir</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($nilai as $n)
                <tr>
                    <td>{{ $n->siswa->nama }}</td>
                    <td>{{ $n->mataPelajaran->nama_mapel }}</td>
                    <td>{{ $n->nilai_uts }}</td>
                    <td>{{ $n->nilai_uas }}</td>
                    <td>{{ $n->nilai_akhir }}</td>
                    <td>
                    <td>
                        <a href="/Nilai/{{ $n->id_nilai }}/edit" class="btn btn-warning btn-sm">Edit</a>
                        <form action="/Nilai/{{ $n->id_nilai }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin hapus?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
