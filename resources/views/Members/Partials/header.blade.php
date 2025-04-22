<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>eCourseEasy - Header</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <style>
    .navbar-brand {
      font-weight: bold;
      font-size: 1.5rem;
    }

    .navbar-nav .nav-link {
      transition: all 0.3s ease;
    }

    .navbar-nav .nav-link:hover {
      color: #0d6efd !important;
      text-decoration: underline;
    }

    .navbar-nav .nav-link.active {
      color: #0d6efd !important;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="/">
      <i class="fas fa-graduation-cap me-2"></i> eCourseEasy
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>" href="/">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'acerca.php' ? 'active' : '' ?>" href="/acerca">Acerca</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'cursos.php' ? 'active' : '' ?>" href="/cursos">Cursos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'nosotros.php' ? 'active' : '' ?>" href="/nosotros">Nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'contacto.php' ? 'active' : '' ?>" href="/contacto">Contacto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center <?= basename($_SERVER['PHP_SELF']) == 'login.php' ? 'active' : '' ?>" href="/login">
            <i class="fas fa-sign-in-alt me-1"></i> Iniciar Sesión
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center <?= basename($_SERVER['PHP_SELF']) == 'register.php' ? 'active' : '' ?>" href="/register">
            <i class="fas fa-user-plus me-1"></i> Registrarse
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
