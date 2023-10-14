<?php

use Barryvdh\DomPDF\Facade\Pdf as PDF;
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

    $pdf = PDF::loadView('pdf.pdf', [
        'titulo' => 'Este es mi título',
        'contenido' => 'Este es mi contenido'
    ]);

    return $pdf->stream();
});
