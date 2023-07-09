<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sitio\contactController;

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
    return view('sitio.index');
});

Route::post('/sitio/contacto', [contactController::class, 'send']);
