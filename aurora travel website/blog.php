<?php session_start(); ?>
<!doctype html>
<html lang="tr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aurora Travel | Blog / Gezi Rehberi</title>
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

    <main class="section">
        <div class="container">

            <div class="blog-hero">
                <div>
                    <h2>Blog / Gezi Rehberi</h2>
                    <p class="muted">
                        Rota önerileri, küçük ipuçları ve tur planlamanı kolaylaştıracak kısa rehberler.
                    </p>
                </div>
            </div>

            <div class="blog-layout single" style="margin-top:14px;">
                <section class="blog-posts">

                    <article class="post-card card">
                        <div class="post-img" style="background-image:url('assets/img/tour_kapadokya.jpg')"></div>
                        <div class="post-body">
                            <div class="post-meta">
                                <span class="badge">Destinasyon</span>
                                <span class="muted">• 12 Aralık 2025 • 4 dk okuma</span>
                            </div>
                            <h3>Kapadokya’da 1 Günde Ne Yapılır?</h3>
                            <p class="muted">
                                Balon izleme noktaları, vadiler ve kısa rota önerileri. Zamanı verimli kullanmak için
                                küçük tüyolar.
                            </p>
                            <div class="post-actions">
                                <a class="btn" href="blog-detail.php?id=kapadokya">Devamını Oku</a>
                                <a class="btn ghost" href="tours.php">Kapadokya Turu</a>
                            </div>
                        </div>
                    </article>

                    <article class="post-card card">
                        <div class="post-img" style="background-image:url('assets/img/slide2.jpg')"></div>
                        <div class="post-body">
                            <div class="post-meta">
                                <span class="badge">İpucu</span>
                                <span class="muted">• 5 Aralık 2025 • 3 dk okuma</span>
                            </div>
                            <h3>Ucuza Bilet Bulmanın 6 Pratik Yolu</h3>
                            <p class="muted">
                                Tarih esnekliği, arama zamanları, rota seçimi ve fiyat takip yöntemleriyle bütçeni koru.
                            </p>
                            <div class="post-actions">
                                <a class="btn" href="blog-detail.php?id=bilet">Devamını Oku</a>
                                <a class="btn ghost" href="contact.php">Soru Sor</a>
                            </div>
                        </div>
                    </article>

                    <article class="post-card card">
                        <div class="post-img" style="background-image:url('assets/img/tour_roma.jpg')"></div>
                        <div class="post-body">
                            <div class="post-meta">
                                <span class="badge">Yurtdışı</span>
                                <span class="muted">• 27 Kasım 2025 • 5 dk okuma</span>
                            </div>
                            <h3>Roma’da İlk Kez Gidecekler İçin Mini Rehber</h3>
                            <p class="muted">
                                Kolezyum, Vatikan, yürüyüş rotaları ve “nerede ne yenir” kısa listesi. İlk kez gidenlere
                                hızlı yönlendirme.
                            </p>
                            <div class="post-actions">
                                <a class="btn" href="blog-detail.php?id=roma">Devamını Oku</a>
                                <a class="btn ghost" href="tours.php">Roma Turu</a>
                            </div>
                        </div>
                    </article>

                    <article class="post-card card">
                        <div class="post-img" style="background-image:url('assets/img/tour_kas.jpg')"></div>
                        <div class="post-body">
                            <div class="post-meta">
                                <span class="badge">Deniz</span>
                                <span class="muted">• 10 Kasım 2025 • 4 dk okuma</span>
                            </div>
                            <h3>Kaş’ta En Güzel Koylar</h3>
                            <p class="muted">
                                Tekne turu rotaları, yüzme molaları ve fotoğraf için en iyi saatler. “Sakin koy”
                                önerileri de var.
                            </p>
                            <div class="post-actions">
                                <a class="btn" href="blog-detail.php?id=kas">Devamını Oku</a>
                                <a class="btn ghost" href="tours.php">Kaş Turu</a>
                            </div>
                        </div>
                    </article>

                </section>

            </div>
        </div>
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
