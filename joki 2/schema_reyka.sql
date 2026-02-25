-- ============================
-- Tabel Data Jurusan & Kelas
-- ============================
CREATE TABLE data_kelas (
    kelas_id INT PRIMARY KEY AUTO_INCREMENT,
    nama_jurusan VARCHAR(100) NOT NULL,
    nama_kelas VARCHAR(50) NOT NULL
);

-- ============================
-- Tabel Data Murid
-- ============================
CREATE TABLE data_murid (
    murid_id INT PRIMARY KEY AUTO_INCREMENT,
    kelas_id INT,
    nomor_induk VARCHAR(20) UNIQUE,
    nama_murid VARCHAR(100) NOT NULL,
    jk ENUM('Laki-laki','Perempuan'),
    alamat_rumah TEXT,
    telepon VARCHAR(15),
    tgl_lahir DATE,
    FOREIGN KEY (kelas_id) REFERENCES data_kelas(kelas_id)
);

-- ============================
-- Tabel Data Pengajar
-- ============================
CREATE TABLE data_pengajar (
    pengajar_id INT PRIMARY KEY AUTO_INCREMENT,
    nip_pengajar VARCHAR(30) UNIQUE,
    nama_pengajar VARCHAR(100) NOT NULL,
    jenis_kelamin ENUM('Laki-laki','Perempuan') NOT NULL,
    email_pengajar VARCHAR(100) UNIQUE,
    no_telepon VARCHAR(15)
);

-- ============================
-- Tabel Data Mata Ajar
-- ============================
CREATE TABLE mata_ajar (
    mapel_id INT PRIMARY KEY AUTO_INCREMENT,
    nama_pelajaran VARCHAR(100) NOT NULL,
    jenis_mapel ENUM('Umum','Produktif')
);

-- ============================
-- Tabel Pengajar Mengampu
-- ============================
CREATE TABLE pengajar_mengajar (
    mengajar_id INT PRIMARY KEY AUTO_INCREMENT,
    pengajar_id INT,
    kelas_id INT,
    mapel_id INT,
    FOREIGN KEY (pengajar_id) REFERENCES data_pengajar(pengajar_id),
    FOREIGN KEY (kelas_id) REFERENCES data_kelas(kelas_id),
    FOREIGN KEY (mapel_id) REFERENCES mata_ajar(mapel_id)
);

-- ============================
-- Tabel Rekap Nilai
-- ============================
CREATE TABLE rekap_nilai (
    nilai_id INT PRIMARY KEY AUTO_INCREMENT,
    murid_id INT,
    mapel_id INT,
    nilai_tengah INT,
    nilai_akhir_semester INT,
    nilai_rata INT,
    FOREIGN KEY (murid_id) REFERENCES data_murid(murid_id),
    FOREIGN KEY (mapel_id) REFERENCES mata_ajar(mapel_id)
);

-- ============================
-- Tabel Informasi Sekolah
-- ============================
CREATE TABLE info_sekolah (
    berita_id INT PRIMARY KEY AUTO_INCREMENT,
    pengajar_id INT,
    judul_berita VARCHAR(150),
    isi_berita TEXT,
    tanggal_upload TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (pengajar_id) REFERENCES data_pengajar(pengajar_id)
);
