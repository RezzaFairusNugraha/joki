<!DOCTYPE html>
<html>
<head>
    <title>Sistem Sekolah - Nilai Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2>Nilai Siswa</h2>
        <a href="/nilai_siswa/create" class="btn btn-primary mb-3">Input Nilai Siswa</a>
        <a href="/" class="btn btn-secondary mb-3">Home</a>

        <table class="table table-striped table-bordered">
            <tr>
                <th>Nama Siswa</th>
                <th>Mata Pelajaran</th>
                <th>Nilai UTS</th>
                <th>Nilai UAS</th>
                <th>Nilai Akhir</th>
                <th>Aksi</th>
            </tr>
            @foreach($data as $n)
            <tr>
                <td>{{ $n->siswa->nama_siswa }}</td>
                <td>{{ $n->mapel->nama_mapel }}</td>
                <td>{{ $n->nilai_uts }}</td>
                <td>{{ $n->nilai_uas }}</td>
                <td>{{ $n->nilai_akhir }}</td>
                <td>
                    <form action="/nilai_siswa/{{ $n->id_nilai }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin hapus?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
