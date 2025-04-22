<div class="p-4">
    <div class="row">
        <!-- Resumen de Ventas -->
        <div class="col-md-4 mb-4">
            <div class="card border-primary">
                <div class="card-body">
                    <h5 class="card-title text-primary">
                        <i class="bi bi-currency-dollar"></i> Ventas Hoy
                    </h5>
                    <h2 class="fw-bold">S/{{ $saleCount }}</h2>
                    <p class="text-success"><i class="bi bi-arrow-up"></i> 12% vs ayer</p>
                </div>
            </div>
        </div>

        <!-- Cursos Activos -->
        <div class="col-md-4 mb-4">
            <div class="card border-success">
                <div class="card-body">
                    <h5 class="card-title text-success">
                        <i class="bi bi-book"></i> Cursos Activos
                    </h5>
                    <h2 class="fw-bold">{{ $courseCount }}</h2>
                    <p class="text-muted">5 nuevos este mes</p>
                </div>
            </div>
        </div>

        <!-- Estudiantes Registrados -->
        <div class="col-md-4 mb-4">
            <div class="card border-info">
                <div class="card-body">
                    <h5 class="card-title text-info">
                        <i class="bi bi-people-fill"></i> Estudiantes
                    </h5>
                    <h2 class="fw-bold">{{ $studentCount }}</h2>
                    <p class="text-success"><i class="bi bi-arrow-up"></i> 8% este mes</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Últimas Ventas -->
    <div class="card shadow-sm">
        <div class="card-header bg-white">
            <h5 class="mb-0"><i class="bi bi-clock-history me-2"></i>Últimos estudiantes</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombres</th>
                            <th>Ciudad</th>
                            <th>Phone</th>
                            <th>Correo</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $stu)
                            <tr>
                                <td>#{{ $stu->id }}</td>
                                <td>{{ $stu->name }}</td>
                                <td>{{ $stu->city }}</td>
                                <td>{{ $stu->phone }}</td>
                                <td>{{ $stu->email }}</td>
                                <td><span class="badge bg-success">Completado</span></td>
                            </tr>
                        @endforeach
                        <!-- Más filas... -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>