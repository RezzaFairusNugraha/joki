<!DOCTYPE html>
<html>
<head>
    <title>Sistem Sekolah - Mata Pelajaran Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2>Mata Pelajaran Sekolah</h2>
        <a href="/mata_pelajaran_sekolah/create" class="btn btn-primary mb-3">Tambah Mata Pelajaran</a>
        <a href="/" class="btn btn-secondary mb-3">Home</a>

        <table class="table table-striped table-bordered">
            <tr>
                <th>Nama Pelajaran</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
            @foreach($list as $l)
            <tr>
                <td>{{ $l->nama_mapel }}</td>
                <td>{{ $l->kategori_mapel }}</td>
                <td>
                    <a href="/mata_pelajaran_sekolah/{{ $l->id_mapel }}/edit" class="btn btn-warning btn-sm">Edit</a>
                    <form action="/mata_pelajaran_sekolah/{{ $l->id_mapel }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin hapus?')">
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
