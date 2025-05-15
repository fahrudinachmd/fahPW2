<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>NOMOR 3</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background-color: #001f3f;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #ffffff;
    }

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1rem 2rem;
      background-color: #003366;
      box-shadow: 0 0 20px #ffd70055;
    }

    .navbar .brand {
      font-size: 1.5rem;
      color: #ffd700;
      text-shadow: 0 0 10px #ffd700;
      font-weight: bold;
      text-decoration: none;
    }

    .navbar ul {
      list-style: none;
      display: flex;
      gap: 1.5rem;
    }

    .navbar ul li a {
      color: #ffffff;
      text-decoration: none;
      font-weight: 500;
      transition: color 0.3s ease;
    }

    .navbar ul li a:hover {
      color: #ffd700;
      text-shadow: 0 0 8px #ffd700;
    }

    .container {
      padding: 3rem 2rem;
      text-align: center;
    }

    .container h1 {
      font-size: 2.8rem;
      margin-bottom: 2rem;
      color: #ffd700;
      text-shadow: 0 0 12px #ffd700;
    }

    .cards {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 2rem;
    }

    .card {
      background-color: #002b5b;
      border-radius: 12px;
      padding: 2rem;
      width: 280px;
      box-shadow: 0 0 15px #ffd70033;
      transition: transform 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 0 25px #ffd70088;
    }

    .card h3 {
      margin-bottom: 1rem;
      color: #ffd700;
      text-shadow: 0 0 6px #ffd700;
    }

    .card p {
      font-size: 0.95rem;
      color: #e0e0e0;
    }

    @media (max-width: 768px) {
      .cards {
        flex-direction: column;
        align-items: center;
      }
    }
  </style>
</head>

<body>

  <nav class="navbar">
    <a href="#" class="brand">fahrudin achmad</a>
    <ul>
      <li><a href="#">Beranda</a></li>
      <li><a href="#">Layanan</a></li>
      <li><a href="#">Proyek</a></li>
      <li><a href="#">Kontak</a></li>
    </ul>
  </nav>

  <div class="container">
    <h1>NOMOR 3</h1>
    <div class="cards">
      <div class="card">
        <h3>TUGAS</h3>
        <p>hallo guys</p>
      </div>
    </div>
  </div>

</body>

</html>