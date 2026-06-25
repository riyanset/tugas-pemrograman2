-- Database untuk tugas pertemuan 14-19 (XAMPP lokal)
-- Import file ini lewat phpMyAdmin di XAMPP

CREATE DATABASE IF NOT EXISTS toko_online;
USE toko_online;

CREATE TABLE IF NOT EXISTS produk (
    id_produk INT AUTO_INCREMENT PRIMARY KEY,
    nama_produk VARCHAR(100) NOT NULL,
    kategori VARCHAR(50) NOT NULL,
    harga INT NOT NULL,
    stok INT NOT NULL DEFAULT 0,
    gambar VARCHAR(100) DEFAULT NULL
);

CREATE TABLE IF NOT EXISTS transaksi (
    id_transaksi INT AUTO_INCREMENT PRIMARY KEY,
    nama_pembeli VARCHAR(100) NOT NULL,
    id_produk INT NOT NULL,
    jumlah INT NOT NULL,
    harga INT NOT NULL,
    total INT NOT NULL,
    FOREIGN KEY (id_produk) REFERENCES produk(id_produk)
);

CREATE TABLE IF NOT EXISTS buku (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_buku VARCHAR(150) NOT NULL,
    stok INT NOT NULL DEFAULT 0
);

INSERT INTO produk (nama_produk, kategori, harga, stok, gambar) VALUES
('Kaos Polos Cotton', 'Pria', 85000, 50, NULL),
('Kemeja Batik Pria', 'Pria', 250000, 30, NULL),
('Celana Chino Slim Fit', 'Pria', 180000, 25, NULL),
('Dress Floral Wanita', 'Wanita', 220000, 20, NULL),
('Blouse Katun Wanita', 'Wanita', 150000, 35, NULL),
('Jaket Hoodie Unisex', 'Unisex', 195000, 40, NULL),
('Rok Plisket Wanita', 'Wanita', 120000, 28, NULL),
('Jilbab Segi Empat', 'Aksesoris', 45000, 60, NULL);

INSERT INTO buku (nama_buku, stok) VALUES
('Pemrograman Web dengan PHP', 5),
('Basis Data MySQL', 3),
('Algoritma dan Struktur Data', 4),
('Jaringan Komputer', 2),
('Pemrograman Berorientasi Objek', 6);
