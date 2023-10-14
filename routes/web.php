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
    //$pdf = App::make('dompdf.wrapper'); -- Desde Facade PDF
    //$pdf = app('dompdf.wrapper'); -- Desde helper app
    //$pdf = PDF::loadHTML('<h1>Hola PDF desde facade Pdf</h1>'); -- Desde Facade Pdf con As
    //$path = storage_path('app\views\pdf.html');

    $pdf = PDF::loadView('pdf.pdf', [
        'titulo' => 'Este es mi título',
        'contenido' => 'Este es mi contenido'
    ]);
    //return $pdf->stream();
    //return $pdf->download();
    //$path = storage_path('app/public/prueba.pdf');
    //$pdf->save($path);
    //Storage::put('public/prueba2.pdf', $pdf->output());
    //return 'Se guardó';

    return $pdf->stream();
});
