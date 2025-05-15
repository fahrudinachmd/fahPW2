<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Rasa Nusantara</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #fefcf9;
            color: #333;
        }

        header {
            background-color: #d94f30;
            padding: 20px;
            color: white;
            text-align: center;
        }

        nav {
            background-color: #f3e2d2;
            display: flex;
            justify-content: center;
            gap: 30px;
            padding: 15px 0;
            font-weight: bold;
        }

        nav a {
            text-decoration: none;
            color: #d94f30;
        }

        .hero {
            background-image: url('https://cdn.idntimes.com/content-images/post/20200729/pexels-photo-5409005-b6f37ff4ce34c2c101e3a2b319db7d4a.jpg');
            height: 300px;
            background-size: cover;
            background-position: center;
        }

        .main-content {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 20px;
            padding: 30px;
        }

        .artikel,
        .sidebar {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
        }

        .artikel h2 {
            color: #d94f30;
        }

        .sidebar h3 {
            border-bottom: 2px solid #d94f30;
            padding-bottom: 5px;
        }

        footer {
            background-color: #d94f30;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 30px;
        }
    </style>
</head>

<body>

    <header>
        <h1>Rasa Nusantara</h1>
        <p>Menggali Rasa dari Sabang sampai Merauke</p>
    </header>

    <nav>
        <a href="#">Beranda</a>
        <a href="#">Resep</a>
        <a href="#">Rekomendasi</a>
        <a href="#">Kontak</a>
    </nav>

    <div class="hero"></div>

    <div class="main-content">
        <div class="artikel">
            <h2>Soto Betawi: Kaya Rasa dan Rempah</h2>
            <p>Soto Betawi merupakan hidangan khas Jakarta yang kaya akan santan dan rempah-rempah. Cocok disantap saat cuaca dingin atau untuk makan malam spesial bersama keluarga.</p>
        </div>

        <div class="sidebar">
            <h3>Menu Favorit Minggu Ini</h3>
            <ul>
                <li>Nasi Liwet</li>
                <li>Ayam Taliwang</li>
                <li>Lontong Balap</li>
                <li>Rawon Surabaya</li>
            </ul>
        </div>
    </div>

    <footer>
        &copy; 2025 Rasa Nusantara | Dibuat oleh fahrudin
    </footer>

</body>

</html>