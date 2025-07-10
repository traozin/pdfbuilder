<?php

use Barryvdh\Snappy\Facades\SnappyPdf;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-pdf', function () {
    return SnappyPdf::loadView('pdf.test')->stream('teste.pdf');
});

Route::get('/gerar-pdf', [PdfController::class, 'gerarPdf'])->name('pdf.gerar');