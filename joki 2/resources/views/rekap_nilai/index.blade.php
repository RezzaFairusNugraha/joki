<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Nilai - Reyka</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="/">🏠 SEKOLAH REYKA</a>
            <div class="navbar-nav">
                <a class="nav-link" href="/data_kelas">Data Kelas</a>
                <a class="nav-link" href="/data_murid">Data Murid</a>
                <a class="nav-link" href="/data_pengajar">Data Pengajar</a>
                <a class="nav-link" href="/mata_ajar">Mata Ajar</a>
                <a class="nav-link" href="/pengajar_mengajar">Penugasan</a>
                <a class="nav-link" href="/rekap_nilai">Rekap Nilai</a>
                <a class="nav-link" href="/info_sekolah">Info Sekolah</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h3>Rekap Nilai Akhir</h3>
        <a href="/" class="btn btn-sm btn-secondary mb-3">Kembali</a>
        <a href="/rekap_nilai/create" class="btn btn-sm btn-primary mb-3">Input Nilai</a>

        <div class="card p-3 shadow-sm border-0 border-top border-5 border-primary">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Siswa</th>
                        <th>Mapel</th>
                        <th>UTS</th>
                        <th>UAS</th>
                        <th>Rata</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                @foreach($data as $n)
                <tr>
                    <td>{{ $n->murid->nama_murid }}</td>
                    <td>{{ $n->mataAjar->nama_pelajaran }}</td>
                    <td>{{ $n->nilai_tengah }}</td>
                    <td>{{ $n->nilai_akhir_semester }}</td>
                    <td class="bg-light">{{ $n->nilai_rata }}</td>
                    <td>
                        <form action="/rekap_nilai/{{ $n->nilai_id }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin hapus?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>
</html>
