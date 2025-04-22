<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Footer con Bootstrap</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <style>
    footer a:hover {
      text-decoration: underline;
    }

    .footer-link {
      transition: color 0.3s ease;
    }

    .footer-link:hover {
      color: #0d6efd;
    }
  </style>
</head>
<body>
  <footer class="bg-dark text-white pt-5 pb-3 mt-auto">
    <div class="container">
      <div class="row text-center text-md-start">
        <!-- Columna 1 -->
        <div class="col-md-4 mb-4">
          <h5 class="fw-bold">eCourseEasy</h5>
          <p class="small">
            Plataforma de venta de cursos online especializados en programación, diseñada para aprender a tu propio ritmo.
          </p>
        </div>

        <div class="col-md-4 mb-4">
          <h5 class="fw-bold">Enlaces</h5>
          <ul class="list-unstyled">
            <li><a href="/" class="text-white footer-link">Inicio</a></li>
            <li><a href="/acerca" class="text-white footer-link">Acerca</a></li>
            <li><a href="/cursos" class="text-white footer-link">Cursos</a></li>
            <li><a href="/contacto" class="text-white footer-link">Contacto</a></li>
            <li><a href="/nosotros" class="text-white footer-link">Nosotros</a></li>
          </ul>
        </div>

        <div class="col-md-4 mb-4">
          <h5 class="fw-bold">Contacto</h5>
          <p class="small mb-2">Síguenos o escríbenos:</p>
          <div>
            <a href="https://www.facebook.com" class="text-white me-3" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.twitter.com" class="text-white me-3" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com" class="text-white me-3" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="mailto:contacto@eCourseEasy.com" class="text-white" target="_blank"><i class="fas fa-envelope"></i></a>
          </div>
        </div>
      </div>

      <hr class="bg-secondary">
      <div class="text-center">
        <p class="mb-0 small">&copy; 2025 <strong>eCourseEasy</strong>. Todos los derechos reservados.</p>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
