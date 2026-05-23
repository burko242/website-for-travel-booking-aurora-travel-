<?php session_start(); ?>
<!doctype html>
<html lang="tr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aurora Travel | Galeri</title>
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
            <h2>Fotoğraf Galerisi</h2>
            <p class="muted">Destinasyonlar ve konaklama görsellerinden seçmeler. </p>

            <h3 id="dest" style="margin-top:18px;">Destinasyon</h3>
            <div class="gallery-grid">
                <a class="g-item" href="tour-detail.php?id=kapadokya">
                    <img src="assets/img/tour_kapadokya.jpg" alt="Kapadokya">
                    <div class="g-overlay">
                        <strong>Kapadokya</strong>
                        <span class="muted">Balonlar & Vadiler</span>
                    </div>
                </a>

                <a class="g-item" href="tour-detail.php?id=kas">
                    <img src="assets/img/tour_kas.jpg" alt="Kaş">
                    <div class="g-overlay">
                        <strong>Kaş</strong>
                        <span class="muted">Koylar & Deniz</span>
                    </div>
                </a>

                <a class="g-item" href="tour-detail.php?id=karadeniz">
                    <img src="assets/img/tour_karadeniz.jpg" alt="Karadeniz">
                    <div class="g-overlay">
                        <strong>Karadeniz</strong>
                        <span class="muted">Yaylalar</span>
                    </div>
                </a>

                <a class="g-item" href="tour-detail.php?id=roma">
                    <img src="assets/img/tour_roma.jpg" alt="Roma">
                    <div class="g-overlay">
                        <strong>Roma</strong>
                        <span class="muted">Şehir Turu</span>
                    </div>
                </a>

                <a class="g-item" href="tour-detail.php?id=paris">
                    <img src="assets/img/tour_paris.jpg" alt="Paris">
                    <div class="g-overlay">
                        <strong>Paris</strong>
                        <span class="muted">Şehir Keşfi</span>
                    </div>
                </a>

                <a class="g-item" href="tour-detail.php?id=yunan">
                    <img src="assets/img/tour_yunan.jpg" alt="Yunan Adaları">
                    <div class="g-overlay">
                        <strong>Yunan Adaları</strong>
                        <span class="muted">Ada Kombini</span>
                    </div>
                </a>

                <a class="g-item" href="tour-detail.php?id=istanbul">
                    <img src="assets/img/tour_istanbul.jpg" alt="İstanbul">
                    <div class="g-overlay">
                        <strong>İstanbul</strong>
                        <span class="muted">Kültür & Boğaz</span>
                    </div>
                </a>
            </div>

            <h3 id="otel" style="margin-top:26px;">Otel</h3>
            <div class="gallery-grid">
                <a class="g-item" href="hotels.php">
                    <img src="assets/img/hotel_cappadocia.jpg" alt="Kapadokya Otel">
                    <div class="g-overlay">
                        <strong>Kapadokya Butik</strong>
                        <span class="muted">Mağara oda konsepti</span>
                    </div>
                </a>

                <a class="g-item" href="hotels.php">
                    <img src="assets/img/hotel_cappadocia_2.jpg" alt="Kapadokya Otel 2">
                    <div class="g-overlay">
                        <strong>Göreme Konaklama</strong>
                        <span class="muted">Merkezi konum</span>
                    </div>
                </a>

                <a class="g-item" href="hotels.php">
                    <img src="assets/img/hotel_kas.jpg" alt="Kaş Otel">
                    <div class="g-overlay">
                        <strong>Kaş Sahil Oteli</strong>
                        <span class="muted">Plaja yakın</span>
                    </div>
                </a>

                <a class="g-item" href="hotels.php">
                    <img src="assets/img/hotel_karadeniz.jpg" alt="Karadeniz Otel">
                    <div class="g-overlay">
                        <strong>Yayla Oteli</strong>
                        <span class="muted">Doğa ile iç içe</span>
                    </div>
                </a>

                <a class="g-item" href="hotels.php">
                    <img src="assets/img/hotel_uzungol.jpg" alt="Uzungöl Otel">
                    <div class="g-overlay">
                        <strong>Uzungöl Konaklama</strong>
                        <span class="muted">Göl manzarası</span>
                    </div>
                </a>

                <a class="g-item" href="hotels.php">
                    <img src="assets/img/hotel_roma.jpg" alt="Roma Otel">
                    <div class="g-overlay">
                        <strong>Roma Şehir Oteli</strong>
                        <span class="muted">Merkezi konum</span>
                    </div>
                </a>
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
