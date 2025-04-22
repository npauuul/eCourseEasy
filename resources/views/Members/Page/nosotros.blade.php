<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sobre Nosotros - eCourseEasy</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body style="font-family: 'Segoe UI', sans-serif; background-color: #f8f9fa;">

  @include('Members.Partials.header')

  <div style="padding: 70px 0;">
    <div class="container">
      <div class="text-center mb-5">
        <h2 style="font-weight: 700; font-size: 2.5rem;">Sobre Nosotros</h2>
        <p class="lead text-muted">Conoce más sobre eCourseEasy y nuestra misión en el mundo de la educación en línea.</p>
      </div>

      <div class="row mb-5">
        <div class="col-md-6">
          <h4 style="font-size: 1.3rem; font-weight: 600; margin-top: 1.5rem;"><i class="bi bi-clock-history me-2"></i>Nuestra Historia</h4>
          <p>
            eCourseEasy nació con la visión de democratizar la educación tecnológica. Ofrecemos cursos diseñados por expertos para todos los niveles, promoviendo el aprendizaje flexible y accesible.
          </p>

          <h4 style="font-size: 1.3rem; font-weight: 600; margin-top: 1.5rem;"><i class="bi bi-bullseye me-2"></i>Nuestra Misión</h4>
          <p>
            Capacitar a nuestros estudiantes con habilidades tecnológicas actuales, orientadas al mercado laboral, mediante una plataforma eficiente y amigable.
          </p>

          <h4 style="font-size: 1.3rem; font-weight: 600; margin-top: 1.5rem;"><i class="bi bi-heart-fill me-2"></i>Nuestros Valores</h4>
          <ul>
            <li style="color: #0d6efd;">Accesibilidad y flexibilidad</li>
            <li style="color: #0d6efd;">Calidad en los contenidos</li>
            <li style="color: #0d6efd;">Innovación constante</li>
            <li style="color: #0d6efd;">Compromiso con el aprendizaje</li>
          </ul>
        </div>

        <div class="col-md-6">
          <div class="row g-4">
            @php
              $equipo = [
                ['nombre' => 'Edison Paul Janampa Quispe', 'rol' => 'Diseñador Web y Frontend Developer. Encargado del diseño visual y experiencia de usuario.'],
                ['nombre' => 'Caleb Elias Marcilla Diaz', 'rol' => 'Backend Developer. Especialista en bases de datos, seguridad y arquitectura del sistema.'],
                ['nombre' => 'Jhoniers Darwin Canchari Cuadros', 'rol' => 'Gestor de Contenidos. Encargado de elaborar y mantener actualizados los cursos y materiales.']
              ];
            @endphp

            @foreach ($equipo as $miembro)
            <div class="col-md-12">
             <div class="card shadow-sm miembro-card" 
                style="border: none; border-radius: 16px; background-color: #fff; transition: transform 0.3s ease, box-shadow 0.3s ease;">
                 <div class="row g-0 align-items-center">
                 <div class="col-3 text-center">
                    <i class="bi bi-person-circle" style="font-size: 4rem; color: #8a9597;"></i>
                 </div>
              <div class="col-9">
                 <div class="card-body">
                   <h5 style="font-weight: 600;">{{ $miembro['nombre'] }}</h5>
                    <p style="font-size: 0.95rem; color: #6c757d;">{{ $miembro['rol'] }}</p>
                 </div>
                </div>
               </div>
              </div>
            </div>

            @endforeach

          </div>
        </div>
      </div>
    </div>
  </div>

  @include('Members.Partials.footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script>
  document.querySelectorAll('.miembro-card').forEach(card => {
    card.addEventListener('mouseenter', () => {
      card.style.transform = 'translateY(-6px)';
      card.style.boxShadow = '0 10px 20px rgba(0,0,0,0.1)';
    });
    card.addEventListener('mouseleave', () => {
      card.style.transform = 'translateY(0)';
      card.style.boxShadow = '0 4px 6px rgba(0,0,0,0.05)';
    });
  });
</script>

</body>
</html>
