<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HAI SAM</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background-color: #f3f0ff;
      /* Latar belakang ungu pastel */
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #2c2c2c;
    }

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1rem 2rem;
      background-color: #6a5acd;
      /* Slate Blue */
      box-shadow: 0 0 10px #c5b9ff;
    }

    .navbar .brand {
      font-size: 1.5rem;
      color: #ffffff;
      text-shadow: 0 0 5px #dcd1ff;
      font-weight: bold;
      text-decoration: none;
    }

    .navbar ul {
      list-style: none;
      display: flex;
      gap: 1.5rem;
    }

    .navbar ul li a {
      color: #fff;
      text-decoration: none;
      font-weight: 500;
      transition: color 0.3s ease;
    }

    .navbar ul li a:hover {
      color: #ffeb3b;
      /* Kuning saat hover */
      text-shadow: 0 0 8px #ffeb3b;
    }

    .container {
      padding: 3rem 2rem;
      text-align: center;
    }

    .container h1 {
      font-size: 3rem;
      margin-bottom: 1rem;
      color: #6a5acd;
      text-shadow: 0 0 8px #dcd1ff;
    }

    .container p {
      font-size: 1.2rem;
      max-width: 600px;
      margin: 0 auto;
      line-height: 1.6;
      color: #4b4b4b;
    }

    @media (max-width: 768px) {
      .navbar ul {
        flex-direction: column;
        gap: 1rem;
        margin-top: 1rem;
      }
    }
  </style>
</head>

<body>

  <nav class="navbar">
    <a href="#" class="brand">HAI SAM</a>
    <ul>
      <li><a href="#">Beranda</a></li>
      <li><a href="#">Tentang</a></li>
      <li><a href="#">Layanan</a></li>
      <li><a href="#">Kontak</a></li>
    </ul>
  </nav>

  <div class="container">
    <h1>NOMOR 2</h1>
    <p>
      FAHRUDIN AHMAD
    </p>
  </div>

</body>

</html>