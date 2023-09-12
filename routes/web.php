<?php

use App\Http\Controllers\AuthenticatedSessionController;
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
    return view('dashboard.index');
});

// Route::get('/', function () {
//     return view('dashboard.index');
// });
// Route::get('/login', function () {
//     return view('auth.index');
// });

Route::get('/karyawan', function () {
    return view('employee.index');
});

// Route::get('/home', function () {
//     return view('partials.sidemenu');
// });

Route::get('/tambah-karyawan', function () {
    return view('backend.pages.template.create');
});

Route::get('/user-profile', function () {
    return view('backend.pages.login.user-profile');
});

Route::get('/login', [AuthenticatedSessionController ::class, 'index'])->name('login');
Route::post('/login', [AuthenticatedSessionController ::class, 'authenticate'])->name('authenticate');