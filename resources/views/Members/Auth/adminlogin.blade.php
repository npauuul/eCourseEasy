<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark d-flex align-items-center justify-content-center vh-100">

    <div class="card shadow p-5" style="width: 100%; max-width: 400px;">
        <h1 class="text-center fw-bold h3 text-uppercase pb-3 text-dark">Administracion</h1>
        <form method="POST" action="admin-login">
            @csrf
            <div class="mb-3">
                <label class="form-check-label" for="email">Correo</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="paul@example.com">
            </div>
            <div class="mb-3">
                <label class="form-check-label" for="password">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-dark">Login</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
