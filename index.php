<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Portal Tugas Web — Riyan Setiawan</title>
<meta name="description" content="Portfolio tugas pemrograman web PHP per pertemuan oleh Riyan Setiawan, Mahasiswa Teknik Informatika.">
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&family=Playfair+Display:ital,wght@0,700;0,800;1,700&display=swap" rel="stylesheet">
<style>
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
:root{
  --bg:#f8f9fa;
  --bg2:#ffffff;
  --surface:rgba(255,255,255,0.85);
  --surface2:rgba(255,255,255,0.6);
  --border:rgba(0,0,0,0.08);
  --border2:rgba(0,0,0,0.15);
  --primary:#343a40;
  --primary-dim:rgba(52,58,64,0.15);
  --accent:#495057;
  --accent2:#868e96;
  --gold:#6c757d;
  --purple:#adb5bd;
  --text:#212529;
  --text2:#343a40;
  --muted:#495057;
  --radius:12px;
}

html{scroll-behavior:smooth}
body{font-family:'Plus Jakarta Sans',sans-serif;background:var(--bg) url('images/22.png') no-repeat center center fixed;background-size:cover;color:var(--text);min-height:100vh;overflow-x:hidden;line-height:1.6;backdrop-filter:blur(3px);}

/* ── SCROLLBAR ── */
::-webkit-scrollbar{width:6px}
::-webkit-scrollbar-track{background:var(--bg)}
::-webkit-scrollbar-thumb{background:rgba(88,166,255,0.3);border-radius:99px}

/* ── NAV ── */
nav{position:sticky;top:0;z-index:200;background:rgba(13,17,23,0.88);backdrop-filter:blur(20px);-webkit-backdrop-filter:blur(20px);border-bottom:1px solid var(--border);height:60px;display:flex;align-items:center;justify-content:space-between;padding:0 2rem}
.nav-logo{font-weight:800;font-size:1rem;color:var(--text);letter-spacing:-0.01em;display:flex;align-items:center;gap:8px}
.nav-logo span{color:var(--text2);font-weight:400;font-size:.85rem}
.nav-links{display:flex;gap:1.6rem;list-style:none}
.nav-links a{font-size:.82rem;font-weight:600;color:var(--muted);text-decoration:none;letter-spacing:.04em;transition:color .2s}
.nav-links a:hover{color:var(--primary)}

/* ── HERO / PROFILE ── */
.hero{max-width:1100px;margin:0 auto;padding:5rem 2rem 4rem;display:flex;align-items:center;gap:4rem;position:relative;z-index:1}
.hero::after{content:'';position:absolute;top:-80px;right:0;width:500px;height:500px;background:radial-gradient(circle at 70% 30%,rgba(88,166,255,0.07) 0%,transparent 65%);pointer-events:none;z-index:-1}

.profile-photo-wrap{flex-shrink:0;position:relative}
.profile-photo-wrap::before{content:'';position:absolute;inset:-4px;border-radius:50%;background:linear-gradient(135deg,var(--primary),var(--purple),var(--accent));z-index:0;animation:rotateBorder 6s linear infinite}
@keyframes rotateBorder{from{transform:rotate(0deg)}to{transform:rotate(360deg)}}
.profile-photo-wrap::after{content:'';position:absolute;inset:2px;border-radius:50%;background:var(--bg);z-index:1}
.profile-photo{width:160px;height:160px;border-radius:50%;object-fit:cover;object-position:top center;position:relative;z-index:2;display:block}

.hero-content{flex:1}
.hero-eyebrow{display:inline-flex;align-items:center;gap:6px;font-size:.72rem;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:var(--accent);background:rgba(63,185,80,0.1);border:1px solid rgba(63,185,80,0.3);padding:5px 16px;border-radius:999px;margin-bottom:1.2rem}
.hero h1{font-family:'Playfair Display',serif;font-size:clamp(2rem,4.5vw,3.2rem);font-weight:800;line-height:1.1;letter-spacing:-0.02em;margin-bottom:.6rem;color:var(--text)}
.hero h1 em{font-style:italic;color:var(--primary)}
.hero-sub{font-size:1rem;color:var(--text2);font-weight:500;margin-bottom:.5rem}
.hero-desc{font-size:.88rem;color:var(--muted);line-height:1.8;max-width:500px;margin-bottom:1.8rem}

