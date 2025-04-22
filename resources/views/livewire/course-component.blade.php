<div class="p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <span class="h3 fw-bold text-uppercase">Gestión de Cursos</span>
        <button class="btn btn-primary" wire:click="createCourse">
            <i class="bi bi-plus-lg"></i> Nuevo Curso
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
                            <th>Imagen</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Precio</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($allCourses as $cour)
                        <tr>
                            <td>{{ $cour->id }}</td>
                            <td>
                                @if($cour->image)
                                <img src="{{ $cour->image }}" alt="{{ $cour->name }}" 
                                    style="width: 60px; height: 40px; object-fit: cover;" 
                                    onerror="this.src='https://via.placeholder.com/60x40?text=Imagen'">
                                @else
                                <img src="https://via.placeholder.com/60x40?text=Sin+Imagen" 
                                    style="width: 60px; height: 40px; object-fit: cover;">
                                @endif
                            </td>
                            <td>{{ $cour->name }}</td>
                            <td>{{ Str::limit($cour->description, 50) }}</td>
                            <td>S/{{ number_format($cour->price, 2) }}</td>
                            <td>
                                <div class="d-flex gap-2">
                                    <button class="btn btn-sm btn-warning" wire:click="editCourse({{ $cour->id }})">
                                        <i class="bi bi-pencil text-white"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger" wire:confirm="¿Estás seguro de eliminar el curso {{ $cour->name }}?" wire:click="deleteCourse({{ $cour->id }})">
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
                        <h1 class="modal-title fs-5">EDITAR CURSO</h1>
                    </div>
                    <div class="modal-body">
                        <form wire:submit.prevent="updateCourse">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="name">Nombre del Curso</label>
                                        <input type="text" class="form-control" id="name" wire:model="name">
                                        @error('name') <span class="text-danger small">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="category_id">Categoría (ID)</label>
                                        <input type="number" class="form-control" id="category_id" wire:model="category_id">
                                        @error('category_id') <span class="text-danger small">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="price">Precio</label>
                                        <input type="number" step="0.01" class="form-control" id="price" wire:model="price">
                                        @error('price') <span class="text-danger small">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="image">Ruta o URL de la Imagen</label>
                                        <input type="text" class="form-control" id="image" wire:model="image" placeholder="Ej: /images/curso.jpg o https://ejemplo.com/imagen.jpg">
                                        @error('image') 
                                            <span class="text-danger small">{{ $message }}</span>
                                        @enderror
                                        @if($image)
                                            <div class="mt-2">
                                                <small>Vista previa:</small>
                                                <img src="{{ $image }}" alt="Vista previa" class="img-thumbnail mt-1" style="max-height: 100px;" 
                                                    onerror="this.style.display='none'">
                                            </div>
                                        @endif
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="stock">Stock</label>
                                        <input type="number" class="form-control" id="stock" wire:model="stock">
                                        @error('stock') <span class="text-danger small">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label for="description">Descripción</label>
                                <textarea class="form-control" id="description" rows="4" wire:model="description"></textarea>
                                @error('description') <span class="text-danger small">{{ $message }}</span> @enderror
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" wire:click="closeModal">Cancelar</button>
                                <button type="submit" class="btn btn-primary">
                                    <span wire:loading.remove wire:target="updateCourse">Guardar Cambios</span>
                                    <span wire:loading wire:target="updateCourse">
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
                        <h1 class="modal-title fs-5">NUEVO CURSO</h1>
                    </div>
                    <div class="modal-body">
                        <form wire:submit.prevent="storeCourse">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="name">Nombre del Curso</label>
                                        <input type="text" class="form-control" id="name" wire:model="name">
                                        @error('name') <span class="text-danger small">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="category_id">Categoría (ID)</label>
                                        <input type="number" class="form-control" id="category_id" wire:model="category_id">
                                        @error('category_id') <span class="text-danger small">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="price">Precio</label>
                                        <input type="number" step="0.01" class="form-control" id="price" wire:model="price">
                                        @error('price') <span class="text-danger small">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="image">Ruta o URL de la Imagen</label>
                                        <input type="text" class="form-control" id="image" wire:model="image" placeholder="Ej: /images/curso.jpg o https://ejemplo.com/imagen.jpg">
                                        @error('image') 
                                            <span class="text-danger small">{{ $message }}</span>
                                        @enderror
                                        @if($image)
                                            <div class="mt-2">
                                                <small>Vista previa:</small>
                                                <img src="{{ $image }}" alt="Vista previa" class="img-thumbnail mt-1" style="max-height: 100px;" 
                                                    onerror="this.style.display='none'">
                                            </div>
                                        @endif
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="stock">Stock</label>
                                        <input type="number" class="form-control" id="stock" wire:model="stock">
                                        @error('stock') <span class="text-danger small">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label for="description">Descripción</label>
                                <textarea class="form-control" id="description" rows="4" wire:model="description"></textarea>
                                @error('description') <span class="text-danger small">{{ $message }}</span> @enderror
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" wire:click="closeModalCreate">Cancelar</button>
                                <button type="submit" class="btn btn-primary">
                                    <span wire:loading.remove wire:target="storeCourse">Crear Curso</span>
                                    <span wire:loading wire:target="storeCourse">
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