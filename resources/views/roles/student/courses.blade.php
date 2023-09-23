@extends('layouts.main_layout')

@section('title', 'Mis Cursos')

@section('content')
<h5 class="card-title fw-semibold mb-4">Mis Cursos</h5>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('/img/Curso1.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Curso 1</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, illum. Voluptatum cumque consectetur possimus.</p>
                        <a href="#" class="btn btn-warning">>Ir al curso</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('/img/Curso2.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Curso 2</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, illum. Voluptatum cumque consectetur possimus.</p>
                        <a href="#" class="btn btn-warning">>Ir al curso</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('/img/Curso3.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Curso 3</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, illum. Voluptatum cumque consectetur possimus.</p>
                        <a href="#" class="btn btn-warning">>Ir al curso</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection