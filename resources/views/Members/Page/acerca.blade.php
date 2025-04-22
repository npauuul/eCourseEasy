<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Acerca de eCourseEasy - Plataforma de Cursos Online</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body style="background-color: #f8f9fa;">

  @include('Members.Partials.header')

  <main class="container my-5">
    <div class="text-center mb-5">
      <h1 class="fw-bold">Acerca de <span class="text-primary">eCourseEasy</span></h1>
      <p class="text-muted">Impulsando tu aprendizaje con tecnología y pasión</p>
    </div>

    <div class="row justify-content-center">
      <div class="col-md-10" style="background-color: #ffffff; border-radius: 16px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); padding: 2rem;">
        
        <div class="mb-4">
          <i class="bi bi-mortarboard" style="font-size: 2rem; color: #0d6efd;"></i>
          <p class="mt-2" style="font-size: 1.2rem;">
            En <strong>eCourseEasy</strong>, somos una plataforma dedicada a la venta de cursos online, especializada en programación y tecnologías actuales.
            Nuestro objetivo es brindarte una experiencia de aprendizaje <strong>flexible, accesible y de alta calidad</strong>.
          </p>
        </div>

        <div class="mb-4">
          <i class="bi bi-calendar2-check" style="font-size: 2rem; color: #0d6efd;"></i>
          <p style="font-size: 1rem;">
            Fundada en <strong>2025</strong>, nacimos con la visión de empoderar a estudiantes y profesionales con habilidades prácticas en desarrollo web, ciencia de datos,
            inteligencia artificial y más. Contamos con un equipo de instructores apasionados y contenido actualizado constantemente.
          </p>
        </div>

        <div>
          <i class="bi bi-lightbulb" style="font-size: 2rem; color: #0d6efd;"></i>
          <p style="font-size: 1rem;">
            Apostamos por la <strong>innovación educativa</strong> utilizando herramientas interactivas, mentorías y evaluaciones automatizadas que brindan un entorno de aprendizaje completo y dinámico.
          </p>
        </div>

      </div>
    </div>
  </main>

  @include('Members.Partials.footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
