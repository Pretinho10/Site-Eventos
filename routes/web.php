<?php

use Illuminate\Support\Facades\Route;
// Importando o componente Eventos
use App\Http\Livewire\Admin\Eventos\Eventos;
use App\Http\Livewire\Admin\Eventos\EventosForm;
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
    return view('inicial');
});


//Rota para o componente full page do Livewire
Route::get('/eventos', Eventos::class);
Route::get('/eventos/criar', EventosForm::class);



