<?php

namespace App\Http\Controllers;

use App\Data\Mocks\PdfMockData;
use Barryvdh\Snappy\Facades\SnappyPdf;

class PdfController extends Controller {
    public function gerarPdf() {
        $pdf = SnappyPdf::loadView('pdf.os', PdfMockData::PDF_5_COMP_12_ITENS);
        $pdf->setOption('disable-smart-shrinking', true);
        $pdf->setOption('no-images', false);
        $pdf->setOption('enable-local-file-access', true);
        return $pdf->stream('os_03372_25.pdf');
    }
}