.hero-tags{display:flex;flex-wrap:wrap;gap:.5rem;margin-bottom:2rem}
.tag{font-size:.71rem;font-weight:700;letter-spacing:.06em;text-transform:uppercase;padding:4px 12px;border-radius:6px;border:1px solid}
.tag-blue{color:var(--primary);border-color:rgba(88,166,255,0.3);background:rgba(88,166,255,0.08)}
.tag-green{color:var(--accent);border-color:rgba(63,185,80,0.3);background:rgba(63,185,80,0.08)}
.tag-purple{color:var(--purple);border-color:rgba(188,140,255,0.3);background:rgba(188,140,255,0.08)}
.tag-gold{color:var(--gold);border-color:rgba(227,179,65,0.3);background:rgba(227,179,65,0.08)}

.hero-cta{display:flex;gap:.8rem;flex-wrap:wrap}
.btn-primary{display:inline-flex;align-items:center;gap:6px;font-size:.82rem;font-weight:700;color:#0d1117;background:var(--primary);padding:10px 24px;border-radius:8px;text-decoration:none;transition:background .2s,transform .2s,box-shadow .2s;letter-spacing:.03em}
.btn-primary:hover{background:#79c0ff;transform:translateY(-2px);box-shadow:0 8px 24px rgba(88,166,255,0.35)}
.btn-outline{display:inline-flex;align-items:center;gap:6px;font-size:.82rem;font-weight:700;color:var(--text2);background:transparent;border:1.5px solid var(--border2);padding:10px 24px;border-radius:8px;text-decoration:none;transition:all .2s;letter-spacing:.03em}
.btn-outline:hover{border-color:var(--primary);color:var(--primary);transform:translateY(-2px)}

/* ── DIVIDER ── */
.divider{max-width:1100px;margin:0 auto 0;padding:0 2rem}
.divider hr{border:none;border-top:1px solid var(--border);margin-bottom:3.5rem}

/* ── MAIN ── */
main{max-width:1100px;margin:0 auto;padding:0 2rem 6rem;position:relative;z-index:1}

/* ── SECTION HEADER ── */
.section{margin-bottom:3rem}
.sec-head{display:flex;align-items:center;gap:.75rem;margin-bottom:1.5rem;padding-bottom:1rem;border-bottom:1px solid var(--border)}
.sec-num{font-family:'Playfair Display',serif;font-size:1.6rem;font-weight:700;color:var(--primary);opacity:.25;min-width:2.2rem}
.sec-label{font-size:.78rem;font-weight:800;letter-spacing:.14em;text-transform:uppercase;color:var(--text2)}
.sec-badge{margin-left:auto;font-size:.66rem;font-weight:700;color:var(--muted);letter-spacing:.06em;text-transform:uppercase;background:var(--surface2);border:1px solid var(--border);padding:3px 10px;border-radius:4px}

/* ── GRID ── */
.grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(310px,1fr));gap:1rem}

/* ── CARD ── */
.card{background:var(--surface);border:1px solid var(--border);border-radius:var(--radius);padding:1.4rem 1.5rem;cursor:pointer;display:flex;flex-direction:column;gap:.65rem;transition:transform .28s cubic-bezier(.34,1.56,.64,1),box-shadow .28s,border-color .25s;position:relative;overflow:hidden;user-select:none;text-decoration:none;color:inherit}
.card::before{content:'';position:absolute;left:0;top:0;bottom:0;width:3px;border-radius:3px 0 0 3px;background:var(--card-accent, var(--primary));opacity:0;transition:opacity .25s}
.card:hover{transform:translateY(-5px);border-color:var(--border2);box-shadow:0 16px 48px rgba(0,0,0,0.4)}
.card:hover::before{opacity:1}

