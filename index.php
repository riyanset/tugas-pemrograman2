  <!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Portal Tugas Web — Riyan Setiawan</title>
<meta name="description" content="Portfolio tugas pemrograman web PHP per pertemuan oleh Riyan Setiawan.">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&family=Outfit:wght@700;800&display=swap" rel="stylesheet">
<style>
/* ... CSS Variables ... */
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
:root{
  --bg:#f8f9fa;
  --bg2:#ffffff;
  --surface:rgba(255,255,255,0.92);
  --surface2:rgba(240,242,245,0.8);
  --border:rgba(0,0,0,0.08);
  --border2:rgba(0,0,0,0.15);
  --primary:#343a40;
  --primary-dim:rgba(52,58,64,0.1);
  --accent:#495057;
  --muted:#495057;
  --text:#212529;
  --text2:#343a40;
  --radius:14px;
}
html{scroll-behavior:smooth}
body{
  font-family:'Plus Jakarta Sans',sans-serif;
  background: var(--bg) url('images/22.png') no-repeat center center fixed;
  background-size: cover;
  color:var(--text);
  min-height:100vh;
  overflow-x:hidden;
  line-height:1.6;
}
body::before {
  content: '';
  position: fixed;
  top: 0; left: 0; right: 0; bottom: 0;
  background: rgba(248, 249, 250, 0.65);
  backdrop-filter: blur(6px);
  -webkit-backdrop-filter: blur(6px);
  z-index: -1;
}

::-webkit-scrollbar{width:8px}
::-webkit-scrollbar-track{background:var(--bg)}
::-webkit-scrollbar-thumb{background:var(--primary-dim);border-radius:99px}

nav{position:sticky;top:0;z-index:200;background:rgba(255,255,255,0.85);backdrop-filter:blur(20px);-webkit-backdrop-filter:blur(20px);border-bottom:1px solid var(--border);height:60px;display:flex;align-items:center;justify-content:space-between;padding:0 2rem}
.nav-logo{font-weight:800;font-size:1rem;color:var(--text);letter-spacing:-0.01em;display:flex;align-items:center;gap:8px}
.nav-logo span{color:var(--text2);font-weight:400;font-size:.85rem}
.nav-links{display:flex;gap:1.6rem;list-style:none}
.nav-links a{font-size:.82rem;font-weight:600;color:var(--muted);text-decoration:none;letter-spacing:.04em;transition:color .2s}
.nav-links a:hover{color:var(--primary)}

/* Centered Hero */
.hero{max-width:800px;margin:0 auto;padding:5rem 2rem 4rem;display:flex;flex-direction:column;align-items:center;text-align:center;position:relative;z-index:1}
.profile-photo-wrap{position:relative;margin-bottom:1.5rem}
.profile-photo-wrap::before{content:'';position:absolute;inset:-4px;border-radius:50%;background:linear-gradient(135deg,var(--primary),var(--accent),#adb5bd);z-index:0;animation:rotateBorder 6s linear infinite}
@keyframes rotateBorder{from{transform:rotate(0deg)}to{transform:rotate(360deg)}}
.profile-photo-wrap::after{content:'';position:absolute;inset:2px;border-radius:50%;background:var(--bg);z-index:1}
.profile-photo{width:160px;height:160px;border-radius:50%;object-fit:cover;object-position:top center;position:relative;z-index:2;display:block}

.hero h1{font-family:'Outfit',sans-serif;font-size:clamp(2.5rem,5vw,3.8rem);font-weight:800;line-height:1.1;letter-spacing:-0.02em;margin-bottom:0.8rem;color:var(--text)}
.hero-eyebrow{display:inline-flex;align-items:center;gap:6px;font-size:.75rem;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:var(--text);background:var(--primary-dim);border:1px solid var(--border2);padding:5px 16px;border-radius:999px;margin-bottom:1rem}
.hero-sub{font-size:1.05rem;color:var(--text2);font-weight:500;margin-bottom:1.5rem;line-height:1.8}
.hero-quote{font-size:0.95rem;font-style:italic;color:var(--muted);max-width:450px;line-height:1.6;font-weight:500}

/* Cards */
main{max-width:1100px;margin:0 auto;padding:2rem 2rem 6rem;position:relative;z-index:1}

.section{margin-bottom:3rem}
.sec-head{display:flex;align-items:center;gap:.75rem;margin-bottom:1.5rem;padding-bottom:1rem;border-bottom:1px solid var(--border)}
.sec-num{font-family:'Outfit',sans-serif;font-size:1.6rem;font-weight:800;color:var(--primary);opacity:.25;min-width:2.2rem}
.sec-label{font-size:.78rem;font-weight:800;letter-spacing:.14em;text-transform:uppercase;color:var(--text2)}
.sec-badge{margin-left:auto;font-size:.66rem;font-weight:700;color:var(--muted);letter-spacing:.06em;text-transform:uppercase;background:var(--surface2);border:1px solid var(--border);padding:3px 10px;border-radius:4px}

.grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(310px,1fr));gap:1.5rem}

