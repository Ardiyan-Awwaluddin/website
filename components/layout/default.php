<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>System Informasi Sekolah | <?= $data['title'] ?? '' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      .nav-link.active {
        color: #5fdb81 !important;
        font-weight: bold;
      }
      .btn-contact {
        background-color: #5fdb81;
        color: white;
        border-radius: 30px;
        padding: 8px 24px;
        font-weight: 500;
      }
    </style>
  </head>
  <body>
    <header class="mb-5">
      <nav class="navbar navbar-expand-lg bg-light shadow-sm">
        <div class="container">
          <a class="navbar-brand d-flex align-items-center gap-1" href="<?= BASE_URL ?>">
            <!-- <span>MTs</span><span>NU TBS KUDUS</span> -->
            <img src="https://www.mtsnutbs.sch.id/assets/img/logo.png" style="width: 50px;">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul style="font-size: 20px;" class="navbar-nav mx-auto mb-2 mb-lg-0 gap-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?= BASE_URL ?>">Beranda</a>
              </li>
              <li class="nav-item dropdown me-3 fw-semibold">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Tentang Kami</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Visi & Misi</a></li>
                  <li><a class="dropdown-item" href="#">Sejarah</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown me-3 fw-semibold">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Program</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Teknik</a></li>
                  <li><a class="dropdown-item" href="#">Bisnis</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown me-3 fw-semibold">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Guru</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Daftar Guru</a></li>
                  <li><a class="dropdown-item" href="#">Kegiatan</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown me-3 fw-semibold">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Siswa</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Ekstrakurikuler</a></li>
                  <li><a class="dropdown-item" href="#">Prestasi</a></li>
                </ul>
              </li>
              <li class="fw-semibold" class="nav-item me-3">
                <a class="nav-link" href="#">Berita</a>
              </li>
              <li class="nav-item dropdown me-3 fw-semibold">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Fitur</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">E-Learning</a></li>
                  <li><a class="dropdown-item" href="#">Perpustakaan</a></li>
                </ul>
              </li>
            </ul>
            <a href="<?= BASE_URL ?>/contact" class="btn btn-contact">Contact</a>
          </div>
        </div>
      </nav>
    </header>

    <?php require_once $viewFile; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
