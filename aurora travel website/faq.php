<?php session_start(); ?>
<!doctype html>
<html lang="tr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aurora Travel | Sık Sorulan Sorular</title>
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
            <h2>Sık Sorulan Sorular</h2>
            <p class="muted">
                Turlar, konaklama ve rezervasyon süreci hakkında en çok merak edilen sorular.
            </p>

            <div class="faq-list" style="margin-top:14px;">

                <div class="faq-item">
                    <button class="faq-question">
                        Turlara tek başıma katılabilir miyim?
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <p class="muted">
                            Evet. Turlarımız bireysel katılıma uygundur. Tek katılan misafirlerimiz
                            grup içerisinde rahatlıkla yer alabilir.
                        </p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        Konaklama fiyatlara dahil mi?
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <p class="muted">
                            Evet. Tur detaylarında belirtilen otellerde konaklama ve programda
                            yer alan kahvaltılar fiyata dahildir.
                        </p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        Rezervasyon nasıl yapılır?
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <p class="muted">
                            Rezervasyon işlemleri web sitemizde yer alan rezervasyon sayfası
                            üzerinden veya WhatsApp / e-posta yoluyla yapılabilir.
                        </p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        Tur iptali ve iade koşulları nelerdir?
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <p class="muted">
                            Tur başlangıç tarihinden belirli bir süre öncesine kadar yapılan iptallerde
                            iade koşulları tur sözleşmesine göre uygulanır. Detaylar tur açıklamasında yer alır.
                        </p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        Yurtdışı turlarda vize gerekiyor mu?
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <p class="muted">
                            Bazı ülkeler için vize gereklidir. Vize durumu ve gerekli belgeler
                            tur detay sayfasında açıkça belirtilir.
                        </p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        Tur rehberleri kimlerden oluşuyor?
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <p class="muted">
                            Turlarımız, bölgeyi iyi bilen ve gerekli lisanslara sahip profesyonel
                            rehberler eşliğinde gerçekleştirilir.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="container">© 2025 Aurora Travel</div>
    </footer>

    <script>
        document.querySelectorAll(".faq-question").forEach(btn => {
            btn.addEventListener("click", () => {
                const item = btn.parentElement;
                const isOpen = item.classList.contains("active");

                document.querySelectorAll(".faq-item").forEach(i => {
                    i.classList.remove("active");
                });

                if (!isOpen) {
                    item.classList.add("active");
                }
            });
        });
    </script>

    <script>
        const hamburger = document.getElementById("hamburger");
        const menu = document.getElementById("menu");

        hamburger.addEventListener("click", () => {
            menu.classList.toggle("active");
        });
    </script
