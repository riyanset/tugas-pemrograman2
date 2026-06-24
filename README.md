# Portal Tugas Web — Riyan Setiawan

Portfolio tugas pemrograman web PHP per pertemuan oleh Riyan Setiawan, mahasiswa Teknik Informatika.

## 🌐 Live Demo

Deploy di Vercel: [portal-tugas-riyan.vercel.app](https://portal-tugas-riyan.vercel.app)

## 📁 Struktur Project

```
├── index.html       ← Halaman utama (untuk Vercel/static)
├── index.php        ← Halaman utama (untuk XAMPP lokal)
├── vercel.json      ← Konfigurasi deploy Vercel
├── images/
│   └── 1.jpeg       ← Foto profil
└── pertemuan*.php   ← File tugas per pertemuan
```

## 🚀 Deploy ke Vercel

### Cara 1 — Drag & Drop (Paling Mudah)
1. Buka [vercel.com](https://vercel.com) dan login/daftar
2. Klik **"Add New Project"**
3. Pilih **"Upload"** lalu drag folder project ini
4. Klik **Deploy** — selesai!

### Cara 2 — Via GitHub (Direkomendasikan)
1. Upload folder ini ke repository GitHub baru
2. Buka [vercel.com](https://vercel.com) → **Add New Project**
3. Pilih repository GitHub Anda
4. Klik **Deploy**
5. Setiap push ke GitHub akan otomatis update deployment!

### Cara 3 — Vercel CLI
```bash
npm install -g vercel
cd "TUGAS PEMROGRAMAN2"
vercel --prod
```

## ⚠️ Catatan Penting

> File tugas `.php` membutuhkan server PHP (XAMPP) untuk berjalan.
> Di Vercel, halaman **portal (index.html)** akan tampil dengan sempurna,
> namun link ke file `.php` hanya bisa dibuka dari server lokal XAMPP.

## 💻 Jalankan Lokal

Buka di browser: `http://localhost/TUGAS PEMROGRAMAN2/index.php`
