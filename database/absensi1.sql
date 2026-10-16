-- Database: absensi1
CREATE DATABASE IF NOT EXISTS `absensi1`;
USE `absensi1`;

-- Tabel akun
CREATE TABLE IF NOT EXISTS `akun` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `username` VARCHAR(50) NOT NULL UNIQUE,
  `password` VARCHAR(255) NOT NULL,
  `role` VARCHAR(20) NOT NULL
);

-- Akun bawaan (jika belum ada)
INSERT INTO `akun` (`username`, `password`, `role`) VALUES
('siswa', '123', 'siswa'),
('guru', '123', 'guru'),
('admin', '123', 'admin')
ON DUPLICATE KEY UPDATE `username`=`username`;

-- Tabel absensi
CREATE TABLE IF NOT EXISTS `absensi` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `nis` VARCHAR(30) NOT NULL,
  `nama` VARCHAR(100) NOT NULL,
  `kelas` VARCHAR(50) NOT NULL,
  `jurusan` VARCHAR(50) NOT NULL,
  `keterangan` VARCHAR(20) NOT NULL,
  `tanggal` DATE NOT NULL,
  `jam` TIME NOT NULL
);
