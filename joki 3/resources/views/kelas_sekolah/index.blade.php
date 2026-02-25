<!DOCTYPE html>
<html>
<head>
    <title>Sistem Sekolah - Kelas Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2>Kelas Sekolah</h2>
        <a href="/kelas_sekolah/create" class="btn btn-primary mb-3">Tambah Kelas Sekolah</a>
        <a href="/" class="btn btn-secondary mb-3">Home</a>

        <table class="table table-striped table-bordered">
            <tr>
                <th>No</th>
                <th>Jurusan</th>
                <th>Nama Kelas</th>
                <th>Aksi</th>
            </tr>
            @foreach($data as $k)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $k->jurusan_kelas }}</td>
                <td>{{ $k->nama_kelas }}</td>
                <td>
                    <a href="/kelas_sekolah/{{ $k->id_kelas }}/edit" class="btn btn-warning btn-sm">Edit</a>
                    <form action="/kelas_sekolah/{{ $k->id_kelas }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin hapus?')">
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
