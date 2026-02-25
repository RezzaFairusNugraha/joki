<!DOCTYPE html>
<html>
<head>
    <title>Sistem Sekolah - Berita Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2>Berita Sekolah</h2>
        <a href="/berita_sekolah/create" class="btn btn-primary mb-3">Tulis Berita Baru</a>
        <a href="/" class="btn btn-secondary mb-3">Home</a>

        <table class="table table-striped table-bordered">
            <tr>
                <th>Judul</th>
                <th>Penulis (Guru)</th>
                <th>Isi Berita</th>
                <th>Aksi</th>
            </tr>
            @foreach($feeds as $b)
            <tr>
                <td>{{ $b->judul }}</td>
                <td>{{ $b->guru->nama_guru }}</td>
                <td>{{ Str::limit($b->isi, 50) }}</td>
                <td>
                    <a href="/berita_sekolah/{{ $b->id_berita }}/edit" class="btn btn-warning btn-sm">Edit</a>
                    <form action="/berita_sekolah/{{ $b->id_berita }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin hapus?')">
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
