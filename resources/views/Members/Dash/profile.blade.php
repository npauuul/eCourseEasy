<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Perfil - eCourseEasy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
</head>
<body class="bg-light">
    
    @include('Members.Dash.header')

    <div class="container p-5">
        <div class="row">
            <div class="col-lg-4">
                <!-- Tarjeta de Perfil -->
                <div class="card mb-4 shadow-sm">
                    <div class="card-body text-center">
                        <h4 class="card-title mb-1">{{ auth()->user()->name }}</h4>
                        <p class="text-muted mb-3">Estudiante</p>
                        
                        <div class="list-group list-group-flush">
                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Miembro desde</span>
                                <span class="text-muted">{{ auth()->user()->created_at->format('d/m/Y') }}</span>
                            </div>
                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Cursos completados</span>
                                <span class="badge bg-success rounded-pill">0</span>
                            </div>
                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Cursos activos</span>
                                <span class="badge bg-primary rounded-pill">0</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Información de Contacto -->
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-white">
                        <h5 class="mb-0"><i class="bi bi-envelope me-2"></i>Contacto</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2">
                                <i class="bi bi-envelope-fill text-primary me-2"></i>
                                {{ auth()->user()->email }}
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-telephone-fill text-primary me-2"></i>
                                +51 987 654 321
                            </li>
                            <li>
                                <i class="bi bi-geo-alt-fill text-primary me-2"></i>
                                Lima, Perú
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-8">
                <!-- Formulario de Edición -->
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-white">
                        <h5 class="mb-0"><i class="bi bi-pencil-square me-2"></i>Editar Perfil</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="firstName" class="form-label">Nombres Completos</label>
                                    <input type="text" class="form-control" id="firstName" value="Juan">
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo electrónico</label>
                                <input type="email" class="form-control" id="email" value="{{ auth()->user()->email }}">
                            </div>
                            
                            <div class="mb-3">
                                <label for="phone" class="form-label">Teléfono</label>
                                <input type="tel" class="form-control" id="phone" value="+51 987 654 321">
                            </div>
                            
                            <div class="mb-3">
                                <label for="address" class="form-label">Dirección</label>
                                <input type="text" class="form-control" id="address" value="Av. Siempre Viva 123">
                            </div>
                            
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="city" class="form-label">Ciudad</label>
                                    <input type="text" class="form-control" id="city" value="Lima">
                                </div>
                                <div class="col-md-6">
                                    <label for="country" class="form-label">País</label>
                                    <select class="form-select" id="country">
                                        <option selected>Perú</option>
                                        <option>Argentina</option>
                                        <option>Chile</option>
                                        <option>Colombia</option>
                                        <option>México</option>
                                    </select>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-save me-1"></i> Guardar cambios
                            </button>
                        </form>
                    </div>
                </div>
                
                <!-- Cambio de Contraseña -->
                <div class="card shadow-sm">
                    <div class="card-header bg-white">
                        <h5 class="mb-0"><i class="bi bi-shield-lock me-2"></i>Seguridad</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="currentPassword" class="form-label">Contraseña actual</label>
                                <input type="password" class="form-control" id="currentPassword">
                            </div>
                            
                            <div class="mb-3">
                                <label for="newPassword" class="form-label">Nueva contraseña</label>
                                <input type="password" class="form-control" id="newPassword">
                                <div class="form-text">Mínimo 8 caracteres, incluyendo números y símbolos</div>
                            </div>
                            
                            <button type="submit" class="btn btn-warning">
                                <i class="bi bi-key me-1"></i> Cambiar contraseña
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>