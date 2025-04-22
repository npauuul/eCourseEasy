<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Contacto - eCourseEasy</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body style="background-color: #f8f9fa;">

  @include('Members.Partials.header')

  <div class="container py-5">
    <div class="text-center mb-5">
      <h2 class="fw-bold">Contáctanos</h2>
      <p class="text-muted">¿Tienes dudas? ¡Estamos aquí para ayudarte!</p>
    </div>

    <div class="row g-4 justify-content-center">
      <!-- Información de contacto -->
      <div class="col-md-5">
        <div class="h-100 p-4" style="background-color: white; border-radius: 12px; box-shadow: 0 5px 20px rgba(0,0,0,0.05);">
          <h5 class="mb-4">Información de Contacto</h5>
          <p><i class="bi bi-envelope" style="color: #0d6efd; margin-right: 8px;"></i><strong>Correo:</strong> soporte@eCourseEasy.com</p>
          <p><i class="bi bi-telephone" style="color: #0d6efd; margin-right: 8px;"></i><strong>Teléfono:</strong> +51 953 911 906</p>
          <p><i class="bi bi-geo-alt" style="color: #0d6efd; margin-right: 8px;"></i><strong>Dirección:</strong> Lima, Perú</p>

          <h6 class="mt-4">Síguenos en redes:</h6>
          <div class="mt-2">
            <a href="#" class="btn btn-outline-primary btn-sm me-2"><i class="bi bi-facebook me-1"></i>Facebook</a>
            <a href="#" class="btn btn-outline-info btn-sm me-2"><i class="bi bi-twitter me-1"></i>Twitter</a>
            <a href="#" class="btn btn-outline-danger btn-sm"><i class="bi bi-instagram me-1"></i>Instagram</a>
          </div>
        </div>
      </div>

      <!-- Formulario -->
      <div class="col-md-6">
        <div class="h-100 p-4" style="background-color: white; border-radius: 12px; box-shadow: 0 5px 20px rgba(0,0,0,0.05);">
          <h5 class="mb-4">Envíanos un mensaje</h5>
          <form>
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="nombre" placeholder="Tu nombre">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Correo electrónico</label>
              <input type="email" class="form-control" id="email" placeholder="nombre@ejemplo.com">
            </div>
            <div class="mb-3">
              <label for="mensaje" class="form-label">Mensaje</label>
              <textarea class="form-control" id="mensaje" rows="4" placeholder="Escribe tu mensaje aquí..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100">Enviar mensaje</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  @include('Members.Partials.footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
