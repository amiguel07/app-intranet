@extends('layouts.main_layout')

@section('title', 'Roles')

@section('content')

<!-- Button trigger modal -->
<div style="display: flex; flex: 1; justify-content: space-between; align-items: center;">
    <h5 class="card-title fw-semibold pl-0 pt-3 pb-4 pr-3">Roles del sistema</h5>
    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ModalAddRole" style="font-size: 14px; heigth: auto;">
        <i class="ti ti-layout-grid-add"></i> Agregar rol
    </button>
</div>

<div class="table-responsive">
<table class="table">
    <thead>
    <tr>
        <th scope="col">#ID</th>
        <th scope="col">Rol</th>
        <th scope="col">Descripción</th>
        <th scope="col">Permisos</th>
        <th scope="col">Acciones</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Administrador</td>
        <td>Acceso a las funciones principales del sistema</td>
        <td> [Lista de Permisos] </td>
        <td>
            <div style="display: flex; flex-direction: row; gap: 0.5rem">
                <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#ModalEditRole">
                    <i class="ti ti-edit-circle"></i>
                </button>
                <button type="button" class="btn btn-outline-danger">
                    <i class="ti ti-trash"></i>
                </button>
            </div>
        </td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Docente</td>
        <td>Acceso a la creación de cursos, publicación de material y tareas</td>
        <td> [Lista de Permisos] </td>
        <td>
            <div style="display: flex; flex-direction: row; gap: 0.5rem">
                <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#ModalEditRole">
                    <i class="ti ti-edit-circle"></i>
                </button>
                <button type="button" class="btn btn-outline-danger">
                    <i class="ti ti-trash"></i>
                </button>
            </div>
        </td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td>Alumno</td>
        <td>Acceso a los cursos, responder a tareas</td>
        <td> [Lista de Permisos] </td>
        <td>
            <div style="display: flex; flex-direction: row; gap: 0.5rem">
                <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#ModalEditRole">
                    <i class="ti ti-edit-circle"></i>
                </button>
                <button type="button" class="btn btn-outline-danger">
                    <i class="ti ti-trash"></i>
                </button>
            </div>
        </td>
    </tr>
    </tbody>
</table>
</div>

@endsection

@section('modals')

<!-- Modal for create -->

<div class="modal fade" id="ModalAddRole" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <form action="">
            <div class="modal-body">
                <h4 class="modal-title" id="ModalLabel">Agregar rol</h4> <br>
                <div class="row">
                    <div class="col-12">
                        <label for="rol_name" class="form-label">Nombre del rol</label>
                        <input type="text" class="form-control" id="txtRolName" placeholder="Nombre del rol">
                    </div> 
                    <div class="col-12">
                        <label for="rol_description" class="form-label">Descripción</label>
                        <textarea type="text" class="form-control mb-3" id="txtRolDescripcion" placeholder="Descripción" rows="6" style="resize: none;"></textarea>
                    </div>

                    <div class="col-12">
                        <label for="selectedOptions" class="form-label">Permisos</label>
                            <select id="selectedOptions" class="form-select" multiple="multiple">
                                <option value="opcion1">Opción 1</option>
                                <option value="opcion2">Opción 2</option>
                                <option value="opcion3">Opción 3</option>
                                <option value="opcion4">Opción 4</option>
                                <option value="opcion5">Opción 5</option>
                            </select>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Agregar</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </form>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('#selectedOptions').select2();
    });
</script>
@endsection