.card-head{display:flex;align-items:center;justify-content:space-between;gap:.5rem}
.card-ico{width:42px;height:42px;border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:20px;background:var(--surface2);border:1px solid var(--border);flex-shrink:0}
.badge{font-size:.62rem;font-weight:700;letter-spacing:.07em;text-transform:uppercase;padding:3px 10px;border-radius:4px;border:1px solid}

.b-blue{color:var(--primary);border-color:rgba(88,166,255,0.3);background:rgba(88,166,255,0.08)}
.b-green{color:var(--accent);border-color:rgba(63,185,80,0.3);background:rgba(63,185,80,0.08)}
.b-red{color:var(--accent2);border-color:rgba(247,129,102,0.3);background:rgba(247,129,102,0.08)}
.b-sky{color:#56d364;border-color:rgba(86,211,100,0.3);background:rgba(86,211,100,0.08)}
.b-purple{color:var(--purple);border-color:rgba(188,140,255,0.3);background:rgba(188,140,255,0.08)}
.b-gold{color:var(--gold);border-color:rgba(227,179,65,0.3);background:rgba(227,179,65,0.08)}

.card-title{font-size:.95rem;font-weight:700;color:var(--text);line-height:1.35}
.card-desc{font-size:.8rem;color:var(--muted);line-height:1.72;flex:1}
.card-footer{display:flex;align-items:center;justify-content:space-between;margin-top:.3rem;padding-top:.75rem;border-top:1px solid var(--border)}
.card-cta{font-size:.76rem;font-weight:700;color:var(--primary);display:flex;align-items:center;gap:4px;transition:gap .2s}
.card:hover .card-cta{gap:8px}
.card-lang{font-size:.68rem;color:var(--muted);font-weight:500}

/* ── SEARCH ── */
.search-section{background:var(--bg2);border-top:1px solid var(--border);border-bottom:1px solid var(--border);padding:1.5rem 0;margin-bottom:3rem}
.search-inner{max-width:1100px;margin:0 auto;padding:0 2rem;display:flex;align-items:center;gap:1rem;flex-wrap:wrap}
.search-label{font-size:.72rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--muted);white-space:nowrap}
.search-wrap{flex:1;min-width:200px;position:relative}
.search-wrap input{width:100%;padding:.75rem 1.2rem .75rem 2.6rem;background:var(--surface);border:1px solid var(--border2);border-radius:8px;color:var(--text);font-size:.86rem;font-family:'Plus Jakarta Sans',sans-serif;outline:none;transition:border-color .2s,box-shadow .2s}
.search-wrap input:focus{border-color:var(--primary);box-shadow:0 0 0 3px rgba(88,166,255,0.12)}
.search-wrap input::placeholder{color:var(--muted)}
.search-ico{position:absolute;left:.8rem;top:50%;transform:translateY(-50%);font-size:.85rem;opacity:.5}
.search-count{font-size:.78rem;color:var(--muted);white-space:nowrap}

/* ── FOOTER ── */
footer{background:var(--bg2);border-top:1px solid var(--border);padding:3rem 2rem}
.footer-inner{max-width:1100px;margin:0 auto;display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:1.5rem}
.footer-brand{font-weight:800;font-size:.95rem;color:var(--primary)}
.footer-info{font-size:.82rem;color:var(--muted);line-height:1.7}
.footer-info b{color:var(--text2);font-weight:600}
.footer-badge{display:flex;gap:.5rem}
.footer-badge span{font-size:.68rem;font-weight:700;padding:4px 10px;border-radius:4px;border:1px solid var(--border);color:var(--muted)}

/* ── RESPONSIVE ── */
@media(max-width:768px){
  .hero{flex-direction:column;text-align:center;padding:3rem 1.5rem 2.5rem;gap:2rem}
  .hero-desc{margin:0 auto 1.8rem}
  .hero-tags{justify-content:center}
  .hero-cta{justify-content:center}
  .grid{grid-template-columns:1fr}
  nav{padding:0 1.2rem}
  .nav-links{display:none}
  .footer-inner{flex-direction:column;text-align:center}
  .search-inner{flex-direction:column;align-items:stretch}
}
</style>
</head>
<body>

