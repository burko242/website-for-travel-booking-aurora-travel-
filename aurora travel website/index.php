<?php session_start(); ?>
<!doctype html>
<html lang="tr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aurora Travel | Ana Sayfa</title>
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

        <?php if(isset($_GET['durum']) && $_GET['durum'] == 'cikis'): ?>
            <div class="container" style="margin-top: 20px;">
                <div class="card" style="background: #e0f2fe; color: #0369a1; border: 1px solid #bae6fd; text-align: center; padding: 10px; border-radius: 12px;">
                     👋 Başarıyla çıkış yaptınız. Tekrar görüşmek üzere!
                </div>
            </div>
        <?php endif; ?>

        <section class="hero">
            <div class="container hero-grid">
                <div class="hero-card">
                    <span class="badge">2026 Erken Rezervasyon</span>
                    <h1 style="margin-top:10px;">Hayalindeki rota için tek tıkla turunu seç.</h1>
                    <p class="muted">
                        Yurtiçi & yurtdışı turlar, seçilmiş oteller ve hızlı rezervasyon.
                    </p>

                    <div class="hero-actions">
                        <a class="btn" href="tours.php">Turları İncele</a>
                        <a class="btn" href="booking.php">Hemen Rezervasyon</a>
                    </div>

                    <div class="hero-mini">
                        <div class="mini-box">
                            <div class="muted">Popüler</div>
                            <strong>Kapadokya</strong>
                        </div>
                        <div class="mini-box">
                            <div class="muted">Yeni</div>
                            <strong>Kaş</strong>
                        </div>
                        <div class="mini-box">
                            <div class="muted">Yurtdışı</div>
                            <strong>Roma</strong>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="section-head">
                    <div>
                        <h2>Öne Çıkan Destinasyonlar</h2>
                        <p class="muted">En popüler rotalardan hızlı seçim yap.</p>
                    </div>
                    <a class="chip" href="tours.php">Tüm Turları Gör</a>
                </div>

                <div class="grid cols-3" style="margin-top:12px;">
                    <article class="card feature-card">
                        <div class="feature-top">
                            <span class="badge">3 Gece</span>
                            <span class="muted">Yurtiçi</span>
                        </div>
                        <h3>İstanbul Kültür Turu</h3>
                        <p class="muted">Tarihi yarımada, Boğaz, müzeler.</p>
                        <div class="feature-actions">
                            <a class="btn" href="tour-detail.php?id=istanbul">Detaya Git</a>
                            <a class="btn" href="booking.php">Rezervasyon</a>
                        </div>
                    </article>

                    <article class="card feature-card">
                        <div class="feature-top">
                            <span class="badge">5 Gece</span>
                            <span class="muted">Yurtdışı</span>
                        </div>
                        <h3>Yunan Adaları</h3>
                        <p class="muted">Mikonos + Santorini kombin tur.</p>
                        <div class="feature-actions">
                            <a class="btn" href="tour-detail.php?id=yunan">Detaya Git</a>
                            <a class="btn" href="booking.php">Rezervasyon</a>
                        </div>
                    </article>

                    <article class="card feature-card">
                        <div class="feature-top">
                            <span class="badge">4 Gece</span>
                            <span class="muted">Doğa</span>
                        </div>
                        <h3>Karadeniz Yaylalar</h3>
                        <p class="muted">Yayla havası, doğa, bol fotoğraf.</p>
                        <div class="feature-actions">
                            <a class="btn" href="tour-detail.php?id=karadeniz">Detaya Git</a>
                            <a class="btn" href="booking.php">Rezervasyon</a>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="section home-sections">
            <div class="container home-sections-inner">

                <div class="hs-block">
                    <h2>Neden Biz?</h2>
                    <p class="muted">
                        Seçilmiş oteller, şeffaf program ve hızlı destek ile seyahatinizi konforlu hale getiriyoruz.
                    </p>
                    <a class="btn" href="about.php">Biz Kimiz?</a>
                </div>

                <div class="hs-divider"></div>

                <div class="hs-block">
                    <h2>Sizlere Nasıl Yardımcı Olabiliriz?</h2>
                    <p class="muted">
                        Rezervasyon, iptal-iade, vize ve tur detayları gibi en çok sorulan soruların yanıtlarına hızlıca
                        ulaşın.
                    </p>
                    <a class="btn" href="faq.php">SSS’yi Görüntüle</a>
                </div>

                <div class="hs-divider"></div>

                <div class="hs-block">
                    <h2>Bizimle İletişime Geçin</h2>
                    <p class="muted">
                        Mail veya WhatsApp üzerinden bize ulaşın, en kısa sürede dönüş yapalım.
                    </p>
                    <a class="btn" href="contact.php">İletişime Geç</a>
                </div>

            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">© 2026 Aurora Travel • Turizm sitesi</div>
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