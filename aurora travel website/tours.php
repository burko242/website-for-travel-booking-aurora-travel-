<?php session_start(); ?>
<!doctype html>
<html lang="tr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aurora Travel | Turlar</title>
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

            <section id="yurtici" style="margin-top:18px;">
                <div class="section-head">
                    <div>
                        <h3>Yurtiçi Turlar</h3>
                        <p class="muted">Doğa, deniz ve kültür rotaları.</p>
                    </div>
                </div>

                <div class="grid cols-3">
                    <article class="tour-card card">
                        <div class="tour-img" style="background-image:url('assets/img/tour_kapadokya.jpg')"></div>
                        <div class="tour-body">
                            <div class="tour-top">
                                <span class="badge">3 Gece</span>
                                <span class="price">₺7.900</span>
                            </div>
                            <h3>Kapadokya Turu</h3>
                            <p class="muted">Balon turu, vadi yürüyüşleri, gün batımı.</p>

                            <div class="tour-actions">
                                <a class="btn" href="tour-detail.php?id=kapadokya">Detaya Git</a>
                                <a class="btn ghost" href="booking.php">Rezervasyon</a>
                            </div>
                        </div>
                    </article>

                    <article class="tour-card card">
                        <div class="tour-img" style="background-image:url('assets/img/tour_karadeniz.jpg')"></div>
                        <div class="tour-body">
                            <div class="tour-top">
                                <span class="badge">4 Gece</span>
                                <span class="price">₺9.500</span>
                            </div>
                            <h3>Karadeniz Yaylalar Turu</h3>
                            <p class="muted">Ayder, Uzungöl, yayla havası ve bol fotoğraf.</p>

                            <div class="tour-actions">
                                <a class="btn" href="tour-detail.php?id=karadeniz">Detaya Git</a>
                                <a class="btn ghost" href="booking.php">Rezervasyon</a>
                            </div>
                        </div>
                    </article>

                    <article class="tour-card card">
                        <div class="tour-img" style="background-image:url('assets/img/tour_kas.jpg')"></div>
                        <div class="tour-body">
                            <div class="tour-top">
                                <span class="badge">2 Gece</span>
                                <span class="price">₺6.400</span>
                            </div>
                            <h3>Kaş – Kalkan Turu</h3>
                            <p class="muted">Koylar, tekne turu, sakin bir kaçamak.</p>

                            <div class="tour-actions">
                                <a class="btn" href="tour-detail.php?id=kas">Detaya Git</a>
                                <a class="btn ghost" href="booking.php">Rezervasyon</a>
                            </div>
                        </div>
                    </article>
                </div>
            </section>

            <section id="yurtdisi" style="margin-top:26px;">
                <div class="section-head">
                    <div>
                        <h3>Yurtdışı Turlar</h3>
                        <p class="muted">Şehir rotaları ve ada kombinleri.</p>
                    </div>
                </div>

                <div class="grid cols-3">
                    <article class="tour-card card">
                        <div class="tour-img" style="background-image:url('assets/img/tour_roma.jpg')"></div>
                        <div class="tour-body">
                            <div class="tour-top">
                                <span class="badge">4 Gece</span>
                                <span class="price">€499</span>
                            </div>
                            <h3>Roma – Floransa</h3>
                            <p class="muted">Tarih, sanat, İtalyan mutfağı.</p>

                            <div class="tour-actions">
                                <a class="btn" href="tour-detail.php?id=roma">Detaya Git</a>
                                <a class="btn ghost" href="booking.php">Rezervasyon</a>
                            </div>
                        </div>
                    </article>

                    <article class="tour-card card">
                        <div class="tour-img" style="background-image:url('assets/img/tour_paris.jpg')"></div>
                        <div class="tour-body">
                            <div class="tour-top">
                                <span class="badge">5 Gece</span>
                                <span class="price">€699</span>
                            </div>
                            <h3>Paris – Brugge</h3>
                            <p class="muted">Romantik şehirler, müzeler, nehir turu.</p>

                            <div class="tour-actions">
                                <a class="btn" href="tour-detail.php?id=paris">Detaya Git</a>
                                <a class="btn ghost" href="booking.php">Rezervasyon</a>
                            </div>
                        </div>
                    </article>

                    <article class="tour-card card">
                        <div class="tour-img" style="background-image:url('assets/img/tour_yunan.jpg')"></div>
                        <div class="tour-body">
                            <div class="tour-top">
                                <span class="badge">5 Gece</span>
                                <span class="price">€589</span>
                            </div>
                            <h3>Yunan Adaları</h3>
                            <p class="muted">Mikonos + Santorini kombini.</p>

                            <div class="tour-actions">
                                <a class="btn" href="tour-detail.php?id=yunan">Detaya Git</a>
                                <a class="btn ghost" href="booking.php">Rezervasyon</a>
                            </div>
                        </div>
                    </article>
                </div>
            </section>

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