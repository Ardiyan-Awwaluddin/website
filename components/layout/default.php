<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website MA NU TBS KUDUS | <?= $data['title'] ?? '' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <style>
      .nav-link.active {
        color: #347433 !important;
        font-weight: bold;
      }
      .btn-contact {
        background-color: #347433;
        color: white;
        border-radius: 30px;
        padding: 8px 24px;
        font-weight: 500;
      }
    </style>
  </head>
  <body style="padding-top: 80px;">
    <header class="mb-5">
      <nav class="navbar navbar-expand-lg bg-light shadow-sm fixed-top">
        <div class="container">
            <img src="https://ma.madrasahtbs.sch.id/wp-content/uploads/2021/08/cropped-399f5eca1281ee959370bfb1449e7d6eaeb03e92_s2_n2.png" style="width: 50px;">
          </a>
            <ul style="font-size: 20px;" class="navbar-nav mx-auto mb-2 mb-lg-0 gap-3">
              <li class="nav-item me-3 fw-semibold">
                <a class="nav-link"href="#Beranda">Beranda</a>
              </li>
              <li class="nav-item me-3 fw-semibold">
                <a class="nav-link" href="#profil">Profil</a>
              </li>
              <li class="nav-item dropdown me-3 fw-semibold">
                <a class="nav-link" href="#ekstrakulikuler">Ekstrakurikuler</a>
                
              </li>
              <li class="nav-item me-3 fw-semibold">
                <a class="nav-link" href="#Berita">Berita</a>
              </li>
              <li class="fw-semibold" class="nav-item me-3">
                <a class="nav-link" href="#Galeri">Galeri</a>
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
