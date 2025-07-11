<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;

Route::get('/', function () {
    return redirect()->route('pdf.gerar');
});

Route::get('/gerar-pdf', [PdfController::class, 'gerarPdf'])->name('pdf.gerar');