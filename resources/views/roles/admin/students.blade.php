@extends('layouts.main_layout')

@section('title', 'Alumnos')

@section('content')

<!-- Button trigger modal -->
<div style="display: flex; flex: 1; justify-content: space-between; align-items: center;">
    <h5 class="card-title fw-semibold pl-0 pt-3 pb-4 pr-3">Alumnos registrados</h5>
</div>

<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#ID</th>
            <th scope="col">DNI</th>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Correo electrónico</th>
            <th scope="col">Usuario</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>76543210</td>
            <td>Nombre Nombre</td>
            <td>Apellido Apellido</td>
            <td>usuario1@maxtdes.com</td>
            <td>Alumno 1</td>
            <td>+51 987654321</td>
            <td>
                <div style="display: flex; flex-direction: row; gap: 0.5rem">
                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#ModalEditStudent">
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
            <td>76543211</td>
            <td>Nombre1 Nombre1</td>
            <td>Apellido1 Apellido1</td>
            <td>usuario2@maxtdes.com</td>
            <td>Alumno 2</td>
            <td>+51 987654322</td>
            <td>
                <div style="display: flex; flex-direction: row; gap: 0.5rem">
                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#ModalEditStudent">
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
            <td>76543212</td>
            <td>Nombre2 Nombre2</td>
            <td>Apellido2 Apellido2</td>
            <td>usuario3@maxtdes.com</td>
            <td>Alumno 3</td>
            <td>+51 987654323</td>
            <td>
                <div style="display: flex; flex-direction: row; gap: 0.5rem">
                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#ModalEditStudent">
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

<div class="modal fade" id="ModalEditStudent" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <form action="">
            <div class="modal-body">
                <h4 class="modal-title" id="ModalLabel">Modificar datos de alumno</h4> <br>
                <div class="row">
                    <div class="col-12">
                        <label for="student_dni" class="form-label">DNI</label>
                        <input type="text" class="form-control" id="txtStudentDNI" placeholder="Nombre del curso" disabled value="76543210">
                    </div>
                    <div class="col-12">
                        <label for="student_names" class="form-label">Nombres</label>
                        <input type="text" class="form-control" id="txtStudentName" placeholder="Nombres">
                    </div>
                    <div class="col-12">
                        <label for="student_lnames" class="form-label">Apellidos</label>
                        <input type="text" class="form-control" id="txtStudentLName" placeholder="Apellidos">
                    </div>
                    <div class="col-12">
                        <label for="student_email" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" id="txtEmail" placeholder="Correo electrónico">
                    </div>
                    <div class="col-12">
                        <label for="student_user" class="form-label">Usuario</label>
                        <input type="text" class="form-control" id="txtUsername" placeholder="Usuario">
                    </div>
                    <div class="col-12">
                        <label for="student_nphone" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" id="txtNumberPhone" placeholder="Teléfono">
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Modificar</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </form>
        </div>
    </div>
</div>

@endsection