<?php
session_start();
include 'baglan.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kadi = $_POST['kadi'];
    $sifre = $_POST['sifre'];
    $sorgu = "SELECT * FROM kullanicilar WHERE kullanici_adi = '$kadi' AND sifre = '$sifre'";
    $sonuc = mysqli_query($baglanti, $sorgu);

    if (mysqli_num_rows($sonuc) == 1) {
        $user = mysqli_fetch_assoc($sonuc);
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user'] = $user['kullanici_adi'];
        $_SESSION['rol'] = $user['rol'];
        header("Location: index.php");
        exit();
    } else { $hata = "Kullanıcı adı veya şifre hatalı!"; }
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Giriş Yap - Aurora Travel</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .auth-container { display: flex; align-items: center; justify-content: center; min-height: 100vh; background: #f8fafc; padding: 20px; }
        .auth-card { width: 100%; max-width: 400px; padding: 35px; border-radius: 20px; box-shadow: 0 15px 35px rgba(0,0,0,0.05); }
        .input-group { margin-bottom: 20px; }
        .input-group label { display: block; margin-bottom: 8px; font-weight: 700; color: #0f172a; }
        .input-group input { width: 100%; display: block; border: 2px solid #e2e8f0; transition: all 0.3s ease; }
        .input-group input:focus { border-color: var(--accent); box-shadow: 0 0 0 4px rgba(20,184,166,0.1); }
        .auth-header { text-align: center; margin-bottom: 30px; }
        .auth-header h2 { color: #0b4c53; font-size: 28px; margin-bottom: 8px; }
        .alert { padding: 12px; border-radius: 12px; text-align: center; margin-bottom: 20px; font-size: 14px; font-weight: 600; }
        .alert-error { background: #fef2f2; color: #b91c1c; border: 1px solid #fee2e2; }
    </style>
</head>
<body>
    <div class="auth-container">
        <div class="card auth-card">
            <div class="auth-header">
                <h2>Tekrar Hoş Geldiniz!</h2>
                <p class="muted">Bilgilerinizle sisteme giriş yapın.</p>
            </div>

            <?php if(isset($hata)) echo "<div class='alert alert-error'>$hata</div>"; ?>

            <form method="POST">
                <div class="input-group">
                    <label>Kullanıcı Adı</label>
                    <input type="text" name="kadi" class="input" placeholder="Kullanıcı adınız" required>
                </div>
                
                <div class="input-group">
                    <label>Şifre</label>
                    <input type="password" name="sifre" class="input" placeholder="••••••••" required>
                </div>
                
                <button type="submit" class="btn" style="width:100%; padding: 14px; font-size: 16px; margin-top: 10px;">Giriş Yap</button>
            </form>
            
            <p style="text-align:center; margin-top:25px;" class="muted">
                Hesabın yok mu? <a href="kayit.php" style="color: var(--accent); font-weight: 800; text-decoration: underline;">Ücretsiz Kayıt Ol</a>
            </p>
        </div>
    </div>
</body>
</html>