<!-- NAV -->
<nav>
  <div class="nav-logo">
    ⟨/⟩ <span>Riyan Setiawan</span>
  </div>
  <ul class="nav-links">
    <li><a href="#profile">Profil</a></li>
    <li><a href="#tasks">Tugas</a></li>
  </ul>
</nav>

<!-- HERO / PROFILE -->
<section class="hero" id="profile">
  <div class="profile-photo-wrap">
    <img class="profile-photo" src="images/1.jpeg" alt="Foto Riyan Setiawan">
  </div>
  <div class="hero-content">
    <div class="hero-eyebrow">✦ Mahasiswa Aktif</div>
    <h1>Riyan<br><em>Setiawan</em></h1>
    <p class="hero-sub">Teknik Informatika · Pemrograman Web</p>

    <div class="hero-cta">
      <a href="#tasks" class="btn-primary">📂 Lihat Tugas</a>
      <a href="mailto:riyansetiawan@email.com" class="btn-outline">✉ Hubungi Saya</a>
    </div>
  </div>
</section>

<!-- SEARCH BAR -->
<div class="search-section" id="tasks">
  <div class="search-inner">
    <span class="search-label">Filter Tugas</span>
    <div class="search-wrap">
      <span class="search-ico">🔍</span>
      <input type="text" id="search" placeholder="Cari berdasarkan nama atau topik..." oninput="filterCards()">
    </div>
    <span class="search-count" id="count-label">16 tugas tersedia</span>
  </div>
</div>

<!-- DIVIDER -->
<div class="divider"><hr></div>

