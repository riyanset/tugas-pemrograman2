# Portal Tugas Web — Riyan Setiawan

Portfolio tugas pemrograman web PHP per pertemuan oleh Riyan Setiawan, mahasiswa Teknik Informatika.

## Struktur Project

```
├── index.php          ← Halaman utama portal
├── config.php         ← Konfigurasi database (XAMPP / InfinityFree)
├── koneksi.php        ← Koneksi MySQL terpusat
├── database/
│   └── toko_online.sql ← Skrip import database
└── pertemuan*.php     ← File tugas per pertemuan
```

## Jalankan di XAMPP (Lokal)

1. Salin folder ke `C:\xampp\htdocs\TUGAS PEMROGRAMAN2`
2. Import `database/toko_online.sql` lewat phpMyAdmin
3. Buka: `http://localhost/TUGAS PEMROGRAMAN2/index.php`

Konfigurasi lokal otomatis terdeteksi (`localhost` → user `root`, password kosong).

## Deploy ke InfinityFree

### 1. Buat akun & website
1. Daftar di [infinityfree.com](https://infinityfree.com)
2. Buat website baru dan catat subdomain Anda

### 2. Upload file
1. Buka **Control Panel** → **Online File Manager** (atau pakai FTP)
2. Upload semua file ke folder `htdocs`

### 3. Buat database MySQL
1. Buka **MySQL Databases** di panel InfinityFree
2. Buat database baru (mis. `toko_online`)
3. Catat: **hostname**, **username**, **password**, **nama database**

### 4. Edit kredensial database
Salin `config.db.example.php` menjadi `config.db.php`, lalu isi data dari panel InfinityFree:

```php
define('DB_HOST', 'sqlXXX.infinityfree.com');
define('DB_USER', 'if0_XXXXXXX');
define('DB_PASS', 'password_anda');
define('DB_NAME', 'if0_XXXXXXX_toko_online');
```

### 5. Import database
1. Buka **phpMyAdmin** dari panel InfinityFree
2. Pilih database Anda
3. Import file **`database/import_infinityfree.sql`** (bukan `toko_online.sql`)

### 6. Akses website
Buka subdomain Anda, misalnya: `https://namasite.infinityfreeapp.com`

Portal dan semua file `.php` akan berjalan normal karena InfinityFree mendukung PHP + MySQL.

## Catatan

- File `.htaccess` mengarahkan `index.html` ke `index.php` agar menu tugas bisa dibuka.
- Tugas pertemuan 14–19 membutuhkan database `toko_online`.
- Tugas pertemuan 6 & 10–13 tidak memerlukan database (kecuali dokumentasi screenshot).
