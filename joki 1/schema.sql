CREATE TABLE Kelas (
id_kelas INT PRIMARY KEY AUTO_INCREMENT,
jurusan VARCHAR(100) NOT NULL,
kelas VARCHAR(50) NOT NULL
);

CREATE TABLE Siswa (
id_siswa INT PRIMARY KEY AUTO_INCREMENT,
id_kelas INT,
nisn VARCHAR(20) UNIQUE,
nama VARCHAR(100) NOT NULL,
jenis_kelamin ENUM('Laki-laki','Perempuan'),
alamat TEXT,
no_hp VARCHAR(15),
tanggal_lahir DATE,
FOREIGN KEY (id_kelas) REFERENCES Kelas(id_kelas)
);

CREATE TABLE Guru (
id_guru INT PRIMARY KEY AUTO_INCREMENT,
nip VARCHAR(30) UNIQUE,
nama VARCHAR(100) NOT NULL,
jenis_kelamin ENUM('Laki-laki','Perempuan') NOT NULL,
email VARCHAR(100) UNIQUE,
no_hp VARCHAR(15),
id_kelas INT,
FOREIGN KEY (id_kelas) REFERENCES Kelas(id_kelas)
);

CREATE TABLE Mata_Pelajaran (
id_mapel INT PRIMARY KEY AUTO_INCREMENT,
nama_mapel VARCHAR(100) NOT NULL,
kategori ENUM('Umum','Produktif')
);

CREATE TABLE Mapel_Diampu (
id_ampu INT PRIMARY KEY AUTO_INCREMENT,
id_guru INT,
id_kelas INT,
id_mapel INT,
FOREIGN KEY (id_guru) REFERENCES Guru(id_guru),
FOREIGN KEY (id_kelas) REFERENCES Kelas(id_kelas),
FOREIGN KEY (id_mapel) REFERENCES Mata_Pelajaran(id_mapel)
);

CREATE TABLE Nilai (
id_nilai INT PRIMARY KEY AUTO_INCREMENT,
id_siswa INT,
id_mapel INT,
nilai_uts INT,
nilai_uas INT,
nilai_akhir INT,
FOREIGN KEY (id_siswa) REFERENCES Siswa(id_siswa),
FOREIGN KEY (id_mapel) REFERENCES Mata_Pelajaran(id_mapel)
);

CREATE TABLE Berita (
id_berita INT PRIMARY KEY AUTO_INCREMENT,
id_guru INT,
judul VARCHAR(150),
isi TEXT,
tanggal_post TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
FOREIGN KEY (id_guru) REFERENCES Guru(id_guru)
);
