<?php
session_start();
include 'baglan.php';

if (!isset($_SESSION['user_id']) || $_SESSION['rol'] != 'admin')
{
    header("Location: index.php");
    exit();
}

if (isset($_GET['islem']) && $_GET['islem'] == 'onayla')
{
    $id = intval($_GET['id']);
    $guncelleSorgu = "UPDATE rezervasyonlar SET durum = 'Onaylandı' WHERE id = $id";
    mysqli_query($baglanti, $guncelleSorgu);
    header("Location: admin.php");
    exit();
}

if (isset($_GET['islem']) && $_GET['islem'] == 'sil')
{
    $id = intval($_GET['id']);
    $silSorgu = "DELETE FROM rezervasyonlar WHERE id = $id";
    mysqli_query($baglanti, $silSorgu);
    header("Location: admin.php");
    exit();
}

$siralaKurali = "ORDER BY r.id DESC"; 

if (isset($_GET['sirala']) && $_GET['sirala'] == 'tur')
{
    $siralaKurali = "ORDER BY r.tur_adi ASC";
}

$sorgu = "SELECT r.*, k.kullanici_adi, k.email FROM rezervasyonlar r JOIN kullanicilar k ON r.kullanici_id = k.id $siralaKurali";
$rezervasyonlar = mysqli_query($baglanti, $sorgu);
?>

<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Yönetim Paneli | Aurora Travel</title>
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>

    <header class="topbar">
        <div class="container nav">
            <a href="index.php">
                <div class="brand">Aurora Travel (Admin)</div>
            </a>
            <nav class="menu" id="menu">
                <a href="index.php">Siteye Dön</a>
                <a href="logout.php" style="color: #dc2626; font-weight: bold;">Çıkış Yap</a>
            </nav>
        </div>
    </header>

    <main class="section">
        <div class="container">
            
            <div class="admin-header">
                <h1>Admin Paneline Hoşgeldiniz!</h1>
                <p>Sisteme gelen tüm rezervasyonları buradan görebilir, onaylayabilir veya silebilirsiniz.</p>
            </div>

            <div class="filter-bar" style="margin-bottom: 20px;">
                <span class="muted" style="font-weight: bold; margin-right: 10px;">Sıralama:</span>
                <a href="admin.php?sirala=tur" class="chip">Tur Adına Göre (A-Z)</a>
            </div>

            <div class="card">
                <h2 style="margin-bottom: 20px; color: #0f172a;">Gelen Rezervasyonlar</h2>
                
                <div class="table-wrapper">
                    <table class="admin-table">
                        <thead>
                            <tr>
                                <th>Müşteri Bilgisi</th>
                                <th>Seçilen Tur</th>
                                <th>Tarih</th>
                                <th>Kişi</th>
                                <th>Durum</th>
                                <th>İşlemler</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            if(mysqli_num_rows($rezervasyonlar) == 0) {
                                echo "<tr><td colspan='6' style='text-align:center;'>Henüz bir rezervasyon bulunmuyor.</td></tr>";
                            }
                            
                            while($satir = mysqli_fetch_assoc($rezervasyonlar)): 
                            ?>
                            <tr>
                                <td>
                                    <strong><?php echo $satir['kullanici_adi']; ?></strong><br>
                                    <span style="font-size:13px; color:#64748b;"><?php echo $satir['email']; ?></span>
                                </td>
                                <td>
                                    <span class="badge"><?php echo $satir['tur_adi']; ?></span>
                                </td>
                                <td><?php echo date('d.m.Y', strtotime($satir['rezervasyon_tarihi'])); ?></td>
                                <td><strong><?php echo $satir['kisi_sayisi']; ?></strong> Kişi</td>
                                <td>
                                    <?php if($satir['durum'] == 'Onaylandı'): ?>
                                        <span class="status-badge" style="background:#eaf8f7; color:#0f766e; border-color:rgba(20,184,166,.25);">Onaylandı</span>
                                    <?php else: ?>
                                        <span class="status-badge"><?php echo $satir['durum']; ?></span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <div style="display: flex; gap: 5px;">
                                        <?php if($satir['durum'] == 'Beklemede'): ?>
                                            <a href="admin.php?islem=onayla&id=<?php echo $satir['id']; ?>" class="btn" style="padding: 6px 12px; font-size: 13px;">Onayla</a>
                                        <?php endif; ?>
                                        
                                        <a href="admin.php?islem=sil&id=<?php echo $satir['id']; ?>" class="btn ghost" style="padding: 5px 10px; font-size: 13px; border-color: #dc2626; color: #dc2626;" onclick="return confirm('Bu rezervasyon kaydını tamamen silmek istediğinize emin misiniz?')">Sil</a>
                                    </div>
                                </td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </main>

    <footer class="footer">
        <div class="container">© 2026 Aurora Travel • Admin Paneli</div>
    </footer>

</body>
</html>