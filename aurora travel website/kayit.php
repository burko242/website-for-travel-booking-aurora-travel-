<?php
include 'baglan.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kadi = $_POST['kadi']; $email = $_POST['email']; $sifre = $_POST['sifre'];
    $ekle = "INSERT INTO kullanicilar (kullanici_adi, email, sifre) VALUES ('$kadi', '$email', '$sifre')";
    if (mysqli_query($baglanti, $ekle)) { header("Location: login.php?kayit=basarili"); exit(); }
    else { $hata = "Bu kullanıcı adı zaten alınmış."; }
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Üye Ol - Aurora Travel</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .auth-container { display: flex; align-items: center; justify-content: center; min-height: 100vh; background: #f8fafc; padding: 20px; }
        .auth-card { width: 100%; max-width: 420px; padding: 35px; border-radius: 20px; box-shadow: 0 15px 35px rgba(0,0,0,0.05); }
        .input-group { margin-bottom: 18px; }
        .input-group label { display: block; margin-bottom: 8px; font-weight: 700; color: #0f172a; }
        .input-group input { width: 100%; display: block; border: 2px solid #e2e8f0; }
        .auth-header { text-align: center; margin-bottom: 25px; }
        .auth-header h2 { color: var(--accent2); font-size: 28px; }
        .accent-text { color: var(--accent); }
    </style>
</head>
<body>
    <div class="auth-container">
        <div class="card auth-card">
            <div class="auth-header">
                <h2>Aramıza <span class="accent-text">Katılın!</span></h2>
                <p class="muted">Yeni rotaları keşfetmek için hesap oluşturun.</p>
            </div>

            <?php if(isset($hata)) echo "<div style='color:red; text-align:center; margin-bottom:15px;'>$hata</div>"; ?>

            <form method="POST">
                <div class="input-group">
                    <label>Kullanıcı Adı</label>
                    <input type="text" name="kadi" class="input" placeholder="Örn: gezgin_ali" required>
                </div>
                
                <div class="input-group">
                    <label>E-posta Adresi</label>
                    <input type="email" name="email" class="input" placeholder="mail@ornek.com" required>
                </div>
                
                <div class="input-group">
                    <label>Şifre</label>
                    <input type="password" name="sifre" class="input" placeholder="Şifrenizi belirleyin" required>
                </div>
                
                <button type="submit" class="btn" style="width:100%; padding: 14px; font-size: 16px; margin-top: 10px;">Kayıt Ol</button>
            </form>
            
            <p style="text-align:center; margin-top:25px;" class="muted">
                Zaten bir hesabın var mı? <a href="login.php" style="color: var(--accent); font-weight: 800; text-decoration: underline;">Giriş Yap</a>
            </p>
        </div>
    </div>
</body>
</html>