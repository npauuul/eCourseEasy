

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cursos - eCourseEasy</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .curso-card {
      transition: background-color 0.3s ease, color 0.3s ease, transform 0.3s ease;
    }

    .curso-card:hover {
      background-color: #f8f9fa;
      transform: translateY(-5px);
    }

    .curso-card:hover .card-title,
    .curso-card:hover .card-text {
      color: #000;
    }
  </style>
</head>
@include('Members.Partials.header')
<body>

  <div class="container mt-5 mb-5">
    <div class="text-center mb-4">
      <h1 class="fw-bold">Nuestros Cursos</h1>
      <p class="lead">Explora nuestra variedad de cursos diseñados para todos los niveles.</p>
    </div>

    <div class="row g-4">
        @foreach ($courses as $course)
            
      <!-- Curso Template -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm curso-card">
          <div class="card-body">
          <img src="{{ $course->image }}" class="card-img-top img-fluid w-25 my-4 mx-auto d-block" alt="{{ $course->name }}">
          <h5 class="card-title">{{ $course->name }}</h5>
            <p class="card-text">{{ $course->description }}</p>

            @php
                $telefono = '51953311306'; 
                $mensaje = urlencode("Hola, quiero inscribirme al curso de " . $course->name);
                $whatsappUrl = "https://wa.me/{$telefono}?text={$mensaje}";
            @endphp

            <a href="{{ $whatsappUrl }}" target="_blank" class="btn btn-success">Inscribirse</a>
          </div>
        </div>
      </div>
        @endforeach

    </div>
  </div>
  @include('Members.Partials.footer')
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

