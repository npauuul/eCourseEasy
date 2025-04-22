<div class="p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <span class="h3 fw-bold text-uppercase">Gestión de Estudiantes</span>
        <button class="btn btn-primary" wire:click="createStudent">
            <i class="bi bi-plus-lg"></i> Nuevo Estudiante
        </button>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show mb-4">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Teléfono</th>
                            <th>Ubicación</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($allStudents as $student)
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->phone ?? 'N/A' }}</td>
                            <td>
                                @if($student->city && $student->country)
                                    {{ $student->city }}, {{ $student->country }}
                                @else
                                    N/A
                                @endif
                            </td>
                            <td>
                                <div class="d-flex gap-2">
                                    <button class="btn btn-sm btn-warning" wire:click="editStudent({{ $student->id }})">
                                        <i class="bi bi-pencil text-white"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger" wire:confirm="¿Estás seguro de eliminar al estudiante {{ $student->name }}?" wire:click="deleteStudent({{ $student->id }})">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>        
        </div>
    </div>

    <!-- Modal de Edición -->
    @if($showModal)
        <div class="modal fade show" tabindex="-1" style="display: block; background-color: rgba(0,0,0,0.5);">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h1 class="modal-title fs-5">EDITAR ESTUDIANTE</h1>
                    </div>
                    <div class="modal-body">
                        <form wire:submit.prevent="updateStudent">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="name">Nombre Completo</label>
                                        <input type="text" class="form-control" id="name" wire:model="name">
                                        @error('name') <span class="text-danger small">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="email">Correo Electrónico</label>
                                        <input type="email" class="form-control" id="email" wire:model="email">
                                        @error('email') <span class="text-danger small">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="phone">Teléfono</label>
                                        <input type="text" class="form-control" id="phone" wire:model="phone">
                                        @error('phone') <span class="text-danger small">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="address">Dirección</label>
                                        <input type="text" class="form-control" id="address" wire:model="address">
                                        @error('address') <span class="text-danger small">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="city">Ciudad</label>
                                        <input type="text" class="form-control" id="city" wire:model="city">
                                        @error('city') <span class="text-danger small">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="country">País</label>
                                        <input type="text" class="form-control" id="country" wire:model="country">
                                        @error('country') <span class="text-danger small">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="password">Nueva Contraseña (opcional)</label>
                                        <input type="password" class="form-control" id="password" wire:model="password">
                                        @error('password') <span class="text-danger small">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="password_confirmation">Confirmar Contraseña</label>
                                        <input type="password" class="form-control" id="password_confirmation" wire:model="password_confirmation">
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" wire:click="closeModal">Cancelar</button>
                                <button type="submit" class="btn btn-primary">
                                    <span wire:loading.remove wire:target="updateStudent">Guardar Cambios</span>
                                    <span wire:loading wire:target="updateStudent">
                                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                        Guardando...
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <!-- Modal de Creación -->
    @if($showModalCreate)
        <div class="modal fade show" tabindex="-1" style="display: block; background-color: rgba(0,0,0,0.5);">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h1 class="modal-title fs-5">NUEVO ESTUDIANTE</h1>
                    </div>
                    <div class="modal-body">
                        <form wire:submit.prevent="storeStudent">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="name">Nombre Completo</label>
                                        <input type="text" class="form-control" id="name" wire:model="name">
                                        @error('name') <span class="text-danger small">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="email">Correo Electrónico</label>
                                        <input type="email" class="form-control" id="email" wire:model="email">
                                        @error('email') <span class="text-danger small">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="phone">Teléfono</label>
                                        <input type="text" class="form-control" id="phone" wire:model="phone">
                                        @error('phone') <span class="text-danger small">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="address">Dirección</label>
                                        <input type="text" class="form-control" id="address" wire:model="address">
                                        @error('address') <span class="text-danger small">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="city">Ciudad</label>
                                        <input type="text" class="form-control" id="city" wire:model="city">
                                        @error('city') <span class="text-danger small">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="country">País</label>
                                        <input type="text" class="form-control" id="country" wire:model="country">
                                        @error('country') <span class="text-danger small">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="password">Contraseña</label>
                                        <input type="password" class="form-control" id="password" wire:model="password">
                                        @error('password') <span class="text-danger small">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="password_confirmation">Confirmar Contraseña</label>
                                        <input type="password" class="form-control" id="password_confirmation" wire:model="password_confirmation">
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" wire:click="closeModalCreate">Cancelar</button>
                                <button type="submit" class="btn btn-primary">
                                    <span wire:loading.remove wire:target="storeStudent">Crear Estudiante</span>
                                    <span wire:loading wire:target="storeStudent">
                                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                        Creando...
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>

@push('styles')
<style>
    .modal {
        z-index: 1050;
    }
    .modal-backdrop {
        z-index: 1040;
    }
    .form-check-input:checked {
        background-color: #0d6efd;
        border-color: #0d6efd;
    }
</style>
@endpush