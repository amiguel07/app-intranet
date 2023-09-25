<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/home', function () {
    return view('roles.student.courses');
});

Route::get('/roles_admin', function(){
    return view('roles.admin.roles');
})->name('roles_admin');

Route::get('/cursos_admin', function(){
    return view('roles.admin.courses');
})->name('cursos_admin');

Route::get('/alumnos_admin', function(){
    return view('roles.admin.students');
})->name('alumnos_admin');

Route::get('/docentes_admin', function(){
    return view('roles.admin.teachers');
})->name('docentes_admin');

Auth::routes();

Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
