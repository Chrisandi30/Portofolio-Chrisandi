<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#090a10">
    <meta name="description" content="Portofolio Chrisandi Jeremia Alonso Sianipar, lulusan Manajemen Informatika.">
    <title>Chrisandi Jeremia Alonso Sianipar - Portofolio</title>
    <link rel="icon" type="image/png" href="img/favicon/Logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="style.css?v=<?= filemtime(__DIR__ . '/style.css') ?>">
</head>
<body>
    <div class="page-loader" id="page-loader" role="status" aria-label="Memuat halaman">
        <span class="page-loader-spinner" aria-hidden="true"></span>
        <span>Memuat...</span>
    </div>
    <noscript><style>.page-loader { display: none; }</style></noscript>
    <header class="site-header">
        <nav class="navigation container" aria-label="Navigasi utama">
            <a class="brand" href="#home" aria-label="Chrisandi Jeremia Alonso Sianipar">Chrisandi J.A Sianipar</a>
            <button class="menu-toggle" type="button" aria-label="Buka navigasi" aria-expanded="false" aria-controls="nav-links">
                <span></span><span></span>
            </button>
            <div class="nav-links" id="nav-links">
                <a class="active" href="#home">Beranda</a>
                <a href="#about">Tentang Saya</a>
                <a href="#portfolio">Portfolio</a>
                <a href="#education">Pendidikan</a>
                <a href="#experience">Pengalaman</a>
                <a href="#certificates">Sertifikat</a>
                <a href="#contact">Kontak</a>
            </div>
        </nav>
    </header>

    <main>
        <section class="hero" id="home">
            <div class="hero-shape hero-shape-one"></div>
            <div class="hero-shape hero-shape-two"></div>
            <div class="hero-content container">
                <div class="hero-copy" data-aos="fade-up"  data-aos-duration="3000">
                    <h1>Hi, Saya Chrisandi Jeremia Alonso Sianipar</h1>
                    <p class="hero-role">Fresh Graduate <i></i> Manajemen Informatika <i></i> IPK 3.60</p>
                    <p class="hero-description">Web Developer & IT Support lulusan D3 Manajemen Informatika dari Politeknik Negeri Medan</p>
                    <div class="hero-actions">
                        <a class="button button-primary" href="#portfolio">Lihat Portfolio</a>
                        <a class="button button-primary" href="assets/CV%20CHRISANDI%20JEREMIA%20ALONSO%20SIANIPAR.pdf" download="CV-CHRISANDI-JEREMIA-ALONSO-SIANIPAR.pdf">Unduh CV</a>
                    </div>
                </div>
                <div class="hero-portrait" aria-label="Foto profil Chrisandi" data-aos="fade-left" data-aos-duration="3000">
                    <div class="portrait-orb"></div>
                    <img src="img/foto.png?auto=format&amp;fit=crop&amp;w=900&amp;q=85" alt="Foto profil placeholder, ganti dengan foto Anda">
                    <span class="portrait-spark" aria-hidden="true"></span>
                </div>
            </div>
        </section>

        <section class="about-section section" id="about">
            <div class="container about-content">
                <div class="heading about-heading" data-aos="fade-up">
                    <h2>Tentang Saya</h2>
                    <span class="heading-underline"></span>
                </div>
                <div class="about-grid">
                    <article class="about-card" data-aos="fade-up" data-aos-delay="100">
                        <span class="about-card-icon" aria-hidden="true"><i class="fa-solid fa-user-tie"></i></span>
                        <div class="about-copy">
                            <p>Saya seorang lulusan D3 Manajemen Informatika dari Politeknik Negeri Medan dengan IPK 3.60 yang memiliki ketertarikan mendalam pada Web Development, pengelolaan database, serta administrasi dan pengolahan data. Saya memiliki pengalaman praktis sebagai staf administrasi dan IT Support melalui magang di Biro Administrasi Pembangunan Setda Provsu.</p>
                            <p>Didukung oleh penguasaan teknologi seperti HTML, CSS, JavaScript, PHP, Laravel, MySQL, dan Microsoft Office, saya siap menghadirkan solusi digital yang fungsional dan terstruktur dengan baik.</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="portfolio-section section" id="portfolio">
            <div class="container">
                <div class="portfolio-heading" data-aos="fade-up">
                    <h2>Portofolio</h2>
                    <span class="heading-underline"></span>
                    <p>Project, tools, dan kemampuan yang saya miliki</p>
                </div>
                <div class="portfolio-tabs" role="tablist" aria-label="Kategori portofolio">
                    <button class="portfolio-tab is-active" id="portfolio-tab-projects" type="button" role="tab" aria-selected="true" aria-controls="portfolio-panel-projects" data-portfolio-tab="projects">Projects</button>
                    <button class="portfolio-tab" id="portfolio-tab-tools" type="button" role="tab" aria-selected="false" aria-controls="portfolio-panel-tools" data-portfolio-tab="tools" tabindex="-1">Tools</button>
                    <button class="portfolio-tab" id="portfolio-tab-hard-skills" type="button" role="tab" aria-selected="false" aria-controls="portfolio-panel-hard-skills" data-portfolio-tab="hard-skills" tabindex="-1">Hard Skills</button>
                    <button class="portfolio-tab" id="portfolio-tab-soft-skills" type="button" role="tab" aria-selected="false" aria-controls="portfolio-panel-soft-skills" data-portfolio-tab="soft-skills" tabindex="-1">Soft Skills</button>
                </div>
                <div class="portfolio-carousel-controls">
                    <button type="button" class="portfolio-prev" aria-label="Item portofolio sebelumnya">‹</button>
                    <button type="button" class="portfolio-next" aria-label="Item portofolio berikutnya">›</button>
                </div>
                <div class="portfolio-panels">
                    <section class="portfolio-panel is-active" id="portfolio-panel-projects" role="tabpanel" aria-labelledby="portfolio-tab-projects" data-portfolio-panel="projects">
                        <div class="portfolio-track project-track">
                            <article class="portfolio-project experience-card" data-aos="fade-up">
                                <img class="project-cover" src="img/portfolio/TK.png" alt="Ilustrasi placeholder katalog sistem peminjaman alat">
                                <div class="project-body"><h3>Sistem Informasi Perkembangan Belajar Anak pada TK Swasta Winfield</h3><p>Sistem Informasi untuk pembuatan serta pengelolaan informasi perkembangan belajar anak.</p><div class="project-tags"><span>Laravel</span><span>PHP</span><span>JavaScript</span><span>Tailwind CSS</span><span>MySQL</span></div><div class="experience-gallery" aria-label="Dokumentasi proyek TK Swasta Winfield"><img class="experience-thumb" src="img/portfolio/Login%20tk.png" alt="Halaman login sistem TK"><img class="experience-thumb" src="img/portfolio/TK.png" alt="Halaman utama sistem TK"><img class="experience-thumb" src="img/portfolio/dashboard%20guru.png" alt="Dashboard guru"><img class="experience-thumb" src="img/portfolio/form%20input%20laporan.png" alt="Form input laporan perkembangan"><img class="experience-thumb" src="img/portfolio/detail%20laporan.png" alt="Detail laporan perkembangan"><img class="experience-thumb" src="img/portfolio/dashboard%20kepsek.png" alt="Dashboard kepala sekolah"><img class="experience-thumb" src="img/portfolio/validasi%20laporan.png" alt="Halaman validasi laporan"><img class="experience-thumb" src="img/portfolio/profil%20siswa.png" alt="Profil siswa"><img class="experience-thumb" src="img/portfolio/laporan%20perkembangan.png" alt="Laporan perkembangan siswa"></div><button class="experience-detail-button" type="button">Lihat Detail</button></div>
                                <div class="experience-extra" hidden><p class="experience-modal-subtitle">Website · Sistem Perkembangan Belajar Anak</p><dl class="experience-facts"><div><dt>Peran</dt><dd>Pembuatan dan Pengelolaan Laporan Perkembangan Belajar Anak kepada Orang tua</dd></div><div><dt>Teknologi</dt><dd>Laravel, PHP, JavaScript, Tailwind CSS dan MySQL</dd></div><div><dt>Fitur</dt><dd>Login admin, guru, Kepala Sekolah dan Orang Tua, Pembuatan dan pengelolaan laporan oleh Guru, Validasi Data oleh Kepala Sekolah, serta orang tua siswa dapat melihat laporan perkembangan anak melalui website</dd></div></dl><h4>Ringkasan Proyek</h4><ul><li>Membangun sistem informasi perkembangan anak berbasis website untuk TK Swasta Winfield.</li><li>Mengembangkan antarmuka multi-peran yang responsif (Bootstrap 5, Tailwind CSS, Livewire 3) dengan komponen interaktif dan formulir dinamis.</li><li>Merancang database untuk mengelola data siswa, guru, kelas, mata pelajaran, dan laporan perkembangan anak.</li><li>Membangun website dengan fitur pengelolaan lapora perkembangan anak oleh guru berdasrkan aspek perkembangan yang telah ditetapkan.</li><li>Mengimplementasikan alur pelaporan perkembangan anak dari pengisian berkala oleh guru, validasi/revisi beserta catatan oleh kepala sekolah, hingga penerbitan laporan ke orang tua.</li></ul></div>
                            </article>
                            <article class="portfolio-project experience-card" data-aos="fade-up" data-aos-delay="100">
                                <img class="project-cover" src="img/portfolio/kasir.png" alt="Ilustrasi placeholder dashboard aplikasi kasir">
                                <div class="project-body"><h3>Aplikasi Kasir UMKM</h3><p>Aplikasi kasir berbasis website admin untuk mengelola transaksi.</p><div class="project-tags"><span>Laravel</span><span>PHP</span><span>JavaScript</span><span>CRUD</span><span>Tailwind CSS</span><span>MySQL</span></div><div class="experience-gallery" aria-label="Dokumentasi aplikasi kasir UMKM"><img class="experience-thumb" src="img/portfolio/login%20kasir.png" alt="Halaman login kasir"><img class="experience-thumb" src="img/portfolio/kasir%20home.png" alt="Beranda aplikasi kasir"><img class="experience-thumb" src="img/portfolio/barang%20kasir.png" alt="Daftar barang pada aplikasi kasir"><img class="experience-thumb" src="img/portfolio/tambah%20barang.png" alt="Form tambah barang"><img class="experience-thumb" src="img/portfolio/riwayat%20kasir.png" alt="Riwayat transaksi kasir"><img class="experience-thumb" src="img/portfolio/pengeluaran%20kasir.png" alt="Pencatatan pengeluaran"><img class="experience-thumb" src="img/portfolio/laporan%20kasir.png" alt="Laporan aplikasi kasir"></div><button class="experience-detail-button" type="button">Lihat Detail</button></div>
                                <div class="experience-extra" hidden><p class="experience-modal-subtitle">Website · Sistem Kasir UMKM</p><dl class="experience-facts"><div><dt>Peran</dt><dd>Membantu UMKM mengelola transaksi, stok barang, pengeluaran, serta laporan penjualan.</dd></div><div><dt>Teknologi</dt><dd>Laravel, PHP, Tailwind CSS, JavaScript dan MySQL</dd></div><div><dt>Fitur</dt><dd>Login kasir, transaksi penjualan, pengelolaan barang dan stok, pencatatan pengeluaran, riwayat transaksi, serta laporan pendapatan dan pengeluaran berdasarkan periode.</dd></div></dl><h4>Ringkasan Proyek</h4><ul><li>Membangun aplikasi POS berbasis web menggunakan Laravel, PHP, dan MySQL untuk mengelola transaksi, produk, pengeluaran, dan laporan secara terintegrasi.</li><li>Mengembangkan antarmuka kasir responsif dengan Tailwind CSS dan JavaScript yang dilengkapi pencarian produk, keranjang, diskon, PPN, serta metode pembayaran.</li><li>Mengimplementasikan proses checkout transaksional untuk validasi dan penguncian stok dan pengurangan stok secara real-time.</li><li>Menyediakan manajemen inventaris lengkap serta modul pengeluaran operasional toko.</li><li>Menyajikan laporan keuangan dan riwayat transaksi dengan filter periode, kalkulasi laba bersih, serta visualisasi grafik.</li></ul></div>
                            </article>
                            <article class="portfolio-project experience-card" data-aos="fade-up" data-aos-delay="200">
                                <img class="project-cover" src="img/portfolio/TIX.png" alt="Ilustrasi placeholder halaman booking servis online">
                                <div class="project-body"><h3>Aplikasi TIX ID</h3><p>Aplikasi pemesanan Tiket Bioskop berbasis website.</p><div class="project-tags"><span>Laravel</span><span>PHP</span><span>Tailwind CSS</span><span>JavaScript</span><span>MySQL</span></div><div class="experience-gallery" aria-label="Dokumentasi aplikasi TIX ID"><img class="experience-thumb" src="img/portfolio/TIX.png" alt="Halaman aplikasi TIX ID"><img class="experience-thumb" src="img/portfolio/cinemas.png" alt="Daftar bioskop"><img class="experience-thumb" src="img/portfolio/login%20tix.png" alt="Halaman login TIX ID"><img class="experience-thumb" src="img/portfolio/beranda%20user.png" alt="Beranda pengguna"><img class="experience-thumb" src="img/portfolio/pemilihan%20bioskop.png" alt="Pemilihan bioskop"><img class="experience-thumb" src="img/portfolio/pemilihan%20kursi.png" alt="Pemilihan kursi"><img class="experience-thumb" src="img/portfolio/pembayaran.png" alt="Halaman pembayaran"><img class="experience-thumb" src="img/portfolio/dashboard%20tix.png" alt="Dashboard admin TIX ID"><img class="experience-thumb" src="img/portfolio/data%20film.png" alt="Pengelolaan data film"></div><button class="experience-detail-button" type="button">Lihat Detail</button></div>
                                <div class="experience-extra" hidden><p class="experience-modal-subtitle">Website · Sistem Pemesanan Tiket Bioskop</p><dl class="experience-facts"><div><dt>Peran</dt><dd>memudahkan pelanggan memesan tiket bioskop secara online dan membantu admin mengelola film, jadwal, serta transaksi</dd></div><div><dt>Teknologi</dt><dd>Laravel, PHP, Tailwind CSS, JavaScript, MySQL</dd></div><div><dt>Fitur</dt><dd>Login untuk pengguna dan Admin, melihat daftar film, memilih bioskop, jadwal dan kursi, memesan tiket, melihat riwayat transaksi, serta mengelola film, promo, bioskop, studio, jadwal, pengguna, dan transaksi melalui panel admin</dd></div></dl><h4>Ringkasan Proyek</h4><ul><li>Membangun dan merancang platform web tix menggunakan Laravel, PHP, dan MySQL untuk mengelola film, bioskop, studio, jadwal, dan tiket terintegrasi.</li><li>Mengembangkan antarmuka responsif untuk penelusuran film, pemilihan kursi interaktif, dan pembayaran online.</li><li>Mengimplementasikan alur checkout (validasi kursi, kode booking, biaya layanan, serta integrasi Midtrans untuk status pembayaran).</li><li>Menyediakan panel admin untuk pengelolaan data master (film, bioskop, studio, jadwal, pengguna) dan pemantauan transaksi.</li><li>Menyajikan dasbor analitik (grafik pendapatan, film terlaris) serta manajemen riwayat tiket aktif pengguna.</li></ul></div>
                            </article>
                            <article class="portfolio-project experience-card" data-aos="fade-up" data-aos-delay="200">
                                <img class="project-cover" src="img/portfolio/donut.png" alt="Ilustrasi placeholder halaman booking servis online">
                                <div class="project-body"><h3>Sistem Informasi Pemesanan Donat</h3><p>Aplikasi berbasis website pemesanan donat.</p><div class="project-tags"><span>PHP</span><span>JavaScript</span><span>Tailwind CSS</span><span>MySQL</span></div><div class="experience-gallery" aria-label="Dokumentasi sistem pemesanan donat"><img class="experience-thumb" src="img/portfolio/donut.png" alt="Halaman utama pemesanan donat"><img class="experience-thumb" src="img/portfolio/menu%20donut.png" alt="Daftar menu donat"><img class="experience-thumb" src="img/portfolio/co%20donut.png" alt="Proses pemesanan donat"><img class="experience-thumb" src="img/portfolio/co2%20donut.png" alt="Detail proses pemesanan donat"><img class="experience-thumb" src="img/portfolio/riwayat%20donut.png" alt="Riwayat pesanan donat"><img class="experience-thumb" src="img/portfolio/dashboard%20donut.png" alt="Dashboard admin donat"></div><button class="experience-detail-button" type="button">Lihat Detail</button></div>
                                <div class="experience-extra" hidden><p class="experience-modal-subtitle">Website · Sistem Pemesanan Donat</p><dl class="experience-facts"><div><dt>Peran</dt><dd>Website pemesanan donat secara online</dd></div><div><dt>Teknologi</dt><dd>PHP, JavaScript, MySQL</dd></div><div><dt>Fitur</dt><dd>Pemesanan donat secara online oleh pelanggan dan pemilik dapat mengelola katalog menu, transaksi serta laporan penjualan</dd></div></dl><h4>Ringkasan Proyek</h4><ul><li>Membangun platform web pemesanan Sayban Donut &amp; Bakery (PHP native, MySQL) untuk mengelola produk, kategori, pengguna, dan pesanan secara terintegrasi.</li><li>Mengembangkan antarmuka responsif untuk katalog produk, keranjang interaktif, dan alur pemesanan.</li><li>Mengimplementasikan alur checkout terautentikasi lengkap dengan integrasi Midtrans Snap untuk pembayaran online.</li><li>Menyediakan panel admin untuk manajemen data master dan pemantauan transaksi.</li><li>Menyajikan dasbor analitik grafik, fitur cetak laporan, serta riwayat pesanan pengguna.</li></ul></div>
                            </article>
                        </div>
                    </section>
                    <section class="portfolio-panel" id="portfolio-panel-tools" role="tabpanel" aria-labelledby="portfolio-tab-tools" data-portfolio-panel="tools" hidden>
                        <div class="portfolio-track skill-track">
                            <article class="portfolio-skill"><img class="skill-logo-image" src="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.17.0/icons/html5/html5-original.svg" alt="" aria-hidden="true"><h3>HTML</h3></article>
                            <article class="portfolio-skill"><img class="skill-logo-image" src="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.17.0/icons/css3/css3-original.svg" alt="" aria-hidden="true"><h3>CSS</h3></article>
                            <article class="portfolio-skill"><img class="skill-logo-image" src="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.17.0/icons/javascript/javascript-original.svg" alt="" aria-hidden="true"><h3>JavaScript</h3></article>
                            <article class="portfolio-skill"><img class="skill-logo-image" src="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.17.0/icons/php/php-original.svg" alt="" aria-hidden="true"><h3>PHP</h3></article>
                            <article class="portfolio-skill"><img class="skill-logo-image" src="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.17.0/icons/laravel/laravel-original.svg" alt="" aria-hidden="true"><h3>Laravel</h3></article>
                            <article class="portfolio-skill"><img class="skill-logo-image" src="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.17.0/icons/flutter/flutter-original.svg" alt="" aria-hidden="true"><h3>Flutter</h3></article>
                            <article class="portfolio-skill"><img class="skill-logo-image" src="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.17.0/icons/mysql/mysql-original.svg" alt="" aria-hidden="true"><h3>MySQL</h3></article>
                            <article class="portfolio-skill"><img class="skill-logo-image" src="https://cdn.simpleicons.org/github/FFFFFF" alt="" aria-hidden="true"><h3>GitHub</h3></article>
                            <article class="portfolio-skill"><img class="skill-logo-image" src="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.17.0/icons/vscode/vscode-original.svg" alt="" aria-hidden="true"><h3>VS Code</h3></article>
                            <article class="portfolio-skill"><img class="skill-logo-image" src="https://cdn.simpleicons.org/xampp/F37623" alt="" aria-hidden="true"><h3>XAMPP</h3></article>
                            <article class="portfolio-skill"><img class="skill-logo-image" src="https://cdn.simpleicons.org/laragon" alt="" aria-hidden="true"><h3>Laragon</h3></article>
                            <article class="portfolio-skill"><img class="skill-logo-image" src="https://upload.wikimedia.org/wikipedia/commons/0/0c/Microsoft_Office_logo_%282013%E2%80%932019%29.svg" alt="" aria-hidden="true"><h3>MS Office</h3></article>
                        </div>
                    </section>
                    <section class="portfolio-panel" id="portfolio-panel-hard-skills" role="tabpanel" aria-labelledby="portfolio-tab-hard-skills" data-portfolio-panel="hard-skills" hidden>
                        <div class="portfolio-track skill-track">
                            <article class="portfolio-skill"><i class="skill-package-icon fa-solid fa-code" aria-hidden="true"></i><h3>Web Development</h3></article>
                            <article class="portfolio-skill"><i class="skill-package-icon fa-solid fa-pen-ruler" aria-hidden="true"></i><h3>Front End UI/UX Design</h3></article>
                            <article class="portfolio-skill"><i class="skill-package-icon fa-solid fa-code-branch" aria-hidden="true"></i><h3>Laravel</h3></article>
                            <article class="portfolio-skill"><i class="skill-package-icon fa-solid fa-file-word" aria-hidden="true"></i><h3>Microsoft Office</h3></article>
                            <article class="portfolio-skill"><i class="skill-package-icon fa-solid fa-clipboard-list" aria-hidden="true"></i><h3>Administrasi</h3></article>
                            <article class="portfolio-skill"><i class="skill-package-icon fa-solid fa-database" aria-hidden="true"></i><h3>Pengelolaan Database</h3></article>
                        </div>
                    </section>
                    <section class="portfolio-panel" id="portfolio-panel-soft-skills" role="tabpanel" aria-labelledby="portfolio-tab-soft-skills" data-portfolio-panel="soft-skills" hidden>
                        <div class="portfolio-track skill-track">
                            <article class="portfolio-skill"><i class="skill-package-icon fa-solid fa-comments" aria-hidden="true"></i><h3>Komunikasi</h3></article>
                            <article class="portfolio-skill"><i class="skill-package-icon fa-solid fa-people-group" aria-hidden="true"></i><h3>Kerja Tim</h3></article>
                            <article class="portfolio-skill"><i class="skill-package-icon fa-solid fa-list-check" aria-hidden="true"></i><h3>Ketelitian</h3></article>
                            <article class="portfolio-skill"><i class="skill-package-icon fa-solid fa-clock" aria-hidden="true"></i><h3>Manajemen Waktu</h3></article>
                            <article class="portfolio-skill"><i class="skill-package-icon fa-solid fa-lightbulb" aria-hidden="true"></i><h3>Problem Solving</h3></article>
                        </div>
                    </section>
                </div>
            </div>
        </section>

        <section class="history-section section" id="education">
            <div class="container education-content">
                <div class="heading education-heading" data-aos="fade-up">
                    <h2>Pendidikan</h2>
                    <span class="heading-underline"></span>
                    <p>Riwayat pendidikan</p>
                </div>
                <div class="education-grid">
                    <article class="education-card" data-aos="fade-up" data-aos-delay="100">
                        <img class="education-logo" src="img/Logo%20Polmed.png" alt="Logo Politeknik Negeri Medan">
                        <div class="education-details">
                            <p class="education-period">2023 — 2026</p>
                            <h3>Politeknik Negeri Medan</h3>
                            <p class="education-major">D3 Manajemen Informatika · IPK 3.60</p>
                            <p class="history-note">Tugas Akhir Rancang Bangun Sistem Informasi Perkembangan Belajar Anak pada TK Swasta Winfield Berbasis Website</p>
                        </div>
                        <span class="education-status">LULUS</span>
                    </article>
                </div>
            </div>
        </section>

        <section class="experience-section section" id="experience">
            <div class="container">
                <div class="heading" data-aos="fade-up">
                    <h2>Pengalaman</h2>
                    <span class="heading-underline"></span>
                    <p>Pengalaman Magang dan Proyek Saya</p>
                </div>
                <div class="portfolio-carousel-controls">
                    <button type="button" class="portfolio-prev" aria-label="Item pengalaman sebelumnya">‹</button>
                    <button type="button" class="portfolio-next" aria-label="Item pengalaman berikutnya">›</button>
                </div>
                <div class="experience-grid">
                    <article class="experience-card" data-aos="fade-up">
                        <img class="experience-cover" src="img/portfolio/magang1.jpeg" alt="Ilustrasi placeholder lingkungan kerja magang">
                        <p class="experience-period">Magang · Januari – Maret 2026</p>
                        <h3>Biro Administrasi Pembangunan Provinsi Sumatera Utara</h3>
                        <p class="experience-summary">Posisi sebagai admin dan IT Support yang bertugas merekap dan memonitoring data, mendata surat masuk dan surat keluar dan beberapa pekerjaan IT Support seperti TroubleShooting.</p>
                        <div class="experience-gallery" aria-label="Dokumentasi magang">
                            <img class="experience-thumb" src="img/portfolio/magang2.png" alt="Placeholder dokumentasi kegiatan kerja">
                            <img class="experience-thumb" src="img/portfolio/magang3.png" alt="Placeholder dokumentasi kolaborasi tim">
                            <img class="experience-thumb" src="img/portfolio/magang4.png" alt="Placeholder dokumentasi suasana kerja">
                            <img class="experience-thumb" src="img/portfolio/magang5.png" alt="Placeholder dokumentasi suasana kerja">
                            <img class="experience-thumb" src="img/portfolio/magang6.png" alt="Placeholder dokumentasi suasana kerja">
                            <img class="experience-thumb" src="img/portfolio/magang7.png" alt="Placeholder dokumentasi suasana kerja">
                            <img class="experience-thumb" src="img/portfolio/magang8.png" alt="Placeholder dokumentasi suasana kerja">
                            <img class="experience-thumb" src="img/portfolio/magang9.png" alt="Placeholder dokumentasi suasana kerja">
                            <img class="experience-thumb" src="img/portfolio/magang10.png" alt="Placeholder dokumentasi suasana kerja">
                        </div>
                        <button class="experience-detail-button" type="button">Lihat Detail</button>
                        <div class="experience-extra" hidden>
                            <p class="experience-modal-subtitle">Magang · Admin Bagian Pelaporan</p>
                            <dl class="experience-facts">
                                <div><dt>Lokasi</dt><dd>Medan, Indonesia</dd></div>
                                <div><dt>Unit</dt><dd>Biro Administrasi Pembangunan Provinsi Sumatera Utara</dd></div>
                                <div><dt>Periode</dt><dd>Januari – Maret 2025</dd></div>
                            </dl>
                            <h4>Tanggung Jawab</h4>
                            <ul><li>Merekapitulasi Laporan Kegiatan Fisik pada Tahun 2025 dan 2026.</li><li>Mengikuti dan Memahami Rapat Materi Sebagai Admin Website Dinas Kesehatan di PRP2SUMUT.</li><li>•	Melakukan Monitoring Data Kegiatan Infrakstruktur Kabupaten/Kota Pada Sistem PRP2SUMUT yang di Input Oleh Admin OPD.</li><li>Merekap Gaji Honorer dan Mendata Daftar SK Tim Entri Data Realistis Fisik</li><li>Sebagai IT Support pada Biro Administrasi Pembangunan Setda Provsu</li></ul>
                        </div>
                    </article>
                    <article class="experience-card" data-aos="fade-up" data-aos-delay="100">
                        <img class="experience-cover" src="img/portfolio/TK.png" alt="Ilustrasi placeholder proses pengembangan proyek akhir">
                        <p class="experience-period">Proyek Tugas Akhir · 2026</p>
                        <h3>Sistem Informasi Perkembangan Belajar Anak Pada TK Swasta Winfield Berbasis Web</h3>
                        <p class="experience-summary">Sistem Informasi ini dibangun agar mempermudah bagi  guru, kepala sekolah dan orang tua dalam membuat, mengelola, memvalidasi, serta melihat laporan perkembangan belajar anak.</p>
                        <div class="experience-gallery" aria-label="Dokumentasi proyek akhir">
                            <img class="experience-thumb" src="img/portfolio/Login tk.png" alt="Placeholder dokumentasi pengembangan kode">
                            <img class="experience-thumb" src="img/portfolio/TK.png" alt="Placeholder tangkapan layar aplikasi proyek akhir">
                            <img class="experience-thumb" src="img/portfolio/dashboard guru.png" alt="Placeholder dokumentasi pengujian proyek akhir">
                            <img class="experience-thumb" src="img/portfolio/form input laporan.png" alt="Placeholder dokumentasi pengujian proyek akhir">
                            <img class="experience-thumb" src="img/portfolio/detail laporan.png" alt="Placeholder dokumentasi pengujian proyek akhir">
                            <img class="experience-thumb" src="img/portfolio/dashboard kepsek.png" alt="Placeholder dokumentasi pengujian proyek akhir">
                            <img class="experience-thumb" src="img/portfolio/validasi laporan.png" alt="Placeholder dokumentasi pengujian proyek akhir">
                            <img class="experience-thumb" src="img/portfolio/profil siswa.png" alt="Placeholder dokumentasi pengujian proyek akhir">
                            <img class="experience-thumb" src="img/portfolio/laporan perkembangan.png" alt="Placeholder dokumentasi pengujian proyek akhir">
                        </div>
                        <button class="experience-detail-button" type="button">Lihat Detail</button>
                        <div class="experience-extra" hidden>
                            <p class="experience-modal-subtitle">Proyek Tugas Akhir</p>
                            <dl class="experience-facts">
                                <div><dt>Peran</dt><dd>Perancang dan pengembang</dd></div>
                                <div><dt>Teknologi</dt><dd>Laravel, PHP, Tailwind CSS, JavaScript, MySQL</dd></div>
                                <div><dt>Periode</dt><dd>Mei 2026 - Juli 2026</dd></div>
                            </dl>
                            <h4>Ringkasan Proyek</h4>
                            <ul><li>Membangun sistem informasi pemantuan perkembangan anak berbasis website untuk TK Swasta Winfield.</li><li>Mengembangkan antarmuka multi-peran yang responsif (Bootstrap 5, Tailwind CSS, Livewire 3) dengan komponen interaktif dan formulir dinamis.</li><li>Merancang database menggunakan MySQL untuk mengelola data siswa, guru, kelas, mata pelajaran, dan laporan perkembangan anak.</li><li>Membangun website dengan fitur pengelolaan laporan perkembangan anak oleh guru berdasarkan aspek perkembangan yang telah ditetapkan.</li><li>Mengimplementasikan alur pelaporan perkembangan anak dari pengisian berkala oleh guru, validasi/revisi beserta catatan oleh kepala sekolah, hingga penerbitan laporan ke orang tua.</li></ul>
                        </div>
                    </article>
                    <article class="experience-card" data-aos="fade-up" data-aos-delay="200">
                        <img class="experience-cover" src="img/portfolio/donut.png" alt="Ilustrasi placeholder proyek kampus untuk usaha kecil">
                        <p class="experience-period">Proyek Kuliah · 2025</p>
                        <h3>Aplikasi Pemesanan Donat berbasis Web</h3>
                        <p class="experience-summary">Aplikasi berbasis  website ini  dibangun agar mempermudah dalam pemesanan  donut  secara online dan juga membantu pemilik dalam mengelola pasanan dan transaksi.</p>
                        <div class="experience-gallery" aria-label="Dokumentasi proyek kampus">
                            <img class="experience-thumb" src="img/portfolio/donut.png" alt="Placeholder dokumentasi proyek usaha kecil">
                            <img class="experience-thumb" src="img/portfolio/menu donut.png" alt="Placeholder desain aplikasi mobile">
                            <img class="experience-thumb" src="img/portfolio/co donut.png" alt="Placeholder presentasi hasil proyek kampus">
                            <img class="experience-thumb" src="img/portfolio/co2 donut.png" alt="Placeholder presentasi hasil proyek kampus">
                            <img class="experience-thumb" src="img/portfolio/riwayat donut.png" alt="Placeholder presentasi hasil proyek kampus">
                            <img class="experience-thumb" src="img/portfolio/dashboard donut.png" alt="Placeholder presentasi hasil proyek kampus">

                        </div>
                        <button class="experience-detail-button" type="button">Lihat Detail</button>
                        <div class="experience-extra" hidden>
                            <p class="experience-modal-subtitle">Proyek Kampus · Tugas Kuliah</p>
                            <dl class="experience-facts">
                                <div><dt>Peran</dt><dd>Perancang dan Pengembang</dd></div>
                                <div><dt>Teknologi</dt><dd>PHP, Tailwind CSS, JavaScript dan MySQL</dd></div>
                                <div><dt>Periode</dt><dd>2024</dd></div>
                            </dl>
                            <h4>Ringkasan Proyek</h4>
                            <ul><li>Membangun platform web pemesanan Sayban Donut &amp; Bakery (PHP native, MySQL) untuk mengelola produk, kategori, pengguna, dan pesanan secara terintegrasi.</li><li>Mengembangkan antarmuka responsif untuk katalog produk, keranjang interaktif, dan alur pemesanan.</li><li>Mengimplementasikan alur checkout terautentikasi lengkap dengan integrasi Midtrans Snap untuk pembayaran online.</li><li>Menyediakan panel admin untuk manajemen data master dan pemantauan transaksi.</li><li>Menyajikan dasbor analitik grafik, fitur cetak laporan, serta riwayat pesanan pengguna.</li></ul>
                        </div>
                    </article>
                    <article class="experience-card" data-aos="fade-up" data-aos-delay="200">
                        <img class="experience-cover" src="img/portfolio/TIX.png" alt="Ilustrasi placeholder proyek kampus untuk usaha kecil">
                        <p class="experience-period">Proyek Kampus · 2025</p>
                        <h3>Aplikasi TIX ID Pemesanan Tiket Bioskop Bebasis Website</h3>
                        <p class="experience-summary">Sistem ini dibangun agar memudahkan pemesanan tiket bioskop secara online.</p>
                        <div class="experience-gallery" aria-label="Dokumentasi proyek kampus">
                            <img class="experience-thumb" src="img/portfolio/TIX.png" alt="Placeholder dokumentasi proyek usaha kecil">
                            <img class="experience-thumb" src="img/portfolio/cinemas.png" alt="Placeholder desain aplikasi mobile">
                            <img class="experience-thumb" src="img/portfolio/login tix.png" alt="Placeholder presentasi hasil proyek kampus">
                            <img class="experience-thumb" src="img/portfolio/cinemas.png" alt="Placeholder desain aplikasi mobile">
                            <img class="experience-thumb" src="img/portfolio/beranda user.png" alt="Placeholder desain aplikasi mobile">
                            <img class="experience-thumb" src="img/portfolio/pemilihan bioskop.png" alt="Placeholder desain aplikasi mobile">
                            <img class="experience-thumb" src="img/portfolio/pemilihan kursi.png" alt="Placeholder desain aplikasi mobile">
                            <img class="experience-thumb" src="img/portfolio/pembayaran.png" alt="Placeholder desain aplikasi mobile">
                            <img class="experience-thumb" src="img/portfolio/dashboard tix.png" alt="Placeholder desain aplikasi mobile">
                            <img class="experience-thumb" src="img/portfolio/data film.png" alt="Placeholder desain aplikasi mobile">
                        </div>
                        <button class="experience-detail-button" type="button">Lihat Detail</button>
                        <div class="experience-extra" hidden>
                            <p class="experience-modal-subtitle">Proyek Kampus · Kerja Kelompok</p>
                            <dl class="experience-facts">
                                <div><dt>Peran</dt><dd>Perancang dan Pengembang</dd></div>
                                <div><dt>Teknologi</dt><dd>Laravel, PHP, Tailwind CSS, JavaScript</dd></div>
                                <div><dt>Periode</dt><dd>2025</dd></div>
                            </dl>
                            <h4>Ringkasan Proyek</h4>
                            <ul><li>Membangun dan merancang platform web tix menggunakan Laravel, PHP, dan MySQL untuk mengelola film, bioskop, studio, jadwal, dan tiket terintegrasi.</li><li>Mengembangkan antarmuka responsif untuk penelusuran film, pemilihan kursi interaktif, dan pembayaran online.</li><li>Mengimplementasikan alur checkout (validasi kursi, kode booking, biaya layanan, serta integrasi Midtrans untuk status pembayaran).</li><li>Menyediakan panel admin untuk pengelolaan data master (film, bioskop, studio, jadwal, pengguna) dan pemantauan transaksi.</li><li>Menyajikan dasbor analitik (grafik pendapatan, film terlaris) serta manajemen riwayat tiket aktif pengguna.</li></ul>
                        </div>
                    </article>
                    <article class="experience-card" data-aos="fade-up" data-aos-delay="200">
                        <img class="experience-cover" src="img/portfolio/kasir home.png" alt="Ilustrasi placeholder proyek kampus untuk usaha kecil">
                        <p class="experience-period">Proyek Kampus · 2025</p>
                        <h3>Sistem Kasir UMKM</h3>
                        <p class="experience-summary">Sistem kasir berbasis web yang dirancang untuk mendigitalisasi pencatatan transaksi penjualan, manajemen produk, dan laporan keuangan UMKM secara efisien.</p>
                        <div class="experience-gallery" aria-label="Dokumentasi proyek kampus">
                            <img class="experience-thumb" src="img/portfolio/login kasir.png" alt="Placeholder dokumentasi proyek usaha kecil">
                            <img class="experience-thumb" src="img/portfolio/kasir home.png" alt="Placeholder desain aplikasi mobile">
                            <img class="experience-thumb" src="img/portfolio/barang kasir.png" alt="Placeholder presentasi hasil proyek kampus">
                            <img class="experience-thumb" src="img/portfolio/tambah barang.png" alt="Placeholder presentasi hasil proyek kampus">
                            <img class="experience-thumb" src="img/portfolio/riwayat kasir.png" alt="Placeholder presentasi hasil proyek kampus">
                            <img class="experience-thumb" src="img/portfolio/pengeluaran kasir.png" alt="Placeholder presentasi hasil proyek kampus">
                            <img class="experience-thumb" src="img/portfolio/laporan kasir.png" alt="Placeholder presentasi hasil proyek kampus">
                        </div>
                        <button class="experience-detail-button" type="button">Lihat Detail</button>
                        <div class="experience-extra" hidden>
                            <p class="experience-modal-subtitle">Proyek Kampus</p>
                            <dl class="experience-facts">
                                <div><dt>Peran</dt><dd>Perancang dan Pengembang</dd></div>
                                <div><dt>Teknologi</dt><dd>Laravel, PHP, Tailwind CSS, JavaScript dan MySQL</dd></div>
                                <div><dt>Periode</dt><dd>2025</dd></div>
                            </dl>
                            <h4>Ringkasan Proyek</h4>
                            <ul><li>Membangun aplikasi POS berbasis web menggunakan Laravel, PHP, dan MySQL untuk mengelola transaksi, produk, pengeluaran, dan laporan secara terintegrasi.</li><li>Mengembangkan antarmuka kasir responsif dengan Tailwind CSS dan JavaScript yang dilengkapi pencarian produk, keranjang, diskon, PPN, serta metode pembayaran.</li><li>Mengimplementasikan proses checkout transaksional untuk validasi dan penguncian stok dan pengurangan stok secara real-time.</li><li>Menyediakan manajemen inventaris lengkap serta modul pengeluaran operasional toko.</li><li>Menyajikan laporan keuangan dan riwayat transaksi dengan filter periode, kalkulasi laba bersih, serta visualisasi grafik.</li></ul>
                        </div>
                    </article>
                </div>
            </div>
            <dialog class="experience-dialog" aria-labelledby="experience-dialog-title">
                <div class="experience-dialog-header">
                    <div><p class="eyebrow">DETAIL PENGALAMAN</p><h3 id="experience-dialog-title"></h3></div>
                    <button class="experience-dialog-close" type="button" aria-label="Tutup detail">×</button>
                </div>
                <div class="experience-dialog-body"></div>
            </dialog>
        </section>

        <section class="certificate-section section" id="certificates">
            <div class="container">
                <div class="heading" data-aos="fade-up">
                    <h2>Sertifikat</h2>
                    <span class="heading-underline"></span>
                    <p>Sertifikat & Pelatihan</p>
                </div>
                <div class="certificate-track" aria-label="Daftar sertifikat">
                    <article class="certificate-card" data-aos="fade-up">
                        <button class="certificate-open" type="button" aria-label="Lihat sertifikat Belajar Dasar Pemrograman JavaScript">
                            <img class="certificate-preview" src="img/sertifikat/Sertifikat Magang.jpg" alt="Sertifikat Belajar Dasar Pemrograman JavaScript">
                        </button>
                        <div><h3>Sertifikat Magang</h3><p>Magang di Biro Administrasi Pembangunan Provinsi Sumatera Utara dengan Nilai 92/100</p><small>Biro Administrasi Pembangunan Provinsi Sumatera Utara · 2026</small></div>
                    </article>
                    <article class="certificate-card" data-aos="fade-up" data-aos-delay="75">
                        <button class="certificate-open" type="button" aria-label="Lihat sertifikat Pelatihan Digital Dasar Dengan Kecerdasan AI">
                            <img class="certificate-preview" src="img/sertifikat/sertifikat pelatihan komdigi.jpg" alt="Sertifikat Pelatihan Digital Dasar Dengan Kecerdasan AI">
                        </button>
                        <div><h3>Sertifikat Pelatihan</h3><p>Pelatihan Digital Dasar Dengan Kecerdasan Ai</p><small>Komdigi · 2026</small></div>
                    </article>
                    <article class="certificate-card" data-aos="fade-up" data-aos-delay="150">
                        <button class="certificate-open" type="button" aria-label="Lihat sertifikat Basic Microsoft Word">
                            <img class="certificate-preview" src="img/sertifikat/sertifikat microsoft word.jpg" alt="Sertifikat Basic Microsoft Word">
                        </button>
                        <div><h3>Basic Microsoft Word</h3><p>Belajar Dasar Microsoft Word</p><small>Remote Skill Academy · 2026</small></div>
                    </article>
                    <article class="certificate-card" data-aos="fade-up" data-aos-delay="225">
                        <button class="certificate-open" type="button" aria-label="Lihat sertifikat Basic Microsoft Excel">
                            <img class="certificate-preview" src="img/sertifikat/sertifikat microsoft excel.jpg" alt="Sertifikat Basic Microsoft Excel">
                        </button>
                        <div><h3>Basic Microsoft Excel</h3><p>Belajar Dasar Microsoft Excel</p><small>Remote Skill Academy · 2026</small></div>
                    </article>
                    <article class="certificate-card" data-aos="fade-up" data-aos-delay="300">
                        <button class="certificate-open" type="button" aria-label="Lihat sertifikat Data Entry">
                            <img class="certificate-preview" src="img/sertifikat/sertifikat data entry.jpg" alt="Sertifikat Data Entry">
                        </button>
                        <div><h3>Sertifikat Data Entry</h3><p>Belajar Dasar Data Entry</p><small>Remote Skill Academy · 2026</small></div>
                    </article>
                </div>
            </div>
            <dialog class="certificate-dialog" aria-labelledby="certificate-dialog-title">
                <div class="certificate-dialog-header">
                    <h3 id="certificate-dialog-title"></h3>
                    <button class="experience-dialog-close certificate-dialog-close" type="button" aria-label="Tutup sertifikat">×</button>
                </div>
                <img class="certificate-dialog-image" alt="">
            </dialog>
        </section>

        <section class="contact-section section" id="contact">
            <div class="container contact-layout">
                <div class="heading" data-aos="fade-up">
                    <h2>Hubungi Saya</h2>
                    <span class="heading-underline"></span>
                    <p>Hubungi saya melalui platform berikut</p>
                </div>
                <div class="contact-details">
                    <a class="contact-card contact-card-email" href="mailto:chrisandisianipar5@gmail.com" data-aos="fade-up">
                        <span class="contact-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24"><path d="M3 5h18a2 2 0 0 1 2 2v1l-11 7L1 8V7a2 2 0 0 1 2-2Zm-2 5.4 10.4 6.6a1.1 1.1 0 0 0 1.2 0L23 10.4V19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8.6Z"/></svg>
                        </span>
                        <span class="contact-card-copy"><span class="contact-label">Email</span><strong>chrisandisianipar5@gmail.com</strong></span>
                        <span class="contact-arrow" aria-hidden="true">→</span>
                    </a>
                    <a class="contact-card contact-card-whatsapp" href="https://wa.me/62822289820060" target="_blank" rel="noreferrer" data-aos="fade-up" data-aos-delay="75">
                        <span class="contact-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24"><path d="M12 2a9.8 9.8 0 0 0-8.4 14.8L2 22l5.4-1.4A10 10 0 1 0 12 2Zm0 17.8a8 8 0 0 1-4.1-1.1l-.3-.2-3.2.8.9-3.1-.2-.3A8 8 0 1 1 12 19.8Zm4.4-6c-.2-.1-1.5-.8-1.7-.8s-.4-.1-.6.2-.7.8-.9 1-.3.2-.6.1a6.6 6.6 0 0 1-2-1.2 7.5 7.5 0 0 1-1.4-1.8c-.2-.3 0-.4.1-.6l.4-.5.2-.4v-.4c0-.1-.6-1.5-.8-2-.2-.5-.4-.4-.6-.4h-.5c-.2 0-.5.1-.7.3s-.9.9-.9 2.2 1 2.5 1.1 2.7c.1.2 1.9 2.9 4.5 4 2.2.9 2.7.7 3.2.6.5-.1 1.5-.6 1.7-1.2.2-.6.2-1.1.1-1.2 0-.1-.2-.2-.5-.4Z"/></svg>
                        </span>
                        <span class="contact-card-copy"><span class="contact-label">WhatsApp</span><strong>+62 822-2898-20060</strong></span>
                        <span class="contact-arrow" aria-hidden="true">→</span>
                    </a>
                    <a class="contact-card contact-card-linkedin" href="https://www.linkedin.com/in/chrisandi-sianipar-9076b3327" target="_blank" rel="noreferrer" data-aos="fade-up" data-aos-delay="150">
                        <span class="contact-icon" aria-hidden="true"><strong>in</strong></span>
                        <span class="contact-card-copy"><span class="contact-label">LinkedIn</span><strong>linkedin.com/in/chrisandi-sianipar-9076b3327</strong></span>
                        <span class="contact-arrow" aria-hidden="true">→</span>
                    </a>
                    <a class="contact-card contact-card-instagram" href="https://www.instagram.com/chrisandi1_/" target="_blank" rel="noreferrer" data-aos="fade-up" data-aos-delay="225">
                        <span class="contact-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle class="instagram-dot" cx="17.5" cy="6.8" r="1"/></svg>
                        </span>
                        <span class="contact-card-copy"><span class="contact-label">Instagram</span><strong>instagram.com/chrisandi1_</strong></span>
                        <span class="contact-arrow" aria-hidden="true">→</span>
                    </a>
                    <a class="contact-card contact-card-github" href="https://github.com/Chrisandi30" target="_blank" rel="noreferrer" data-aos="fade-up" data-aos-delay="300">
                        <span class="contact-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24"><path d="M12 .8a11.2 11.2 0 0 0-3.5 21.8c.6.1.8-.3.8-.6v-2.1c-3.1.7-3.8-1.3-3.8-1.3-.5-1.3-1.2-1.6-1.2-1.6-1-.7.1-.7.1-.7 1.1.1 1.7 1.1 1.7 1.1 1 .1.7 2.5 3.5 1.8.1-.7.4-1.2.7-1.5-2.5-.3-5.1-1.3-5.1-5.5 0-1.2.4-2.1 1.1-2.9-.1-.3-.5-1.4.1-2.9 0 0 .9-.3 3 1.1a10.5 10.5 0 0 1 5.5 0c2.1-1.4 3-1.1 3-1.1.6 1.5.2 2.6.1 2.9.7.8 1.1 1.7 1.1 2.9 0 4.2-2.6 5.2-5.1 5.5.4.3.8 1 .8 2v3c0 .3.2.7.8.6A11.2 11.2 0 0 0 12 .8Z"/></svg>
                        </span>
                        <span class="contact-card-copy"><span class="contact-label">GitHub</span><strong>github.com/Chrisandi30</strong></span>
                        <span class="contact-arrow" aria-hidden="true">→</span>
                    </a>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container footer-inner">
            <p>© <span id="current-year">2025</span> Chrisandi. All rights reserved.</p>
            <div class="footer-links">
                <a href="#home">Home</a><a href="#about">About</a><a href="#portfolio">Portfolio</a><a href="#education">Education</a><a href="#experience">Experience</a><a href="#certificates">Certificate</a><a href="#contact">Contact</a>
            </div>
            <a class="back-top" href="#home" aria-label="Kembali ke atas">↑</a>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="script.js?v=<?= filemtime(__DIR__ . '/script.js') ?>"></script>
</body>
</html>
