<!DOCTYPE html>
<html>
<head>
    <title>Sistem Sekolah - Siswa Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2>Siswa Sekolah</h2>
        <a href="/siswa_sekolah/create" class="btn btn-primary mb-3">Input Siswa Baru</a>
        <a href="/" class="btn btn-secondary mb-3">Home</a>

        <table class="table table-striped table-bordered">
            <tr>
                <th>NISN</th>
                <th>Nama Siswa</th>
                <th>Kelas</th>
                <th>L/P</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
            @foreach($list as $s)
            <tr>
                <td>{{ $s->nisn_siswa }}</td>
                <td>{{ $s->nama_siswa }}</td>
                <td>{{ $s->kelas->nama_kelas }}</td>
                <td>{{ $s->jenis_kelamin }}</td>
                <td>{{ $s->alamat_siswa }}</td>
                <td>
                    <a href="/siswa_sekolah/{{ $s->id_siswa }}/edit" class="btn btn-warning btn-sm">Edit</a>
                    <form action="/siswa_sekolah/{{ $s->id_siswa }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin hapus?')">
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
