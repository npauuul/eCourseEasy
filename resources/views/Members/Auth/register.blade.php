<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro - Cursos Online</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center vh-100">

    <div class="card shadow p-4" style="width: 100%; max-width: 450px;">
        <h4 class="text-center mb-4">Crear una cuenta</h4>
        <form method="POST" action="register">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nombre completo</label>
                <input type="text" class="form-control" id="name" name="name" required placeholder="Tu nombre">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Correo electrónico</label>
                <input type="email" class="form-control" id="email" name="email" required placeholder="correo@ejemplo.com">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" required placeholder="********">
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-success">Registrarse</button>
            </div>

            <div class="text-center mt-3">
                ¿Ya tienes una cuenta? <a href="/login">Inicia sesión</a> <br>
                <a href="/" class="text-decoration-none text-secondary">Volver</a>

            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
