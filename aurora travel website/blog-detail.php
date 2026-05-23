<?php session_start(); ?>
<!doctype html>
<html lang="tr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aurora Travel | Blog Detay</title>
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
            <a class="chip" href="blog.php">← Blog’a Dön</a>

            <div class="detail-grid" style="margin-top:12px;">
                <article class="card">
                    <div id="blogHero" class="detail-hero" style="background-image:url('assets/img/slide1.jpg')"></div>

                    <div style="padding:14px 4px 0;">
                        <div class="post-meta" style="margin-top:2px;">
                            <span id="blogBadge" class="badge">Destinasyon</span>
                            <span id="blogMeta" class="muted">• 12 Aralık 2025 • 4 dk okuma</span>
                        </div>

                        <h2 id="blogTitle" style="margin-top:10px;">Başlık</h2>
                        <p id="blogIntro" class="muted" style="margin-top:8px;">Giriş metni...</p>

                        <div id="blogContent" class="muted" style="line-height:1.9; margin-top:12px;">
                        </div>
                    </div>
                </article>

                <aside class="card">
                    <h3>İlgili Bağlantılar</h3>
                    <p class="muted">Bu yazıyla bağlantılı tura geç veya hızlı rezervasyon yap.</p>

                    <div style="margin-top:12px; display:grid; gap:10px;">
                        <a id="relatedTourBtn" class="btn ghost" href="tours.php" style="text-align:center;">Turları
                            Gör</a>
                        <a class="btn" href="booking.php" style="text-align:center;">Hızlı Rezervasyon</a>
                        <a class="btn ghost" href="contact.php" style="text-align:center;">Soru Sor</a>
                    </div>

                    <div class="card" style="margin-top:14px;">
                        <h3 style="margin-top:0;">İpucu</h3>
                        <p class="muted" id="blogTip" style="margin:8px 0 0;">—</p>
                    </div>
                </aside>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="container">© 2025 Aurora Travel</div>
    </footer>

    <script>
        const posts = {
            kapadokya: {
                badge: "Destinasyon",
                meta: "• 12 Aralık 2025 • 4 dk okuma",
                title: "Kapadokya’da 1 Günde Ne Yapılır?",
                hero: "assets/img/tour_kapadokya.jpg",
                intro: "Kapadokya’da kısa sürede maksimum deneyim için pratik bir rota: gün doğumu, vadiler, fotoğraf durakları.",
                tip: "Gün doğumu için en az 30-40 dk önce vadide ol; ışık inanılmaz fark ediyor.",
                relatedText: "Kapadokya Turunu Gör",
                relatedHref: "tour-detail.php?id=kapadokya",
                content: [
                    "<h3>1) Gün Doğumu & Balon İzleme</h3><p>Balona binmesen bile izleme noktaları muazzam. Erken kalk, termosa kahve al.</p>",
                    "<h3>2) Kısa Vadi Yürüyüşü</h3><p>Güvercinlik / Aşk Vadisi gibi kısa parkurlarla 1-2 saatte güzel bir yürüyüş yaparsın.</p>",                                
                    "<h3>3) Öğlen – Avanos / Çömlek</h3><p>Avanos’ta kısa bir atölye deneyimi yapabilir veya merkezde dinlenebilirsin.</p>",
                    "<h3>4) Gün Batımı</h3><p>Gün batımını yüksek bir seyir noktasında bitir. Fotoğraf için altın saat.</p>"
                ]
            },

            bilet: {
                badge: "İpucu",
                meta: "• 5 Aralık 2025 • 3 dk okuma",
                title: "Ucuza Bilet Bulmanın 6 Pratik Yolu",
                hero: "assets/img/slide2.jpg",
                intro: "Bütçe dostu seyahat için arama taktikleri: esnek tarih, uyarılar, doğru saatler.",
                tip: "Esnek tarih + yakın havalimanı kombinasyonu fiyatı ciddi düşürür.",
                relatedText: "Turları Gör",
                relatedHref: "tours.php",
                content: [
                    "<h3>1) Esnek Tarih Kullan</h3><p>1-2 gün oynama bile fiyatı düşürebilir.</p>",
                    "<h3>2) Fiyat Uyarısı Aç</h3><p>Takip araçlarıyla fiyat düşünce bildirim al.</p>",
                    "<h3>3) Yakın Havalimanlarını Dene</h3><p>Aynı şehrin farklı havalimanları büyük fark yaratabilir.</p>",
                    "<h3>4) Çıkış Saatini Değiştir</h3><p>Sabah erken/Gece geç uçuşlar daha uygun olabilir.</p>",
                    "<h3>5) Aktarmalı Opsiyonlara Bak</h3><p>Bazen 1 aktarma ciddi tasarruf sağlar.</p>",
                    "<h3>6) Gizli Mod / Çerez</h3><p>Abartma ama bazen fiyat/öneri farkı oluşabiliyor.</p>"
                ]
            },

            roma: {
                badge: "Yurtdışı",
                meta: "• 27 Kasım 2025 • 5 dk okuma",
                title: "Roma’da İlk Kez Gidecekler İçin Mini Rehber",
                hero: "assets/img/tour_roma.jpg",
                intro: "Roma’da ilk günlerde kaybolmamak için: temel rota, görülmesi gerekenler ve kısa yemek notları.",
                tip: "Vatikan için biletini mümkünse önceden al; sıra stresini bitirir.",
                relatedText: "Roma Turunu Gör",
                relatedHref: "tour-detail.php?id=roma",
                content: [
                    "<h3>1) Klasik İlk Gün Rotası</h3><p>Kolezyum → Forum → Piazza Venezia şeklinde ilerleyebilirsin.</p>",
                    "<h3>2) Vatikan Günü</h3><p>Müzeler ve San Pietro için yarım gün ayır. Erken git.</p>",
                    "<h3>3) Yürüyerek Keşfet</h3><p>Roma yürüyüş şehri: dar sokaklar ve meydanlar asıl keyif.</p>",
                    "<h3>4) Nerede Ne Yenir?</h3><p>Yerel trattoria’larda karbonara/amatriciana deneyebilirsin.</p>"
                ]
            },

            kas: {
                badge: "Deniz",
                meta: "• 10 Kasım 2025 • 4 dk okuma",
                title: "Kaş’ta En Güzel Koylar",
                hero: "assets/img/tour_kas.jpg",
                intro: "Kaş’ta tekne rotaları, yüzme molaları ve fotoğraf için en iyi saatler: kısa ve net bir rehber.",
                tip: "Deniz en sakin sabah saatlerinde; fotoğraf ve yüzme için ideal.",
                relatedText: "Kaş Turunu Gör",
                relatedHref: "tour-detail.php?id=kas",
                content: [
                    "<h3>1) Tekne Turu ile Koylar</h3><p>Günlük teknelerle 3-4 farklı koyda yüzme molası yaparsın.</p>",
                    "<h3>2) Sakin Koy Önerisi</h3><p>Kalabalıktan kaçmak için öğleden önce koylara git.</p>",
                    "<h3>3) Gün Batımı Noktası</h3><p>Akşamüstü merkez çevresinde yürüyüşle güzel gün batımı yakalanır.</p>"
                ]
            }
        };

        const params = new URLSearchParams(location.search);
        const id = params.get("id") || "kapadokya";
        const data = posts[id] || posts.kapadokya;

        document.getElementById("blogBadge").textContent = data.badge;
        document.getElementById("blogMeta").textContent = data.meta;
        document.getElementById("blogTitle").textContent = data.title;
        document.getElementById("blogIntro").textContent = data.intro;
        document.getElementById("blogHero").style.backgroundImage = `url('${data.hero}')`;
        document.getElementById("blogTip").textContent = data.tip;

        const relatedBtn = document.getElementById("relatedTourBtn");
        relatedBtn.textContent = data.relatedText;
        relatedBtn.href = data.relatedHref;

        document.getElementById("blogContent").innerHTML = data.content.join("");
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
