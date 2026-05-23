<?php session_start(); ?>
<!doctype html>
<html lang="tr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aurora Travel | Hakkımızda</title>
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>

    <header class="topbar">
        <div class="container nav">
            <a href="index.php">
                <div class="brand">Aurora Travel</div>
            </a>
            <nav class="menu" id="menu">
                <a class="active" href="index.php">Ana Sayfa</a>
                <a href="about.php">Hakkımızda</a>
                <a href="tours.php">Turlar</a>
                <a href="hotels.php">Otel & Konaklama</a>
                <a href="booking.php">Rezervasyon</a>
                <a href="gallery.php">Galeri</a>
                <a href="blog.php">Blog</a>
                <a href="contact.php">İletişim</a>
                <a href="faq.php">SSS</a>

                <?php if(isset($_SESSION['user_id'])): ?>
                    <?php if($_SESSION['rol'] == 'admin'): ?>
                        <a href="admin.php">Admin Paneli</a>
                    <?php endif; ?>
                    <a href="logout.php">Çıkış Yap</a>
                <?php else: ?>
                    <a href="login.php">Giriş Yap / Üye Ol</a>
                <?php endif; ?>
            </nav>
            <button class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </button>

        </div>
    </header>

    <main>
        <section class="section">
            <div class="container">
                <div class="card about-stack">
                    <span class="badge">Hakkımızda</span>
                    <h1 style="margin-top:10px;">Yeni yerler keşfetmeyi kolaylaştırıyoruz.</h1>
                    <p class="muted" style="margin-top:10px;">
                        Aurora Travel olarak yurtiçi ve yurtdışı turlarımızda; güvenli ulaşım,
                        seçilmiş otel konaklamaları ve profesyonel rehberlikle konforlu bir deneyim sunarız.
                        Amacımız “planlama stresini” azaltıp sadece keyif almanı sağlamak.
                    </p>

                    <div style="margin-top:14px; display:flex; gap:10px; flex-wrap:wrap;">
                        <a class="btn" href="tours.php">Turları İncele</a>
                        <a class="btn ghost" href="contact.php">İletişime Geç</a>
                    </div>
                </div>

                <div class="card about-stack" style="margin-top:14px;">
                    <h2>Rakamlarla Aurora</h2>

                    <div class="stats-grid" style="margin-top:12px;">
                        <div class="stat">
                            <div class="stat-num">120+</div>
                            <div class="muted">Tur Rotası</div>
                        </div>
                        <div class="stat">
                            <div class="stat-num">15K+</div>
                            <div class="muted">Mutlu Misafir</div>
                        </div>
                        <div class="stat">
                            <div class="stat-num">200+</div>
                            <div class="muted">Anlaşmalı Otel</div>
                        </div>
                        <div class="stat">
                            <div class="stat-num">4.7/5</div>
                            <div class="muted">Ortalama Puan</div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="card about-stack">
                    <h2>Misyonumuz</h2>
                    <p class="muted">
                        Her bütçeye uygun, şeffaf ve güvenilir tur paketleriyle insanların yeni kültürler tanımasını
                        sağlamak;
                        planlama sürecini basitleştirerek seyahati erişilebilir hale getirmek.
                    </p>
                </div>

                <div class="card about-stack" style="margin-top:14px;">
                    <h2>Vizyonumuz</h2>
                    <p class="muted">
                        Türkiye’nin en kullanıcı dostu turizm platformlarından biri olmak; kaliteli konaklama,
                        güçlü rehberlik ve sorunsuz rezervasyon deneyimiyle “ilk akla gelen” marka haline gelmek.
                    </p>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <h2>Değerlerimiz</h2>
                <p class="muted">Her turda aynı standartları korumak için bu prensiplerle hareket ederiz.</p>

                <div class="grid cols-3" style="margin-top:12px;">
                    <div class="card">
                        <h3>Şeffaflık</h3>
                        <p class="muted">Fiyat, program ve dahil olanlar net. Sürpriz yok.</p>
                    </div>
                    <div class="card">
                        <h3>Güvenlik</h3>
                        <p class="muted">Ulaşım ve konaklamada güvenli standartlar.</p>
                    </div>
                    <div class="card">
                        <h3>Memnuniyet</h3>
                        <p class="muted">Misafir geri bildirimleriyle sürekli iyileştirme.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="card about-stack">
                    <h2>Neden Biz?</h2>
                    <ul class="muted" style="line-height:1.9; margin:10px 0 0 18px;">
                        <li>Seçilmiş oteller ve tur boyunca rehber desteği</li>
                        <li>Kolay rezervasyon ve hızlı dönüş (iletişim kanalları)</li>
                        <li>Popüler rotalar + alternatif “az bilinen” keşif noktaları</li>
                    </ul>

                    <div style="margin-top:14px;">
                        <a class="btn" href="gallery.php">Galeriyi Gör</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="card about-cta">
                    <div>
                        <h2>Bir sonraki rotanı seçmeye hazır mısın?</h2>
                        <p class="muted">Yurtiçi / yurtdışı turları inceleyip hızlı rezervasyon yapabilirsin.</p>
                    </div>
                    <div style="display:flex; gap:10px; flex-wrap:wrap;">
                        <a class="btn" href="tours.php">Turlara Git</a>
                        <a class="btn ghost" href="booking.php">Rezervasyon</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">© 2025 Aurora Travel</div>
    </footer>

    <script>
        const hamburger = document.getElementById("hamburger");
        const menu = document.getElementById("menu");

        hamburger.addEventListener("click", () => {
            menu.classList.toggle("active");
        });
    </script>

</body>
</html>