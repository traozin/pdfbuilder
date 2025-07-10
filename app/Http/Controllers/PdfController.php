<?php

namespace App\Http\Controllers;

use Barryvdh\Snappy\Facades\SnappyPdf;

class PdfController extends Controller {
    public function gerarPdf() {
        $dados = [
            'os' => [
            'numero' => '03372/25',
            'prefixo' => 'PP-JCA',
            'inicio' => '09/06/2025',
            'termino' => '20/06/2025',
            'responsavel' => 'SDCO',
            'componentes' => [
                [
                'nome' => 'AIRFRAME',
                'sn' => 'LA-107',
                'modelo' => 'F90',
                'fabricante' => 'BEECH',
                'tsn' => '9442.7',
                'tso' => 'N/A',
                'revisao' => 'Manual:CRO / Revisão:M.M. / PN:109-590001-19',
                'outros' => 'Ano de fabricação: 1981',
                ],
                [
                'nome' => 'LEFT ENGINE',
                'sn' => 'PCE-92264',
                'modelo' => 'PT6A-135',
                'fabricante' => 'PRATT & WHITNEY CANADA',
                'tsn' => '9442.7',
                'tso' => '2412',
                'revisao' => 'Manual:49 / Revisão:M.M. / PN:3043512',
                'outros' => 'CSO: 2126',
                ],
                [
                'nome' => 'RIGHT ENGINE',
                'sn' => 'PCE-92269',
                'modelo' => 'PT6A-135',
                'fabricante' => 'PRATT & WHITNEY CANADA',
                'tsn' => '9442.7',
                'tso' => '2412',
                'revisao' => 'Manual:49 / Revisão:M.M. / PN:3043512',
                'outros' => 'CSO: 2126',
                ],
                [
                'nome' => 'LEFT PROPELLER',
                'sn' => 'EAA-1533',
                'modelo' => 'HC-B4TN-3B',
                'fabricante' => 'HARTZELL',
                'tsn' => '4275.5',
                'tso' => '75.7',
                'revisao' => 'Manual:22 / Revisão:O.M. / PN:139 (61-00-39)',
                'outros' => 'CSN: N/A',
                ],
                [
                'nome' => 'RIGHT PROPELLER',
                'sn' => 'EAA-1535',
                'modelo' => 'HC-B4TN-3B',
                'fabricante' => 'HARTZELL',
                'tsn' => '4275.5',
                'tso' => '359.4',
                'revisao' => 'Manual:22 / Revisão:O.M. / PN:139 (61-00-39)',
                'outros' => 'CSN: N/A',
                ],
            ]
            ],
            'itens' => [
                ['descricao' => 'EFETUAR SUBSTITUIÇÃO DO TRANSMISSOR DE PRESSÃO DE ÓLEO LADO DIREITO', 'equipe' => 'André Segato - inspector | Thiago Pauloci Dos Santos - inspector'],
                ['descricao' => 'EFETUAR INSPEÇÃO NO MOTOR INTERNO DIREITO APRESENTANDO PERDA DE PRESSÃO', 'equipe' => 'André Segato - inspector | Thiago Pauloci Dos Santos - inspector'],
                ['descricao' => 'AVALIAR JUNTAS DA TAMPA DA NACELE ESQUERDA', 'equipe' => 'André Segato - inspector | Thiago Pauloci Dos Santos - inspector'],
                ['descricao' => '(MSR) AIRFRAME > LUBRIFICATE ITEMS 6M', 'equipe' => 'André Segato - inspector | Thiago Pauloci Dos Santos - inspector'],
                ['descricao' => '(MSR) LEFT ENGINE > CHECK AGB INTERNAL SCAVENGE OIL PUMP INLET SCREEN', 'equipe' => 'André Segato - inspector | Thiago Pauloci Dos Santos - inspector'],
                ['descricao' => '(MSR) RIGHT ENGINE > CHECK AGB INTERNAL SCAVENGE OIL PUMP INLET SCREEN', 'equipe' => 'André Segato - inspector | Thiago Pauloci Dos Santos - inspector'],
                ['descricao' => 'TAMPA DA NACELE LH DANIFICADO', 'equipe' => 'André Segato - inspector | Thiago Pauloci Dos Santos - inspector'],
                ['descricao' => 'BARRAMENTO BUS TIE DIREITO POR VEZES ABRE', 'equipe' => 'Marcio Messias Silva - inspector | Silvio Vicente - mechanic'],
                ['descricao' => 'AUDIOS AURAIS DO SISTEMA DE AVIONICS INOPERANTE', 'equipe' => 'Marcio Messias Silva - inspector | Silvio Vicente - mechanic'],
                ['descricao' => 'EFETUAR SUBSTITUIÇÃO DE UMA PROBE DE COMBUSTÍVEL LADO ESQUERDO', 'equipe' => 'André Segato - inspector | Thiago Pauloci Dos Santos - inspector'],
                ['descricao' => 'EFETUAR SUBSTITUIÇÃO DE INDICADOR DE COMBUSTÍVEL LH E AFERIÇÃO DO SISTEMA', 'equipe' => 'Marcio Messias Silva - inspector | Silvio Vicente - mechanic'],
                ['descricao' => 'VERIFICAR COMANDO DO TRIM QUANTO À INTEGRIDADE', 'equipe' => 'André Segato - inspector | Thiago Pauloci Dos Santos - inspector'],
            ],
        ];

        $pdf = SnappyPdf::loadView('pdf.os', $dados);
        $pdf->setOption('disable-smart-shrinking', true);
        $pdf->setOption('no-images', false);
        $pdf->setOption('enable-local-file-access', true);
        return $pdf->stream('os_03372_25.pdf');
    }
}
