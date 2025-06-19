<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Blog Saya</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: blue;
    }

    .judul-blog {
      font-weight: bold;
    }
  </style>
</head>
<body>

  <!-- Header -->
  <header class="text-center p-3 bg-light">
    <h1>Selamat Datang di Blog Saya</h1>
  </header>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Blog Saya</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Kategori</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Produk</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Konten -->
  <main class="container text-white mt-4">
    <h2 class="judul-blog">Blog Saya</h2>
    <p>Hari ini adalah: 
      <strong>
        <?php
          echo date("l, d F Y");
        ?>
      </strong>
    </p>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>