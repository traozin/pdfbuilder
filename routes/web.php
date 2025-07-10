<?php

use Barryvdh\Snappy\Facades\SnappyPdf;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-pdf', function () {
    return SnappyPdf::loadView('pdf.test')->download('teste.pdf');
});