.card{background:var(--surface);border:1px solid var(--border);border-radius:var(--radius);cursor:pointer;display:flex;flex-direction:column;transition:transform .28s cubic-bezier(.34,1.56,.64,1),box-shadow .28s,border-color .25s;position:relative;overflow:hidden;text-decoration:none;color:inherit;box-shadow:0 4px 15px rgba(0,0,0,0.03)}
.card:hover{transform:translateY(-5px);border-color:var(--border2);box-shadow:0 16px 48px rgba(0,0,0,0.1)}

.card-preview{height:140px;display:flex;align-items:center;justify-content:center;font-size:1.8rem;font-family:'Outfit',sans-serif;font-weight:800;color:#fff;letter-spacing:1px;text-transform:uppercase}
.card-content{padding:1.2rem 1.5rem;display:flex;flex-direction:column;gap:.65rem;flex:1}

.card-head{display:flex;align-items:center;justify-content:space-between;gap:.5rem}
.badge{font-size:.62rem;font-weight:700;letter-spacing:.07em;text-transform:uppercase;padding:3px 10px;border-radius:4px;border:1px solid}
.b-blue{color:#0d6efd;border-color:rgba(13,110,253,0.3);background:rgba(13,110,253,0.08)}
.b-green{color:#198754;border-color:rgba(25,135,84,0.3);background:rgba(25,135,84,0.08)}
.b-red{color:#dc3545;border-color:rgba(220,53,69,0.3);background:rgba(220,53,69,0.08)}
.b-gold{color:#fd7e14;border-color:rgba(253,126,20,0.3);background:rgba(253,126,20,0.08)}
.b-dark{color:#212529;border-color:rgba(33,37,41,0.3);background:rgba(33,37,41,0.08)}

.card-title{font-size:.98rem;font-weight:700;color:var(--text);line-height:1.35}
.card-desc{font-size:.82rem;color:var(--muted);line-height:1.72;flex:1}
.card-footer{display:flex;align-items:center;justify-content:space-between;margin-top:.3rem;padding-top:.75rem;border-top:1px solid var(--border)}
.card-cta{font-size:.76rem;font-weight:700;color:var(--primary);display:flex;align-items:center;gap:4px;transition:gap .2s}
.card:hover .card-cta{gap:8px}
.card-lang{font-size:.68rem;color:var(--muted);font-weight:500}

footer{background:rgba(255,255,255,0.7);border-top:1px solid var(--border);padding:3rem 2rem;backdrop-filter:blur(10px)}
.footer-inner{max-width:1100px;margin:0 auto;display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:1.5rem}
.footer-brand{font-weight:800;font-size:.95rem;color:var(--text)}
.footer-info{font-size:.82rem;color:var(--muted);line-height:1.7}
.footer-info b{color:var(--text2);font-weight:600}

@media(max-width:768px){
  nav{padding:0 1.2rem}
  .nav-links{display:none}
  .footer-inner{flex-direction:column;text-align:center}
}
</style>
</head>
<body>

<nav>
  <div class="nav-logo">⟨/⟩ <span>Riyan Setiawan</span></div>
  <ul class="nav-links">
    <li><a href="#profile">Profil</a></li>
    <li><a href="#tasks">Tugas</a></li>
  </ul>
</nav>

<section class="hero" id="profile">
  <div class="profile-photo-wrap">
    <img class="profile-photo" src="images/1.jpeg" alt="Foto Riyan Setiawan">
  </div>
  <h1>Riyan Setiawan</h1>
  <div class="hero-eyebrow">✦ Mahasiswa Aktif</div>
  <p class="hero-sub">
    Teknik Informatika · Pemrograman Web<br>
    <span style="display:inline-block; margin-top:8px; font-size:0.95rem;">
      <strong>NIM:</strong> 221011450590 &nbsp;|&nbsp; <strong>Kelas:</strong> 07TPLK002
    </span>
  </p>
  <div class="hero-quote">
    "Ngoding itu ibarat main puzzle; satu error ketemu, satu jalan sukses terbuka. Keep coding, keep shining!" ✨
  </div>
</section>

<main id="tasks">

  <div class="section" data-section>
    <div class="sec-head"><span class="sec-num">03</span><span class="sec-label">Pertemuan 3 - 9</span><span class="sec-badge">Dasar PHP</span></div>
    <div class="grid">
      <a class="card" href="pertemuan3soal1.php" target="_blank" rel="noopener">
        <div class="card-preview" style="background:linear-gradient(135deg, #0d6efd, #0dcaf0);">TUGAS 3</div>
        <div class="card-content">
          <div class="card-head"><span class="badge b-blue">Variabel</span></div>
          <div class="card-title">Biodata & Kalkulator</div>
          <div class="card-desc">Pertemuan 3: Variabel dan operasi aritmatika dasar di PHP.</div>
          <div class="card-footer"><span class="card-cta">Buka Tugas →</span><span class="card-lang">PHP</span></div>
        </div>
      </a>
      <a class="card" href="pertemuan4soal1 SWITCHdanCASE.php" target="_blank" rel="noopener">
        <div class="card-preview" style="background:linear-gradient(135deg, #6610f2, #d63384);">TUGAS 4</div>
        <div class="card-content">
          <div class="card-head"><span class="badge b-purple">Kondisi</span></div>
          <div class="card-title">Switch Case & IF Else</div>
          <div class="card-desc">Pertemuan 4: Percabangan kondisi.</div>
          <div class="card-footer"><span class="card-cta">Buka Tugas →</span><span class="card-lang">PHP</span></div>
        </div>
      </a>
      <a class="card" href="pertemuan5soal3.php" target="_blank" rel="noopener">
        <div class="card-preview" style="background:linear-gradient(135deg, #198754, #20c997);">TUGAS 5</div>
        <div class="card-content">
          <div class="card-head"><span class="badge b-green">Loop</span></div>
          <div class="card-title">Array & Perulangan</div>
          <div class="card-desc">Pertemuan 5: Looping dan Array.</div>
          <div class="card-footer"><span class="card-cta">Buka Tugas →</span><span class="card-lang">PHP</span></div>
        </div>
      </a>
      <a class="card" href="pertemuan6tugas1.php" target="_blank" rel="noopener">
        <div class="card-preview" style="background:linear-gradient(135deg, #fd7e14, #ffc107);">TUGAS 6</div>
        <div class="card-content">
          <div class="card-head"><span class="badge b-gold">Form</span></div>
          <div class="card-title">Buku Tamu</div>
          <div class="card-desc">Pertemuan 6: Memproses form HTML.</div>
          <div class="card-footer"><span class="card-cta">Buka Tugas →</span><span class="card-lang">PHP</span></div>
        </div>
      </a>
      <a class="card" href="pertemuan7soal3.php" target="_blank" rel="noopener">
        <div class="card-preview" style="background:linear-gradient(135deg, #dc3545, #fd7e14);">TUGAS 7</div>
        <div class="card-content">
          <div class="card-head"><span class="badge b-red">Matriks</span></div>
          <div class="card-title">Perkalian Matriks</div>
          <div class="card-desc">Pertemuan 7: Fungsi dan Matriks.</div>
          <div class="card-footer"><span class="card-cta">Buka Tugas →</span><span class="card-lang">PHP</span></div>
        </div>
      </a>
      <a class="card" href="pertemuan9soal1tgldanwaktu.php" target="_blank" rel="noopener">
        <div class="card-preview" style="background:linear-gradient(135deg, #0dcaf0, #0d6efd);">TUGAS 9</div>
        <div class="card-content">
          <div class="card-head"><span class="badge b-blue">Fungsi</span></div>
          <div class="card-title">Date & String</div>
          <div class="card-desc">Pertemuan 9: Fungsi bawaan PHP.</div>
          <div class="card-footer"><span class="card-cta">Buka Tugas →</span><span class="card-lang">PHP</span></div>
        </div>
      </a>
    </div>
  </div>

  <div class="section" data-section>
    <div class="sec-head"><span class="sec-num">10</span><span class="sec-label">Pertemuan 10 - 13</span><span class="sec-badge">Lanjutan</span></div>
    <div class="grid">
      <a class="card" href="pertemuan10.php" target="_blank" rel="noopener">
        <div class="card-preview" style="background:linear-gradient(135deg, #212529, #495057);">TUGAS 10</div>
        <div class="card-content">
          <div class="card-head"><span class="badge b-dark">P10</span></div>
          <div class="card-title">Tugas Pertemuan 10</div>
          <div class="card-desc">Penerapan form dan database tingkat lanjut.</div>
          <div class="card-footer"><span class="card-cta">Buka Tugas →</span><span class="card-lang">PHP</span></div>
        </div>
      </a>
      <a class="card" href="Pertemuan11.php" target="_blank" rel="noopener">
        <div class="card-preview" style="background:linear-gradient(135deg, #6f42c1, #0d6efd);">TUGAS 11</div>
        <div class="card-content">
          <div class="card-head"><span class="badge b-dark">P11</span></div>
          <div class="card-title">Tugas Pertemuan 11</div>
          <div class="card-desc">CRUD Database dan integrasi sistem.</div>
          <div class="card-footer"><span class="card-cta">Buka Tugas →</span><span class="card-lang">PHP</span></div>
        </div>
      </a>
      <a class="card" href="pertemuan12.php" target="_blank" rel="noopener">
        <div class="card-preview" style="background:linear-gradient(135deg, #d63384, #dc3545);">TUGAS 12</div>
        <div class="card-content">
          <div class="card-head"><span class="badge b-dark">P12</span></div>
          <div class="card-title">Tugas Pertemuan 12</div>
          <div class="card-desc">Manajemen User dan Session.</div>
          <div class="card-footer"><span class="card-cta">Buka Tugas →</span><span class="card-lang">PHP</span></div>
        </div>
      </a>
      <a class="card" href="pertemuan13.php" target="_blank" rel="noopener">
        <div class="card-preview" style="background:linear-gradient(135deg, #198754, #0dcaf0);">TUGAS 13</div>
        <div class="card-content">
          <div class="card-head"><span class="badge b-dark">P13</span></div>
          <div class="card-title">Tugas Pertemuan 13</div>
          <div class="card-desc">Upload dan pengelolaan file gambar.</div>
          <div class="card-footer"><span class="card-cta">Buka Tugas →</span><span class="card-lang">PHP</span></div>
        </div>
      </a>
    </div>
  </div>

  <div class="section" data-section>
    <div class="sec-head"><span class="sec-num">14</span><span class="sec-label">Pertemuan 14 - 19</span><span class="sec-badge">Aplikasi Database</span></div>
    <div class="grid">
      <a class="card" href="pertemuan14search_produk.php" target="_blank" rel="noopener">
        <div class="card-preview" style="background:linear-gradient(135deg, #0d6efd, #6610f2);">TUGAS 14</div>
        <div class="card-content">
          <div class="card-head"><span class="badge b-blue">Search</span></div>
          <div class="card-title">Pencarian & Sorting</div>
          <div class="card-desc">Pertemuan 14: Fitur cari produk & paginasi.</div>
          <div class="card-footer"><span class="card-cta">Buka Tugas →</span><span class="card-lang">MySQL</span></div>
        </div>
      </a>
      <a class="card" href="pertemuan15index.php" target="_blank" rel="noopener">
        <div class="card-preview" style="background:linear-gradient(135deg, #dc3545, #d63384);">TUGAS 15</div>
        <div class="card-content">
          <div class="card-head"><span class="badge b-red">App</span></div>
          <div class="card-title">Aplikasi Perpustakaan</div>
          <div class="card-desc">Pertemuan 15: Sistem Peminjaman Buku.</div>
          <div class="card-footer"><span class="card-cta">Buka Tugas →</span><span class="card-lang">MySQL</span></div>
        </div>
      </a>
      <a class="card" href="pertemuan16.php" target="_blank" rel="noopener">
        <div class="card-preview" style="background:linear-gradient(135deg, #20c997, #198754);">TUGAS 16</div>
        <div class="card-content">
          <div class="card-head"><span class="badge b-green">Session</span></div>
          <div class="card-title">Keranjang Belanja</div>
          <div class="card-desc">Pertemuan 16: Simulasi Cart Session.</div>
          <div class="card-footer"><span class="card-cta">Buka Tugas →</span><span class="card-lang">PHP</span></div>
        </div>
      </a>
      <a class="card" href="pertemuan17.php" target="_blank" rel="noopener">
        <div class="card-preview" style="background:linear-gradient(135deg, #ffc107, #fd7e14);">TUGAS 17</div>
        <div class="card-content">
          <div class="card-head"><span class="badge b-gold">Data</span></div>
          <div class="card-title">Data Kelas Mahasiswa</div>
          <div class="card-desc">Pertemuan 17: Penyimpanan data mahasiswa dengan cookie.</div>
          <div class="card-footer"><span class="card-cta">Buka Tugas →</span><span class="card-lang">PHP</span></div>
        </div>
      </a>
      <a class="card" href="pertemuan18.php" target="_blank" rel="noopener">
        <div class="card-preview" style="background:linear-gradient(135deg, #495057, #212529);">TUGAS 18</div>
        <div class="card-content">
          <div class="card-head"><span class="badge b-dark">P18</span></div>
          <div class="card-title">Tugas Pertemuan 18</div>
          <div class="card-desc">Latihan Sistem Komprehensif.</div>
          <div class="card-footer"><span class="card-cta">Buka Tugas →</span><span class="card-lang">PHP</span></div>
        </div>
      </a>
      <a class="card" href="pertemuan19.php" target="_blank" rel="noopener">
        <div class="card-preview" style="background:linear-gradient(135deg, #6c757d, #343a40);">TUGAS 19</div>
        <div class="card-content">
          <div class="card-head"><span class="badge b-dark">P19</span></div>
          <div class="card-title">Tugas Pertemuan 19</div>
          <div class="card-desc">Aplikasi E-Commerce Toko Pakaian.</div>
          <div class="card-footer"><span class="card-cta">Buka Tugas →</span><span class="card-lang">PHP</span></div>
        </div>
      </a>
    </div>
  </div>

</main>

<footer>
  <div class="footer-inner">
    <div>
      <div class="footer-brand">⟨/⟩ Riyan Setiawan</div>
      <div class="footer-info"><b>Teknik Informatika</b> · Pemrograman Web<br><?php echo date('Y'); ?> · Semua hak dilindungi</div>
    </div>
  </div>
</footer>

</body>
</html>
