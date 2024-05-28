<?php

use App\Http\Livewire\ParImpar;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\IdentidadeController;

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

Route::get('/baranda', function () {
    return view('home');
});

// Route Standart
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

//Route with Controller
Route::get('/baranda', [HelloController::class, 'naran']);

//Route ParImpar
Route::get('/parimpar', function () {
    return view('parimpar');
});
Route::get('/table', [IdentidadeController::class, 'dadus']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Aula Database
// Route::get('/dashboard', [IdentidadeController::class, 'dadusDatabase']);
// Route::get('edit/estudante/{id}', [IdentidadeController::class, 'getEditDadus'])->name('editEstudante');
// Route::get('add/estudante/{id}', [IdentidadeController::class, 'getAddDadus'])->name('addEstudante');

Route::resource('identidade', IdentidadeController::class)->middleware('auth');


//Login


//View ba login
Route::view('/login', 'login')->name('login');
//Route ba login
Route::post('/login', [UserController::class, 'loginPost'])->name('actionLogin');
//Route ba Logout
Route::get('/logout', [UserController::class, 'logoutPost'])->name('actionLogout');