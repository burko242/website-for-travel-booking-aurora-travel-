<?php session_start(); ?>
<!doctype html>
<html lang="tr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aurora Travel | Tur Detayı</title>
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
            <a class="chip" href="tours.php">← Turlara Dön</a>

            <div class="detail-grid" style="margin-top:12px;">
                <div class="card">
                    <div id="tourHero" class="detail-hero"
                        style="background-image:url('assets/img/tour_kapadokya.jpg')"></div>

                    <div style="padding:14px 4px 0;">
                        <div class="tour-top">
                            <span id="tourNights" class="badge">3 Gece</span>
                            <span id="tourPrice" class="price">₺7.900</span>
                        </div>

                        <h2 id="tourTitle" style="margin-top:8px;">Kapadokya Turu</h2>
                        <p id="tourDesc" class="muted">Balon turu, peri bacaları, vadi yürüyüşleri ve unutulmaz gün
                            batımı.</p>

                        <h3 style="margin-top:14px;">Tur Programı</h3>
                        <ul id="tourPlan" class="muted" style="line-height:1.8; margin-top:8px;">
                            <li>1. Gün: Varış – Göreme – serbest zaman</li>
                            <li>2. Gün: Balon turu (ops.) – Vadiler – Avanos</li>
                            <li>3. Gün: Yer altı şehri – Uçhisar – dönüş</li>
                        </ul>

                        <h3 style="margin-top:14px;">Dahil Olanlar</h3>
                        <div id="tourInclude" class="grid cols-2" style="margin-top:10px;">
                            <div class="mini card">✅ Ulaşım</div>
                            <div class="mini card">✅ Otel (2 gece)</div>
                            <div class="mini card">✅ Rehberlik</div>
                            <div class="mini card">✅ Kahvaltı</div>
                        </div>
                    </div>
                </div>

                <aside class="card">
                    <h3>Hızlı Rezervasyon</h3>
                    <p class="muted">Bu tur için hemen formu doldur.</p>

                    <div style="margin-top:12px; display:grid; gap:10px;">
                        <div class="mini card">
                            <div class="muted">Başlangıç</div>
                            <strong id="tourStart">Her Cumartesi</strong>
                        </div>
                        <div class="mini card">
                            <div class="muted">Kontenjan</div>
                            <strong id="tourQuota">12 kişi</strong>
                        </div>
                        <div class="mini card">
                            <div class="muted">Konaklama</div>
                            <strong id="tourStay">Butik Otel</strong>
                        </div>
                    </div>

                    <a class="btn" href="booking.php" style="margin-top:14px; width:100%; text-align:center;">
                        Rezervasyona Git
                    </a>
                </aside>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="container">© 2025 Aurora Travel</div>
    </footer>

    <script>
        const tours = {
            kapadokya: {
                nights: "3 Gece",
                title: "Kapadokya Turu",
                desc: "Balon turu, peri bacaları, vadi yürüyüşleri ve unutulmaz gün batımı.",
                price: "₺7.900",
                hero: "assets/img/tour_kapadokya.jpg",
                start: "Her Cumartesi",
                quota: "12 kişi",
                stay: "Butik Otel",
                plan: [
                    "1. Gün: Varış – Göreme – serbest zaman",
                    "2. Gün: Balon turu (ops.) – Vadiler – Avanos",
                    "3. Gün: Yer altı şehri – Uçhisar – dönüş"
                ],
                include: ["Ulaşım", "Otel (2 gece)", "Rehberlik", "Kahvaltı"]
            },
            istanbul: {
                nights: "3 Gece",
                title: "İstanbul Kültür Turu",
                desc: "Tarihi yarımada, Boğaz turu, müzeler ve lezzet durakları.",
                price: "₺6.900",
                hero: "assets/img/tour_istanbul.jpg",
                start: "Her Çarşamba",
                quota: "20 kişi",
                stay: "Şehir Oteli",
                plan: [
                    "1. Gün: Varış – Sultanahmet – Ayasofya çevresi",
                    "2. Gün: Topkapı – Kapalıçarşı – Boğaz turu",
                    "3. Gün: Galata – İstiklal – dönüş"
                ],
                include: ["Ulaşım", "Otel (2 gece)", "Rehberlik", "Kahvaltı"]
            },

            karadeniz: {
                nights: "4 Gece",
                title: "Karadeniz Yaylalar Turu",
                desc: "Ayder, Uzungöl, yayla rotaları, doğa ve bol fotoğraf.",
                price: "₺9.500",
                hero: "assets/img/tour_karadeniz.jpg",
                start: "Her Perşembe",
                quota: "16 kişi",
                stay: "Yayla Oteli",
                plan: [
                    "1. Gün: Trabzon varış – şehir turu",
                    "2. Gün: Uzungöl – serbest zaman",
                    "3. Gün: Ayder – yayla rotaları",
                    "4. Gün: Fırtına Deresi – dönüş"
                ],
                include: ["Ulaşım", "Otel (3 gece)", "Rehberlik", "Kahvaltı"]
            },

            kas: {
                nights: "2 Gece",
                title: "Kaş – Kalkan Turu",
                desc: "Koylar, deniz, tekne turu ve sakin bir kaçamak.",
                price: "₺6.400",
                hero: "assets/img/tour_kas.jpg",
                start: "Her Cuma",
                quota: "14 kişi",
                stay: "Sahil Oteli",
                plan: [
                    "1. Gün: Varış – Kaş merkez – serbest zaman",
                    "2. Gün: Tekne turu – koylar – yüzme molası",
                    "3. Gün: Kalkan – dönüş"
                ],
                include: ["Ulaşım", "Otel (2 gece)", "Rehberlik", "Kahvaltı"]
            },

            roma: {
                nights: "4 Gece",
                title: "Roma – Floransa",
                desc: "Tarih, sanat, İtalyan mutfağı ve şehir yürüyüş rotaları.",
                price: "€499",
                hero: "assets/img/tour_roma.jpg",
                start: "Her ay",
                quota: "18 kişi",
                stay: "Şehir Oteli",
                plan: [
                    "1. Gün: Roma varış – şehir turu",
                    "2. Gün: Vatikan – müzeler",
                    "3. Gün: Floransa günübirlik",
                    "4. Gün: Serbest zaman – dönüş"
                ],
                include: ["Ulaşım", "Otel (4 gece)", "Rehberlik", "Kahvaltı"]
            },

            paris: {
                nights: "5 Gece",
                title: "Paris – Brugge",
                desc: "Romantik şehirler, müzeler ve nehir turu tadında bir rota.",
                price: "€699",
                hero: "assets/img/tour_paris.jpg",
                start: "Ayda 1",
                quota: "18 kişi",
                stay: "Şehir Oteli",
                plan: [
                    "1. Gün: Paris varış",
                    "2. Gün: Louvre – şehir yürüyüşü",
                    "3. Gün: Brugge günübirlik",
                    "4. Gün: Eyfel – Seine turu",
                    "5. Gün: Dönüş"
                ],
                include: ["Ulaşım", "Otel (5 gece)", "Rehberlik", "Kahvaltı"]
            },

            yunan: {
                nights: "5 Gece",
                title: "Yunan Adaları",
                desc: "Mikonos + Santorini kombin turu, ada sokakları ve gün batımı.",
                price: "€589",
                hero: "assets/img/tour_yunan.jpg",
                start: "Ayda 2 kez",
                quota: "20 kişi",
                stay: "Ada Oteli",
                plan: [
                    "1. Gün: Varış – serbest zaman",
                    "2. Gün: Mikonos turu",
                    "3. Gün: Feribot – Santorini",
                    "4. Gün: Santorini keşif",
                    "5. Gün: Dönüş"
                ],
                include: ["Ulaşım", "Otel (5 gece)", "Rehberlik", "Kahvaltı"]
            }
        };

        const params = new URLSearchParams(location.search);
        const id = params.get("id") || "kapadokya";
        const data = tours[id] || tours.kapadokya;

        document.getElementById("tourNights").textContent = data.nights;
        document.getElementById("tourTitle").textContent = data.title;
        document.getElementById("tourDesc").textContent = data.desc;
        document.getElementById("tourPrice").textContent = data.price;
        document.getElementById("tourStart").textContent = data.start;
        document.getElementById("tourQuota").textContent = data.quota;
        document.getElementById("tourStay").textContent = data.stay;

        document.getElementById("tourHero").style.backgroundImage = `url('${data.hero}')`;

        const planEl = document.getElementById("tourPlan");
        planEl.innerHTML = data.plan.map(x => `<li>${x}</li>`).join("");

        const incEl = document.getElementById("tourInclude");
        incEl.innerHTML = data.include
            .map(x => `<div class="mini card">✅ ${x}</div>`)
            .join("");
    </script>

    <script>
        const hamburger = document.getElementById("hamburger");
        const menu = document.getElementById("menu");

        hamburger.addEventListener("click", () => {
            menu.classList.toggle("active");
        });
    </script>

</body>

</html>
