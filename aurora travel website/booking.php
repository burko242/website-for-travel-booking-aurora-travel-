<?php
session_start();
include 'baglan.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php?uyari=oturum_acin");
    exit();
}

$mesaj = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION['user_id'];
    $service = $_POST['tour']; 
    $passengers = $_POST['people']; 
    $date = $_POST['startDate']; 

    $sorgu = "INSERT INTO rezervasyonlar (kullanici_id, tur_adi, kisi_sayisi, rezervasyon_tarihi) 
              VALUES ('$user_id', '$service', '$passengers', '$date')";
    
    if (mysqli_query($baglanti, $sorgu)) {
        $mesaj = "Harika! Rezervasyonunuz başarıyla alındı ve yöneticiye iletildi.";
    } else {
        $mesaj = "<span style='color:red;'>Bir hata oluştu: " . mysqli_error($baglanti) . "</span>";
    }
}
?>

<!doctype html>
<html lang="tr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aurora Travel | Rezervasyon</title>
    <link rel="stylesheet" href="assets/css/style.css" />
    <style>
        .php-success-alert {
            margin-bottom: 20px;
            padding: 15px;
            background-color: #d1fae5;
            color: #065f46;
            border: 1px solid #34d399;
            border-radius: 12px;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <header class="topbar">
        <div class="container nav">
            <a href="index.php">
                <div class="brand">Aurora Travel</div>
            </a>
            <nav class="menu" id="menu">
                <a href="index.php">Ana Sayfa</a>
                <a href="about.php">Hakkımızda</a>
                <a href="tours.php">Turlar</a>
                <a href="hotels.php">Otel & Konaklama</a>
                <a class="active" href="booking.php">Rezervasyon</a>
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
            <h2>Rezervasyon Formu</h2>
            <p class="muted">Bilgileri doldur ve yeni macerana adım at.</p>

            <div class="card" style="margin-top: 20px;">
                <?php if(!empty($mesaj)): ?>
                    <div class="php-success-alert"><?php echo $mesaj; ?></div>
                <?php endif; ?>

                <form method="POST" action="">

                    <div class="form-row">
                        <div>
                            <label>Ad Soyad</label>
                            <input class="input" type="text" name="fullName" placeholder="Adınız Soyadınız" required>
                        </div>
                        <div>
                            <label>E-posta</label>
                            <input class="input" type="email" name="email" placeholder="ornek@mail.com" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div>
                            <label>Telefon</label>
                            <input class="input" type="text" name="phone" placeholder="05xx xxx xx xx" required>
                        </div>
                        <div>
                           <label>Tur Seçimi</label>
                            <select name="tour" class="input" required>
                                <option value="">Seçiniz...</option>
                                <optgroup label="Yurt İçi Turlar">
                                    <option value="Kapadokya Turu">Kapadokya Turu</option>
                                    <option value="Karadeniz Yaylalar">Karadeniz Yaylalar</option>
                                    <option value="Kaş-Kalkan Turu">Kaş-Kalkan Turu</option>
                                </optgroup>

                                <optgroup label="Yurt Dışı Turlar">
                                    <option value="Roma-Floransa Turu">Roma-Floransa Turu</option>
                                    <option value="Paris-Brugge Turu">Paris-Brugge Turu</option>
                                    <option value="Yunan Adaları Turu">Yunan Adaları Turu</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div>
                            <label>Gidiş Tarihi</label>
                            <input class="input" type="date" name="startDate" required>
                        </div>
                        <div>
                            <label>Kişi Sayısı</label>
                            <input class="input" type="number" name="people" min="1" max="10" value="1" required>
                        </div>
                    </div>

                    <label>Not (opsiyonel)</label>
                    <textarea class="input" name="note" rows="3" placeholder="Örn: Denize yakın otel olsun"></textarea>

                    <label style="margin-top:14px; display: block;">
                        <input type="checkbox" required> KVKK / Aydınlatma metnini okudum ve onaylıyorum.
                    </label>

                    <div style="margin-top:20px; display:flex; gap:10px; flex-wrap:wrap;">
                        <button class="btn" type="submit">Rezervasyonu Gönder</button>
                        <button class="btn ghost" type="reset">Temizle</button>
                    </div>

                </form>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="container">© 2026 Aurora Travel</div>
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