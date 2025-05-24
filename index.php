<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alvits Gamming</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Oswald:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="icon" href="img/alvits icon.png">
</head>
<body>
        <?php
            include 'koneksi.php';
        ?>
    <div id="halaman-utama">
        <h1 class="selamat-datang">Halo Selamat Datang Di Website Saya</h1>
    </div>
    <ul class="navigasi">
        <li class="nav-icon desktop"><img src="img/Screenshot.jpg" alt="iconAvatar.svg"></li>
        <li><a href="#about-me">Tentang Saya</a></li>
        <li><a href="#content">Konten</a></li>
        <li><a href="#kontak-saya">Kontak Saya</a></li>
    </ul>
    <div id="about-me">
        <h1 class="title-tentang-saya">Tentang Saya</h1>
        <div class="perkenalan">
            <img src="img/alvits icon.png" alt="iconAvatar.svg" class="img-icon">
            <p class="content-perkenalan">Perkenalkan saya Vina, seorang terjun dalam dunia Game dan menjadi Streamer Gamming di Youtube. Misi saya, berusaha mengajak teman-teman, untuk menciptakan dunia gamming yang bebas dari toxic (baik perkataan maupun perbuatan) <br>EHEHEHE</p>
        </div>
       
    </div>
    <div id="content">
        <h1 class="title-portofolio">My Content</h1>
        <div class="container">
            <img src="img/valorant warm up.jpg" alt="" class="img-portofolio">
            <img src="img/The Finals.jpg" alt="" class="img-portofolio">
            <img src="img/dinkum.jpg" alt="" class="img-portofolio">
            <img src="img/sky.jpg" alt="" class="img-portofolio">
        </div>
    </div>
    <hr>
    <div id="kontak-saya">
        <h1 class="title-contact">Kontak Saya</h1>
        <div class="apa">
            <form action="action_create.php" method="post" class="form-kontak-saya">
                <div class="inputan">
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama">
                </div>
                <div class="inputan">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="">
                </div>
                <div class="inputan">
                    <label for="pesan">Pesan</label>
                    <textarea name="pesan" id="" cols="30" rows="10" id="pesan"></textarea>
                </div>
                <button type="submit" class="btn-kirim">Kirim</button>
            </form>
            <div class="contact-info">
                <h3 class="non-desktop">Ketuk Salah Satu Untuk Mendapat Info</h3>
                <div>
                    <a href="http://www.youtube.com/@alvits1995" class="contact-icon-bundler">
                        <img src="img/youtube.png" alt="Youtube.png" class="contact-icon">
                        <span class="contact-desktop">Avits</span>
                    </a>
                    <a href="https://discord.gg/E9Z49Fa9FZ" class="contact-icon-bundler">
                        <img src="img/Discord Icon.jpg" alt="discord icon.png" class="contact-icon">
                        <span class="contact-desktop">Bunker Server</span>
                    </a>
                    <a href="http://www.gmail.com" class="contact-icon-bundler">
                        <img src="img/email.png" alt="email" class="contact-icon">
                        <span class="contact-desktop">vinaedogawa@gmail.com</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <footer>© Alvits. All rights reserved.</footer>
</body>
</html>