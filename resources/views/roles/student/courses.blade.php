@extends('layouts.main_layout')

@section('title', 'Mis Cursos')

@section('content')
<h5 class="card-title fw-semibold mb-4">Mis Cursos</h5>

<div class="container-fluid">
<div class="card">
    <div class="card-body">
        <div class="row">
    <div class="col-md-6" style="padding-top: 1em; padding-bottom: 1em;">
        <div class="card text-center">
            <a href="#" class="img-container">
                <img src="{{ asset('/img/Curso1.jpg') }}" class="card-img-top" alt="...">
                <h6 class="card-title img-title">Curso de fotografía y diseño</h6>
            </a>
        </div>
    </div>

    <div class="col-md-6" style="padding-top: 1em; padding-bottom: 1em;">
        <div class="card text-center">
            <a href="#" class="img-container">
                <img src="{{ asset('/img/Curso2.jpg') }}" class="card-img-top" alt="...">
                <h6 class="card-title img-title">Curso de librería</h6>
            </a>
        </div>
    </div>

    <div class="col-md-6" style="padding-top: 1em; padding-bottom: 1em;">
        <div class="card text-center">
            <a href="#" class="img-container">
                <img src="{{ asset('/img/Curso3.jpg') }}" class="card-img-top" alt="...">
                <h6 class="card-title img-title">Curso de imprenta</h6>
            </a>
        </div>
    </div>
</div>
</div>
</div>
</div>
@endsection