<main>

  <!-- Pertemuan 3 -->
  <div class="section" id="sec-3" data-section>
    <div class="sec-head">
      <span class="sec-num">03</span>
      <span class="sec-label">Pertemuan 3</span>
      <span class="sec-badge">2 Tugas</span>
    </div>
    <div class="grid">
      <a class="card" style="--card-accent:var(--primary)" href="pertemuan3soal1.php" target="_blank" rel="noopener">
        <div class="card-head"><div class="card-ico">👤</div><span class="badge b-blue">Variabel</span></div>
        <div class="card-title">Soal 1 – Biodata Mahasiswa</div>
        <div class="card-desc">Menampilkan data pribadi menggunakan variabel dan tipe data PHP dasar.</div>
        <div class="card-footer">
          <span class="card-cta">Buka Tugas →</span>
          <span class="card-lang">PHP</span>
        </div>
      </a>
      <a class="card" style="--card-accent:var(--primary)" href="pertemuan3soal2.php" target="_blank" rel="noopener">
        <div class="card-head"><div class="card-ico">🔢</div><span class="badge b-blue">Aritmatika</span></div>
        <div class="card-title">Soal 2 – Operasi Aritmatika</div>
        <div class="card-desc">Operasi matematika dasar: tambah, kurang, kali, bagi menggunakan PHP.</div>
        <div class="card-footer">
          <span class="card-cta">Buka Tugas →</span>
          <span class="card-lang">PHP</span>
        </div>
      </a>
    </div>
  </div>

  <!-- Pertemuan 4 -->
  <div class="section" id="sec-4" data-section>
    <div class="sec-head">
      <span class="sec-num">04</span>
      <span class="sec-label">Pertemuan 4</span>
      <span class="sec-badge">2 Tugas</span>
    </div>
    <div class="grid">
      <a class="card" style="--card-accent:var(--purple)" href="pertemuan4soal1 SWITCHdanCASE.php" target="_blank" rel="noopener">
        <div class="card-head"><div class="card-ico">🔀</div><span class="badge b-purple">Switch</span></div>
        <div class="card-title">Soal 1 – Switch &amp; Case</div>
        <div class="card-desc">Percabangan switch-case untuk menentukan kondisi berdasarkan nilai input.</div>
        <div class="card-footer">
          <span class="card-cta">Buka Tugas →</span>
          <span class="card-lang">PHP</span>
        </div>
      </a>
      <a class="card" style="--card-accent:var(--purple)" href="pertemuan4soal1IF dan Else.php" target="_blank" rel="noopener">
        <div class="card-head"><div class="card-ico">🧠</div><span class="badge b-purple">IF/Else</span></div>
        <div class="card-title">Soal 1 – IF dan Else</div>
        <div class="card-desc">Percabangan kondisional menggunakan if-elseif-else di PHP.</div>
        <div class="card-footer">
          <span class="card-cta">Buka Tugas →</span>
          <span class="card-lang">PHP</span>
        </div>
      </a>
    </div>
  </div>

  <!-- Pertemuan 5 -->
  <div class="section" id="sec-5" data-section>
    <div class="sec-head">
      <span class="sec-num">05</span>
      <span class="sec-label">Pertemuan 5</span>
      <span class="sec-badge">2 Tugas</span>
    </div>
    <div class="grid">
      <a class="card" style="--card-accent:var(--accent)" href="pertemuan5soal2.php" target="_blank" rel="noopener">
        <div class="card-head"><div class="card-ico">🔁</div><span class="badge b-green">Loop</span></div>
        <div class="card-title">Soal 2 – Perulangan</div>
        <div class="card-desc">Implementasi perulangan dasar: for, while, do-while di PHP.</div>
        <div class="card-footer">
          <span class="card-cta">Buka Tugas →</span>
          <span class="card-lang">PHP</span>
        </div>
      </a>
      <a class="card" style="--card-accent:var(--accent)" href="pertemuan5soal3.php" target="_blank" rel="noopener">
        <div class="card-head"><div class="card-ico">📋</div><span class="badge b-green">Array</span></div>
        <div class="card-title">Soal 3 – Array &amp; Loop</div>
        <div class="card-desc">Penggunaan array dan perulangan untuk memproses kumpulan data.</div>
        <div class="card-footer">
          <span class="card-cta">Buka Tugas →</span>
          <span class="card-lang">PHP</span>
        </div>
      </a>
    </div>
  </div>

  <!-- Pertemuan 6 -->
  <div class="section" id="sec-6" data-section>
    <div class="sec-head">
      <span class="sec-num">06</span>
      <span class="sec-label">Pertemuan 6</span>
      <span class="sec-badge">1 Tugas</span>
    </div>
    <div class="grid">
      <a class="card" style="--card-accent:var(--primary)" href="pertemuan6tugas1.php" target="_blank" rel="noopener">
        <div class="card-head"><div class="card-ico">📝</div><span class="badge b-blue">Form</span></div>
        <div class="card-title">Tugas 1 – Form HTML &amp; PHP</div>
        <div class="card-desc">Membuat dan memproses form HTML dengan method GET dan POST menggunakan PHP.</div>
        <div class="card-footer">
          <span class="card-cta">Buka Tugas →</span>
          <span class="card-lang">PHP</span>
        </div>
      </a>
    </div>
  </div>

  <!-- Pertemuan 7 -->
  <div class="section" id="sec-7" data-section>
    <div class="sec-head">
      <span class="sec-num">07</span>
      <span class="sec-label">Pertemuan 7</span>
      <span class="sec-badge">3 Tugas</span>
    </div>
    <div class="grid">
      <a class="card" style="--card-accent:var(--gold)" href="pertemuan7soal1.php" target="_blank" rel="noopener">
        <div class="card-head"><div class="card-ico">⚙️</div><span class="badge b-gold">Fungsi</span></div>
        <div class="card-title">Soal 1 – Fungsi PHP</div>
        <div class="card-desc">Mendefinisikan dan memanggil fungsi dengan parameter dan return value.</div>
        <div class="card-footer">
          <span class="card-cta">Buka Tugas →</span>
          <span class="card-lang">PHP</span>
        </div>
      </a>
      <a class="card" style="--card-accent:var(--accent2)" href="pertemuan7soal3.php" target="_blank" rel="noopener">
        <div class="card-head"><div class="card-ico">🔢</div><span class="badge b-red">Matriks</span></div>
        <div class="card-title">Soal 3 – Perkalian Matriks</div>
        <div class="card-desc">Kalkulator perkalian matriks A(2×3) × B(3×3) dengan visualisasi langkah.</div>
        <div class="card-footer">
          <span class="card-cta">Buka Tugas →</span>
          <span class="card-lang">PHP</span>
        </div>
      </a>
      <a class="card" style="--card-accent:var(--gold)" href="pertemuan7soal4.php" target="_blank" rel="noopener">
        <div class="card-head"><div class="card-ico">💡</div><span class="badge b-gold">Output</span></div>
        <div class="card-title">Soal 4 – Output PHP</div>
        <div class="card-desc">Menampilkan output dengan berbagai metode: echo, print, printf, dll.</div>
        <div class="card-footer">
          <span class="card-cta">Buka Tugas →</span>
          <span class="card-lang">PHP</span>
        </div>
      </a>
    </div>
  </div>

  <!-- Pertemuan 9 -->
  <div class="section" id="sec-9" data-section>
    <div class="sec-head">
      <span class="sec-num">09</span>
      <span class="sec-label">Pertemuan 9</span>
      <span class="sec-badge">2 Tugas</span>
    </div>
    <div class="grid">
      <a class="card" style="--card-accent:var(--accent)" href="pertemuan9soal1tgldanwaktu.php" target="_blank" rel="noopener">
        <div class="card-head"><div class="card-ico">📅</div><span class="badge b-green">Date</span></div>
        <div class="card-title">Soal 1 – Tanggal &amp; Waktu</div>
        <div class="card-desc">Fungsi date() dan time() PHP untuk menampilkan dan memformat tanggal.</div>
        <div class="card-footer">
          <span class="card-cta">Buka Tugas →</span>
          <span class="card-lang">PHP</span>
        </div>
      </a>
      <a class="card" style="--card-accent:var(--accent)" href="pertemuan9soal2fungsistring.php" target="_blank" rel="noopener">
        <div class="card-head"><div class="card-ico">🔤</div><span class="badge b-green">String</span></div>
        <div class="card-title">Soal 2 – Fungsi String</div>
        <div class="card-desc">Fungsi string bawaan PHP: strlen, strtoupper, substr, str_replace, dll.</div>
        <div class="card-footer">
          <span class="card-cta">Buka Tugas →</span>
          <span class="card-lang">PHP</span>
        </div>
      </a>
    </div>
  </div>

  <!-- Pertemuan 14 -->
  <div class="section" id="sec-14" data-section>
    <div class="sec-head">
      <span class="sec-num">14</span>
      <span class="sec-label">Pertemuan 14</span>
      <span class="sec-badge">2 Tugas</span>
    </div>
    <div class="grid">
      <a class="card" style="--card-accent:var(--primary)" href="pertemuan14search_produk.php" target="_blank" rel="noopener">
        <div class="card-head"><div class="card-ico">🔍</div><span class="badge b-blue">Search</span></div>
        <div class="card-title">Search Produk – Pencarian &amp; Paginasi</div>
        <div class="card-desc">Pencarian data produk dengan MySQL LIKE dan fitur paginasi dinamis.</div>
        <div class="card-footer">
          <span class="card-cta">Buka Tugas →</span>
          <span class="card-lang">PHP + MySQL</span>
        </div>
      </a>
      <a class="card" style="--card-accent:var(--primary)" href="pertemuan14sorting_produk.php" target="_blank" rel="noopener">
        <div class="card-head"><div class="card-ico">📊</div><span class="badge b-blue">Sorting</span></div>
        <div class="card-title">Sorting Produk – Urutan Harga</div>
        <div class="card-desc">Menampilkan produk berurutan dari harga termurah atau termahal dengan paginasi.</div>
        <div class="card-footer">
          <span class="card-cta">Buka Tugas →</span>
          <span class="card-lang">PHP + MySQL</span>
        </div>
      </a>
    </div>
  </div>

  <!-- Pertemuan 15 -->
  <div class="section" id="sec-15" data-section>
    <div class="sec-head">
      <span class="sec-num">15</span>
      <span class="sec-label">Pertemuan 15</span>
      <span class="sec-badge">1 Tugas</span>
    </div>
    <div class="grid">
      <a class="card" style="--card-accent:var(--accent2)" href="pertemuan15index.php" target="_blank" rel="noopener">
        <div class="card-head"><div class="card-ico">📚</div><span class="badge b-red">Transaksi</span></div>
        <div class="card-title">Aplikasi Peminjaman Buku</div>
        <div class="card-desc">Sistem perpustakaan dengan stored procedure MySQL untuk transaksi peminjaman real-time.</div>
        <div class="card-footer">
          <span class="card-cta">Buka Tugas →</span>
          <span class="card-lang">PHP + MySQL</span>
        </div>
      </a>
    </div>
  </div>

  <!-- Pertemuan 16 -->
  <div class="section" id="sec-16" data-section>
    <div class="sec-head">
      <span class="sec-num">16</span>
      <span class="sec-label">Pertemuan 16</span>
      <span class="sec-badge">1 Tugas</span>
    </div>
    <div class="grid">
      <a class="card" style="--card-accent:var(--accent)" href="pertemuan16.php" target="_blank" rel="noopener">
        <div class="card-head"><div class="card-ico">🛒</div><span class="badge b-green">Session</span></div>
        <div class="card-title">Keranjang Belanja – Session PHP</div>
        <div class="card-desc">Simulasi keranjang belanja menggunakan PHP Session: tambah, lihat, dan kosongkan cart.</div>
        <div class="card-footer">
          <span class="card-cta">Buka Tugas →</span>
          <span class="card-lang">PHP</span>
        </div>
      </a>
    </div>
  </div>

  <!-- Tugas Tambahan -->
  <div class="section" id="sec-extra" data-section>
    <div class="sec-head">
      <span class="sec-num">+</span>
      <span class="sec-label">Tugas Tambahan</span>
      <span class="sec-badge">1 Tugas</span>
    </div>
    <div class="grid">
      <a class="card" style="--card-accent:var(--gold)" href="tugas3.php" target="_blank" rel="noopener">
        <div class="card-head"><div class="card-ico">📌</div><span class="badge b-gold">PHP</span></div>
        <div class="card-title">Tugas 3</div>
        <div class="card-desc">Tugas terstruktur PHP dengan logika dan tampilan lebih lanjut.</div>
        <div class="card-footer">
          <span class="card-cta">Buka Tugas →</span>
          <span class="card-lang">PHP</span>
        </div>
      </a>
    </div>
  </div>

</main>

<!-- FOOTER -->
<footer>
  <div class="footer-inner">
    <div>
      <div class="footer-brand">⟨/⟩ Riyan Setiawan</div>
      <div class="footer-info">
        <b>Teknik Informatika</b> · Pemrograman Web<br>
        <?php echo date('Y'); ?> · Semua hak dilindungi
      </div>
    </div>
    <div class="footer-badge">
      <span>PHP</span>
      <span>MySQL</span>
      <span>HTML</span>
    </div>
  </div>
</footer>

<script>
const cards = document.querySelectorAll('.card');
const totalCards = cards.length;
document.getElementById('count-label').textContent = totalCards + ' tugas tersedia';

function filterCards() {
  const q = document.getElementById('search').value.toLowerCase();
  let visible = 0;
  cards.forEach(c => {
    const match = c.innerText.toLowerCase().includes(q);
    c.style.display = match ? '' : 'none';
    if (match) visible++;
  });
  document.getElementById('count-label').textContent = visible + ' tugas ditemukan';
  document.querySelectorAll('.section[data-section]').forEach(s => {
    const hasVisible = [...s.querySelectorAll('.card')].some(c => c.style.display !== 'none');
    s.style.display = hasVisible ? '' : 'none';
  });
}

// Entrance animation
const obs = new IntersectionObserver(entries => {
  entries.forEach(e => {
    if (e.isIntersecting) {
      e.target.style.opacity = '1';
      e.target.style.transform = 'translateY(0)';
      obs.unobserve(e.target);
    }
  });
}, { threshold: 0.06 });

cards.forEach((c, i) => {
  c.style.opacity = '0';
  c.style.transform = 'translateY(18px)';
  c.style.transition = `opacity .4s ease ${i * 0.04}s, transform .4s ease ${i * 0.04}s, border-color .25s, box-shadow .28s`;
  obs.observe(c);
});
</script>
</body>
</html>
