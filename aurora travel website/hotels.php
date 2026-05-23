<?php session_start(); ?>
<!doctype html>
<html lang="tr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aurora Travel | Turlarda Konaklanan Oteller</title>
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
            <h2>Turlarda Konaklanan Oteller</h2>
            <p class="muted">
                Aşağıdaki oteller, turlarımız kapsamında konaklama yapılan anlaşmalı tesislerdir.
                Oteller ayrı olarak satılmamaktadır.
            </p>

            <div class="tour-stays" style="margin-top:18px;">

                <section class="card tour-stay">
                    <div class="tour-stay-head">
                        <div>
                            <span class="badge">3 Gece</span>
                            <h3 style="margin-top:8px;">Kapadokya Turu</h3>
                            <p class="muted">Balon, vadiler, peri bacaları. Konaklama: 2 gece.</p>
                        </div>
                        <div class="tour-stay-actions">
                            <a class="btn ghost" href="tour-detail.php?id=kapadokya">Tur Detay</a>
                            <a class="btn" href="booking.php">Rezervasyon</a>
                        </div>
                    </div>

                    <div class="stay-grid">
                        <article class="stay-mini card">
                            <div class="stay-mini-img" style="background-image:url('assets/img/hotel_cappadocia.jpg')">
                            </div>
                            <div class="stay-mini-body">
                                <div class="stay-mini-top">
                                    <strong>Cave Boutique Cappadocia</strong>
                                    <span class="stars">★★★★★</span>
                                </div>
                                <div class="muted">Nevşehir • Butik / mağara oda</div>
                                <div class="mini-tags">
                                    <span class="tag">Kahvaltı</span>
                                    <span class="tag">Manzara</span>
                                    <span class="tag">Wi-Fi</span>
                                </div>
                            </div>
                        </article>

                        <article class="stay-mini card">
                            <div class="stay-mini-img"
                                style="background-image:url('assets/img/hotel_cappadocia_2.jpg')"></div>
                            <div class="stay-mini-body">
                                <div class="stay-mini-top">
                                    <strong>Göreme Stone Hotel</strong>
                                    <span class="stars">★★★★☆</span>
                                </div>
                                <div class="muted">Göreme • Merkezi konum</div>
                                <div class="mini-tags">
                                    <span class="tag">Merkez</span>
                                    <span class="tag">Kahvaltı</span>
                                    <span class="tag">Sessiz</span>
                                </div>
                            </div>
                        </article>
                    </div>
                </section>

                <section class="card tour-stay">
                    <div class="tour-stay-head">
                        <div>
                            <span class="badge">2 Gece</span>
                            <h3 style="margin-top:8px;">Kaş – Kalkan Turu</h3>
                            <p class="muted">Koylar, deniz, tekne turu. Konaklama: 2 gece.</p>
                        </div>
                        <div class="tour-stay-actions">
                            <a class="btn ghost" href="tour-detail.php?id=kas">Tur Detay</a>
                            <a class="btn" href="booking.php">Rezervasyon</a>
                        </div>
                    </div>

                    <div class="stay-grid">
                        <article class="stay-mini card">
                            <div class="stay-mini-img" style="background-image:url('assets/img/hotel_kas.jpg')"></div>
                            <div class="stay-mini-body">
                                <div class="stay-mini-top">
                                    <strong>Kaş Sea Breeze Hotel</strong>
                                    <span class="stars">★★★★☆</span>
                                </div>
                                <div class="muted">Antalya / Kaş • Sahile yakın</div>
                                <div class="mini-tags">
                                    <span class="tag">Plaj</span>
                                    <span class="tag">Wi-Fi</span>
                                    <span class="tag">Butik</span>
                                </div>
                            </div>
                        </article>
                    </div>
                </section>

                <section class="card tour-stay">
                    <div class="tour-stay-head">
                        <div>
                            <span class="badge">4 Gece</span>
                            <h3 style="margin-top:8px;">Karadeniz Yaylalar Turu</h3>
                            <p class="muted">Ayder, Uzungöl, yayla rotaları. Konaklama: 3 gece.</p>
                        </div>
                        <div class="tour-stay-actions">
                            <a class="btn ghost" href="tour-detail.php?id=karadeniz">Tur Detay</a>
                            <a class="btn" href="booking.php">Rezervasyon</a>
                        </div>
                    </div>

                    <div class="stay-grid">
                        <article class="stay-mini card">
                            <div class="stay-mini-img" style="background-image:url('assets/img/hotel_karadeniz.jpg')">
                            </div>
                            <div class="stay-mini-body">
                                <div class="stay-mini-top">
                                    <strong>Ayder Yayla Resort</strong>
                                    <span class="stars">★★★★☆</span>
                                </div>
                                <div class="muted">Rize • Doğa ile iç içe</div>
                                <div class="mini-tags">
                                    <span class="tag">Doğa</span>
                                    <span class="tag">Kahvaltı</span>
                                    <span class="tag">Manzara</span>
                                </div>
                            </div>
                        </article>

                        <article class="stay-mini card">
                            <div class="stay-mini-img" style="background-image:url('assets/img/hotel_uzungol.jpg')">
                            </div>
                            <div class="stay-mini-body">
                                <div class="stay-mini-top">
                                    <strong>Uzungöl Lake Hotel</strong>
                                    <span class="stars">★★★★☆</span>
                                </div>
                                <div class="muted">Trabzon • Göl manzarası</div>
                                <div class="mini-tags">
                                    <span class="tag">Manzara</span>
                                    <span class="tag">Sessiz</span>
                                    <span class="tag">Wi-Fi</span>
                                </div>
                            </div>
                        </article>
                    </div>
                </section>

                <section class="card tour-stay">
                    <div class="tour-stay-head">
                        <div>
                            <span class="badge">4 Gece</span>
                            <h3 style="margin-top:8px;">Roma – Floransa Turu</h3>
                            <p class="muted">Şehir turu, müzeler, yürüyüş rotaları. Konaklama: 4 gece.</p>
                        </div>
                        <div class="tour-stay-actions">
                            <a class="btn ghost" href="tour-detail.php?id=roma">Tur Detay</a>
                            <a class="btn" href="booking.php">Rezervasyon</a>
                        </div>
                    </div>

                    <div class="stay-grid">
                        <article class="stay-mini card">
                            <div class="stay-mini-img" style="background-image:url('assets/img/hotel_roma.jpg')"></div>
                            <div class="stay-mini-body">
                                <div class="stay-mini-top">
                                    <strong>Roma Central Stay</strong>
                                    <span class="stars">★★★★☆</span>
                                </div>
                                <div class="muted">Roma • Merkezi konum</div>
                                <div class="mini-tags">
                                    <span class="tag">Merkez</span>
                                    <span class="tag">Wi-Fi</span>
                                    <span class="tag">Kahvaltı</span>
                                </div>
                            </div>
                        </article>
                    </div>
                </section>

                <section class="card tour-stay">
                    <div class="tour-stay-head">
                        <div>
                            <span class="badge">5 Gece</span>
                            <h3 style="margin-top:8px;">Paris – Brugge Turu</h3>
                            <p class="muted">Eyfel, sanat müzeleri ve kanallar arası romantik yürüyüşler. Konaklama: 5 gece.</p>
                        </div>
                        <div class="tour-stay-actions">
                            <a class="btn ghost" href="tour-detail.php?id=paris">Tur Detay</a>
                            <a class="btn" href="booking.php">Rezervasyon</a>
                        </div>
                    </div>

                    <div class="stay-grid">
                        <article class="stay-mini card">
                            <div class="stay-mini-img" style="background-image:url('assets/img/hotel_paris.jpg')"></div>
                            <div class="stay-mini-body">
                                <div class="stay-mini-top">
                                    <strong>Le Marais Boutique Hotel</strong>
                                    <span class="stars">★★★★★</span>
                                </div>
                                <div class="muted">Paris • Eyfel'e yakın konum</div>
                                <div class="mini-tags">
                                    <span class="tag">Romantik</span>
                                    <span class="tag">Şehir</span>
                                    <span class="tag">Wi-Fi</span>
                                </div>
                            </div>
                        </article>

                        <article class="stay-mini card">
                            <div class="stay-mini-img" style="background-image:url('assets/img/hotel_brugge.jpg')"></div>
                            <div class="stay-mini-body">
                                <div class="stay-mini-top">
                                    <strong>Brugge Canal View</strong>
                                    <span class="stars">★★★★☆</span>
                                </div>
                                <div class="muted">Brugge • Su kenarı manzarası</div>
                                <div class="mini-tags">
                                    <span class="tag">Manzara</span>
                                    <span class="tag">Tarihi</span>
                                    <span class="tag">Kahvaltı</span>
                                </div>
                            </div>
                        </article>
                    </div>
                </section>

                <section class="card tour-stay">
                    <div class="tour-stay-head">
                        <div>
                            <span class="badge">4 Gece</span>
                            <h3 style="margin-top:8px;">Yunan Adaları Turu</h3>
                            <p class="muted">Mavi-beyaz sokaklar, Ege lezzetleri ve muhteşem gün batımı. Konaklama: 4 gece.</p>
                        </div>
                        <div class="tour-stay-actions">
                            <a class="btn ghost" href="tour-detail.php?id=yunan">Tur Detay</a>
                            <a class="btn" href="booking.php">Rezervasyon</a>
                        </div>
                    </div>

                    <div class="stay-grid">
                        <article class="stay-mini card">
                            <div class="stay-mini-img" style="background-image:url('assets/img/hotel_santorini.jpg')"></div>
                            <div class="stay-mini-body">
                                <div class="stay-mini-top">
                                    <strong>Santorini Caldera Resort</strong>
                                    <span class="stars">★★★★★</span>
                                </div>
                                <div class="muted">Santorini • Eşsiz deniz manzarası</div>
                                <div class="mini-tags">
                                    <span class="tag">Lüks</span>
                                    <span class="tag">Havuz</span>
                                    <span class="tag">Manzara</span>
                                </div>
                            </div>
                        </article>
                    </div>
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
