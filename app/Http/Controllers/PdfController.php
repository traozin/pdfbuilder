<?php

namespace App\Http\Controllers;

use App\Data\Mocks\PdfMockData;
use Barryvdh\Snappy\Facades\SnappyPdf;

class PdfController extends Controller {
    public function gerarPdf() {
        return SnappyPdf::loadView('pdf.os', PdfMockData::PDF_5_COMP_12_ITENS)->stream('os_03372_25.pdf');
    }
}
