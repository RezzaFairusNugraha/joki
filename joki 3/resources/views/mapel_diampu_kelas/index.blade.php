<!DOCTYPE html>
<html>
<head>
    <title>Sistem Sekolah - Mapel Diampu Kelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2>Mapel Diampu Kelas</h2>
        <a href="/mapel_diampu_kelas/create" class="btn btn-primary mb-3">Tambah Tugas</a>
        <a href="/" class="btn btn-secondary mb-3">Home</a>

        <table class="table table-striped table-bordered">
            <tr>
                <th>Nama Guru</th>
                <th>Mata Pelajaran</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
            @foreach($list as $l)
            <tr>
                <td>{{ $l->guru->nama_guru }}</td>
                <td>{{ $l->mapel->nama_mapel }}</td>
                <td>{{ $l->kelas->nama_kelas }}</td>
                <td>
                    <form action="/mapel_diampu_kelas/{{ $l->id_ampu }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin hapus?')">
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
