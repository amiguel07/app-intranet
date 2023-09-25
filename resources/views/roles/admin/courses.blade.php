@extends('layouts.main_layout')

@section('title', 'Docentes')

@section('content')

<!-- Button trigger modal -->
<div style="display: flex; flex: 1; justify-content: space-between; align-items: center;">
    <h5 class="card-title fw-semibold pl-0 pt-3 pb-4 pr-3">Cursos registrados</h5>
    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ModalAddCourse" style="font-size: 14px; heigth: auto;">
        <i class="ti ti-layout-grid-add"></i> Agregar curso
    </button>
</div>

<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#ID</th>
            <th scope="col">Nombre del curso</th>
            <th scope="col">Descripción</th>
            <th scope="col">Categoría</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Curso 1</td>
            <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur rem expedita numquam vitae doloremque dignissimos 
                consectetur impedit ducimus laudantium delectus, quae aliquid! Blanditiis officiis esse alias praesentium vitae perferendis totam.</td>
            <td>Categoría 1</td>
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
            <th scope="row">1</th>
            <td>Curso 2</td>
            <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur rem expedita numquam vitae doloremque dignissimos 
                consectetur impedit ducimus laudantium delectus, quae aliquid! Blanditiis officiis esse alias praesentium vitae perferendis totam.</td>
            <td>Categoría 2</td>
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
            <th scope="row">1</th>
            <td>Curso 3</td>
            <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur rem expedita numquam vitae doloremque dignissimos 
                consectetur impedit ducimus laudantium delectus, quae aliquid! Blanditiis officiis esse alias praesentium vitae perferendis totam.</td>
            <td>Categoría 3</td>
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

<div class="modal fade" id="ModalAddCourse" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <form action="">
            <div class="modal-body">
                <h4 class="modal-title" id="ModalLabel">Agregar curso</h4> <br>
                <div class="row">
                    <div class="col-12">
                        <label for="course_name" class="form-label">Nombre del curso</label>
                        <input type="text" class="form-control" id="txtRolName" placeholder="Nombre del curso">
                    </div> 
                    <div class="col-12">
                        <label for="course_description" class="form-label">Descripción</label>
                        <textarea type="text" class="form-control mb-3" id="txtCourseDescripcion" placeholder="Descripción" rows="6" style="resize: none;"></textarea>
                    </div>

                    <div class="col-12">
                        <label for="selectedOptions" class="form-label">Categoría</label>
                            <select id="selectedOptions" class="form-select">
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

