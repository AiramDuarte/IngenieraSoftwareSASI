<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//Metodos de Curso
Route::get('cursos', 'CursoController@listarCursos');
Route::get('cursos/{curso}', 'CursoController@obtenerCurso');
Route::post('cursos', 'CursoController@agregarCurso');
Route::put('cursos/{curso}', 'CursoController@actualizarDatosCurso');
Route::get('cursos/{curso}/idiomas', 'CursoController@obtenerIdiomasCurso');
//Metodos de Idioma
Route::get('idiomas', 'IdiomaController@listarIdiomas');
Route::get('idiomas/{idioma}', 'IdiomaController@obtenerIdioma');
Route::post('idiomas', 'IdiomaController@agregarIdioma');
Route::put('idiomas/{idioma}', 'IdiomaController@actualizarDatosIdioma');
Route::get('idiomas/{idioma}/alumnos', 'IdiomaController@obtenerAlumnosIdioma');
//Metodos de Carrera
Route::get('carreras', 'CarreraController@listarCarreras');
Route::get('carreras/{carrera}', 'CarreraController@obtenerCarrera');
Route::post('carreras', 'CarreraController@agregarCarrera');
Route::put('carreras/{carrera}', 'CarreraController@actualizarDatosCarrera');
Route::get('carreras/{carrera}/alumnos', 'CarreraController@obtenerCarreraAlumnos');
//metodos de alumno
Route::get('alumnos', 'AlumnoController@listarAlumnos');
Route::get('alumnos/{alumno}', 'AlumnoController@obtenerAlumno');
