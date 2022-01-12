CREATE TABLE pengguna (
    id_pengguna INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nama_pengguna VARCHAR(50) NOT NULL UNIQUE,
    kata_kunci VARCHAR(50) NOT NULL,
    peran VARCHAR (30) NOT NULL);
    
CREATE TABLE buku (
    id_buku INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    path_gambar VARCHAR(250) NOT NULL,
    judul VARCHAR(250) NOT NULL,
    penulis VARCHAR(50) NOT NULL,
    penerbit VARCHAR(50) NOT NULL,
    deskripsi VARCHAR(250) NOT NULL,
    jumlah int NOT NULL);
    
CREATE TABLE peminjaman (
    id_pinjam INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_buku INT NOT NULL,
    id_pengguna INT NOT NULL);
    
CREATE TABLE ulasan (
    id_ulasan INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_buku INT NOT NULL,
    id_pengguna INT NOT NULL,
    tanggal DATE NOT NULL,
    isi VARCHAR(500) NOT NULL);
    
