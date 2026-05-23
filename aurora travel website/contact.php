<?php session_start(); ?>
<!doctype html>
<html lang="tr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aurora Travel | İletişim</title>
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
            <h2>İletişim</h2>
            <p class="muted">Soruların için bize ulaş. En kısa sürede dönüş yaparız.</p>

            <div class="contact-grid" style="margin-top:14px;">
                <section class="card">
                    <h3>İletişim Bilgileri</h3>

                    <div class="contact-info">
                        <div class="info-row">
                            <div class="info-icon">📍</div>
                            <div>
                                <strong>Adres</strong>
                                <div class="muted">Kızılay, Çankaya / Ankara </div>
                            </div>
                        </div>

                        <div class="info-row">
                            <div class="info-icon">📞</div>
                            <div>
                                <strong>Telefon</strong>
                                <div class="muted">+90 (312) 000 00 00</div>
                            </div>
                        </div>

                        <div class="info-row">
                            <div class="info-icon">✉️</div>
                            <div>
                                <strong>E-posta</strong>
                                <div class="muted">info@auroratravel.com</div>
                            </div>
                        </div>

                        <div class="info-row">
                            <div class="info-icon">🕒</div>
                            <div>
                                <strong>Çalışma Saatleri</strong>
                                <div class="muted">Hafta içi: 09:00 - 18:00</div>
                                <div class="muted">Cumartesi: 10:00 - 14:00</div>
                            </div>
                        </div>
                    </div>

                    <div class="card" style="margin-top:12px; box-shadow:none;">
                        <h3>Hızlı Bağlantılar</h3>
                        <div style="display:flex; gap:10px; flex-wrap:wrap; margin-top:10px;">
                            <a class="chip" href="tours.php">Turlar</a>
                            <a class="chip" href="booking.php">Rezervasyon</a>
                            <a class="chip" href="faq.php">SSS</a>
                        </div>
                    </div>
                </section>

                <section class="card">
                    <h3>Hızlı İletişim</h3>
                    <p class="muted">
                        Bizimle hızlıca iletişime geçmek için aşağıdaki kanalları kullanabilirsin.
                    </p>

                    <div class="quick-contact">
                        <a class="qc-item" href="mailto:info@auroratravel.com">
                            <span class="qc-icon">✉️</span>
                            <div>
                                <strong>E-posta Gönder</strong>
                                <div class="muted">info@auroratravel.com</div>
                            </div>
                        </a>

                        <a class="qc-item" href="https://wa.me/903120000000" target="_blank">
                            <span class="qc-icon">💬</span>
                            <div>
                                <strong>WhatsApp ile Yaz</strong>
                                <div class="muted">+90 312 000 00 00</div>
                            </div>
                        </a>

                        <a class="qc-item" href="tel:+903120000000">
                            <span class="qc-icon">📞</span>
                            <div>
                                <strong>Telefonla Ara</strong>
                                <div class="muted">+90 (312) 000 00 00</div>
                            </div>
                        </a>
                    </div>


                </section>

            </div>

            <div class="card" style="margin-top:14px;">
                <h3>Harita</h3>
                <p class="muted">Ofis konumumuz .</p>

                <div class="map-wrap" style="margin-top:10px;">
                    <iframe title="Aurora Travel Map"
                        src="https://www.google.com/maps?q=K%C4%B1z%C4%B1lay%20Ankara&output=embed" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
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
