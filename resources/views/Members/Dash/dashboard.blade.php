<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Panel - eCourseEasy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
</head>
<body class="bg-light">
    @include('Members.Dash.header')
    <!-- Main Content -->
    <div class="container-fluid mt-4">
        <div class="row">
            <main class="col-12 px-md-4 py-4">
                <!-- Stats Cards -->
                <div class="row mb-4">
                    <div class="col-md-3 mb-3">
                        <div class="card bg-primary text-white h-100">
                            <div class="card-body">
                                <h5 class="card-title">Cursos Activos</h5>
                                <h2 class="card-text">0</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card bg-success text-white h-100">
                            <div class="card-body">
                                <h5 class="card-title">Cursos Completados</h5>
                                <h2 class="card-text">0</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card bg-info text-white h-100">
                            <div class="card-body">
                                <h5 class="card-title">Horas de estudio</h5>
                                <h2 class="card-text">0</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card bg-warning text-white h-100">
                            <div class="card-body">
                                <h5 class="card-title">Docentes</h5>
                                <h2 class="card-text">2</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Current Courses -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="mb-0">Mis Cursos</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <div class="card h-100 shadow-sm">
                                    <div class="card-body">
                                        <h5 class="card-title">Introducción a Laravel</h5>
                                        <p class="card-text text-muted">Avance: 65%</p>
                                        <div class="progress mb-3">
                                            <div class="progress-bar" role="progressbar" style="width: 65%"></div>
                                        </div>
                                        <a href="#" class="btn btn-outline-primary btn-sm">Continuar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Activar tooltips
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        });
    </script>
</body>
</html>