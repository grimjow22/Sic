<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Requests\StudentRequest;
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
    return view('welcome');
    
});

Route::get('/docentes/{codigo}', function ($codigo) {
    return view('docentes') ->  with ('codigo', $codigo);
    
    
});

Route::get('/estudiantes', function () {
    return view('estudiantes');
})->name('Marvin');

Route::resource('estudiantes',StudentController::class);
// Route::get('/alumnos',[StudentController::class,'index']);
// Route::post('/alumnos',[StudentController::class,'store']);
