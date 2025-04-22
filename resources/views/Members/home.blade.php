<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Home - Cursos Online</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    @include('Members.Partials.header')

    <div class="container py-5">
        <h2 class="text-center mb-4">Nuestros Cursos</h2>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 justify-content-center">

        @foreach ($courses as $course)
            <div class="col">
                <div class="card h-100">
                <div class="container-fluid text-center">
                    <img src="{{ $course->image }}" class="card-img-top img-fluid w-25 my-4" alt="{{ $course->name }}">
                </div>
                <div class="card-body">
                        <h5 class="card-title">{{ $course->name }}</h5>
                        <p class="card-text">{{ $course->description }}</p>
                        <a href="#" class="btn btn-primary">Inscribirse</a>
                    </div>
                </div>
            </div>
        @endforeach

        </div>
    </div>
    @include('Members.Partials.footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
