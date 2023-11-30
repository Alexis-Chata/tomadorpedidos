<?php

use App\Http\Controllers\Comedi31Controller;
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
    return redirect('dashboard');
    //  return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('dashboard', function () {
        return view('tomadorpedidos.dashboard');
        //return view('dashboard');
    })->name('tomadorpedidos.dashboard');

    Route::get('clientes', [Comedi31Controller::class, 'index'])->name('tomadorpedidos.clientes');
});
