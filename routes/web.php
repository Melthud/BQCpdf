<?php

use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

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
   /*$pdf = PDF::loadView('pdf.pdf');
    return $pdf -> stream();*/
   return view('home.index');
});


Route::get('/', function () {
   return view('home.index');
})->name('home');

Route::get('/second', function () {
   $pdf = PDF::loadView('pdf.pdf');
    return $pdf -> stream();
})->name('second');