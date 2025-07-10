<?php

namespace App\Data\Mocks;

class PdfMockData {
    /**
     * Mock 1: 5 componentes, 12 itens
     * @var array
     */
    public const PDF_5_COMP_12_ITENS = [
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
            ['descricao' => 'CHECK AGB INTERNAL SCAVENGE OIL PUMP INLET SCREEN (LEFT ENGINE)', 'equipe' => 'André Segato - inspector | Thiago Pauloci Dos Santos - inspector'],
            ['descricao' => 'CHECK AGB INTERNAL SCAVENGE OIL PUMP INLET SCREEN (RIGHT ENGINE)', 'equipe' => 'André Segato - inspector | Thiago Pauloci Dos Santos - inspector'],
            ['descricao' => 'TAMPA DA NACELE LH DANIFICADO', 'equipe' => 'André Segato - inspector | Thiago Pauloci Dos Santos - inspector'],
            ['descricao' => 'BARRAMENTO BUS TIE DIREITO POR VEZES ABRE', 'equipe' => 'Marcio Messias Silva - inspector | Silvio Vicente - mechanic'],
            ['descricao' => 'AUDIOS AURAIS DO SISTEMA DE AVIONICS INOPERANTE', 'equipe' => 'Marcio Messias Silva - inspector | Silvio Vicente - mechanic'],
            ['descricao' => 'EFETUAR SUBSTITUIÇÃO DE UMA PROBE DE COMBUSTÍVEL LADO ESQUERDO', 'equipe' => 'André Segato - inspector | Thiago Pauloci Dos Santos - inspector'],
            ['descricao' => 'EFETUAR SUBSTITUIÇÃO DE INDICADOR DE COMBUSTÍVEL LH E AFERIÇÃO DO SISTEMA', 'equipe' => 'Marcio Messias Silva - inspector | Silvio Vicente - mechanic'],
            ['descricao' => 'VERIFICAR COMANDO DO TRIM QUANTO À INTEGRIDADE', 'equipe' => 'André Segato - inspector | Thiago Pauloci Dos Santos - inspector'],
        ],
    ];

    /**
     * Mock 2: 3 componentes, 7 itens
     * @var array
     */
    public const PDF_3_COMP_7_ITENS = [
        'os' => [
            'numero' => '10001/25',
            'prefixo' => 'PP-ABC',
            'inicio' => '01/01/2025',
            'termino' => '05/01/2025',
            'responsavel' => 'JOAO',
            'componentes' => [
                [ // Componente 1 (FUSELAGE)
                    'nome' => 'FUSELAGE', 'sn' => 'F-001', 'modelo' => 'X1', 'fabricante' => 'FAB1',
                    'tsn' => '1000', 'tso' => 'N/A', 'revisao' => 'Manual:1 / Revisão:1 / PN:001', 'outros' => 'Ano de fabricação: 2020',
                ],
                [ // Componente 2 (ENGINE)
                    'nome' => 'ENGINE', 'sn' => 'E-001', 'modelo' => 'Y1', 'fabricante' => 'FAB2',
                    'tsn' => '2000', 'tso' => '500', 'revisao' => 'Manual:2 / Revisão:2 / PN:002', 'outros' => 'CSO: 100',
                ],
                [ // Componente 3 (WING)
                    'nome' => 'WING', 'sn' => 'W-001', 'modelo' => 'Z1', 'fabricante' => 'FAB3',
                    'tsn' => '1500', 'tso' => 'N/A', 'revisao' => 'Manual:3 / Revisão:3 / PN:003', 'outros' => 'Ano de fabricação: 2021',
                ],
            ],
        ],
        'itens' => [
            ['descricao' => 'TROCAR FILTRO DE ÓLEO', 'equipe' => 'Joao - inspector'],
            ['descricao' => 'INSPECIONAR SISTEMA ELÉTRICO', 'equipe' => 'Joao - inspector'],
            ['descricao' => 'LIMPEZA GERAL', 'equipe' => 'Joao - inspector'],
            ['descricao' => 'VERIFICAR NÍVEL DE FLUIDOS', 'equipe' => 'Joao - inspector'],
            ['descricao' => 'CALIBRAR PNEUS', 'equipe' => 'Joao - inspector'],
            ['descricao' => 'TESTAR LUZES DE NAVEGAÇÃO', 'equipe' => 'Joao - inspector'],
            ['descricao' => 'REAPERTAR PARAFUSOS DO TREM DE POUSO', 'equipe' => 'Joao - inspector'],
        ],
    ];

    /**
     * Mock 3: 3 componentes, 10 itens
     * @var array
     */
    public const PDF_3_COMP_10_ITENS = [
        'os' => [
            'numero' => '10002/25',
            'prefixo' => 'PP-DEF',
            'inicio' => '10/02/2025',
            'termino' => '15/02/2025',
            'responsavel' => 'MARIA',
            'componentes' => [
                [ // Componente 1 (WING)
                    'nome' => 'WING', 'sn' => 'W-001', 'modelo' => 'Z1', 'fabricante' => 'FAB3',
                    'tsn' => '1500', 'tso' => 'N/A', 'revisao' => 'Manual:3 / Revisão:3 / PN:003', 'outros' => 'Ano de fabricação: 2021',
                ],
                [ // Componente 2 (LANDING GEAR)
                    'nome' => 'LANDING GEAR', 'sn' => 'LG-001', 'modelo' => 'LG1', 'fabricante' => 'FAB4',
                    'tsn' => '500', 'tso' => '100', 'revisao' => 'Manual:4 / Revisão:4 / PN:004', 'outros' => 'CSO: 50',
                ],
                [ // Componente 3 (AVIONICS)
                    'nome' => 'AVIONICS', 'sn' => 'AV-001', 'modelo' => 'AV1', 'fabricante' => 'FAB5',
                    'tsn' => '300', 'tso' => 'N/A', 'revisao' => 'Manual:5 / Revisão:5 / PN:005', 'outros' => 'Ano de fabricação: 2022',
                ],
            ],
        ],
        'itens' => [
            ['descricao' => 'CHECAR SISTEMA DE NAVEGAÇÃO', 'equipe' => 'Maria - inspector'],
            ['descricao' => 'TROCAR LÂMPADAS', 'equipe' => 'Maria - inspector'],
            ['descricao' => 'INSPECIONAR TREM DE POUSO', 'equipe' => 'Maria - inspector'],
            ['descricao' => 'LUBRIFICAR ARTICULAÇÕES', 'equipe' => 'Maria - inspector'],
            ['descricao' => 'TESTAR SISTEMA DE COMUNICAÇÃO', 'equipe' => 'Maria - inspector'],
            ['descricao' => 'VERIFICAR SENSORES', 'equipe' => 'Maria - inspector'],
            ['descricao' => 'AJUSTAR CONTROLES DE VOO', 'equipe' => 'Maria - inspector'],
            ['descricao' => 'INSPECIONAR COMPONENTES HIDRÁULICOS', 'equipe' => 'Maria - inspector'],
            ['descricao' => 'LIMPEZA DO INTERIOR', 'equipe' => 'Maria - inspector'],
            ['descricao' => 'REVISAR PLACAS DE ADVERTÊNCIA', 'equipe' => 'Maria - inspector'],
        ],
    ];

    /**
     * Mock 4: 4 componentes, 15 itens
     * @var array
     */
    public const PDF_4_COMP_15_ITENS = [
        'os' => [
            'numero' => '10003/25',
            'prefixo' => 'PP-GHI',
            'inicio' => '20/03/2025',
            'termino' => '21/03/2025',
            'responsavel' => 'CARLOS',
            'componentes' => [
                [ // Componente 1 (BATTERY)
                    'nome' => 'BATTERY', 'sn' => 'B-001', 'modelo' => 'BAT1', 'fabricante' => 'FAB6',
                    'tsn' => '100', 'tso' => 'N/A', 'revisao' => 'Manual:6 / Revisão:6 / PN:006', 'outros' => 'Ano de fabricação: 2023',
                ],
                [ // Componente 2 (TAIL)
                    'nome' => 'TAIL', 'sn' => 'T-001', 'modelo' => 'TAIL1', 'fabricante' => 'FAB7',
                    'tsn' => '800', 'tso' => 'N/A', 'revisao' => 'Manual:7 / Revisão:7 / PN:007', 'outros' => 'Ano de fabricação: 2019',
                ],
                [ // Componente 3 (FLAP)
                    'nome' => 'FLAP', 'sn' => 'F-002', 'modelo' => 'FLAP1', 'fabricante' => 'FAB8',
                    'tsn' => '600', 'tso' => 'N/A', 'revisao' => 'Manual:8 / Revisão:8 / PN:008', 'outros' => 'Ano de fabricação: 2018',
                ],
                [ // Componente 4 (RUDDER)
                    'nome' => 'RUDDER', 'sn' => 'R-001', 'modelo' => 'RUD1', 'fabricante' => 'FAB9',
                    'tsn' => '400', 'tso' => 'N/A', 'revisao' => 'Manual:9 / Revisão:9 / PN:009', 'outros' => 'Ano de fabricação: 2017',
                ],
            ],
        ],
        'itens' => [
            ['descricao' => 'TROCAR BATERIA', 'equipe' => 'Carlos - inspector'],
            ['descricao' => 'VERIFICAR FUSÍVEIS', 'equipe' => 'Carlos - inspector'],
            ['descricao' => 'TESTAR SISTEMA DE ILUMINAÇÃO', 'equipe' => 'Carlos - inspector'],
            ['descricao' => 'INSPECIONAR CONEXÕES ELÉTRICAS', 'equipe' => 'Carlos - inspector'],
            ['descricao' => 'LIMPEZA DO COMPARTIMENTO DA BATERIA', 'equipe' => 'Carlos - inspector'],
            ['descricao' => 'CALIBRAR MEDIDORES DE ENERGIA', 'equipe' => 'Carlos - inspector'],
            ['descricao' => 'TESTAR INTERRUPTORES DO PAINEL', 'equipe' => 'Carlos - inspector'],
            ['descricao' => 'VERIFICAR CABOS DE ATERRAMENTO', 'equipe' => 'Carlos - inspector'],
            ['descricao' => 'REAPERTAR TERMINAIS', 'equipe' => 'Carlos - inspector'],
            ['descricao' => 'MEDIR TENSÃO DA REDE', 'equipe' => 'Carlos - inspector'],
            ['descricao' => 'INSPEÇÃO VISUAL GERAL DO SISTEMA', 'equipe' => 'Carlos - inspector'],
            ['descricao' => 'VERIFICAR LUZES DE NAVEGAÇÃO', 'equipe' => 'Carlos - inspector'],
            ['descricao' => 'TESTAR RADIOS DE COMUNICAÇÃO', 'equipe' => 'Carlos - inspector'],
            ['descricao' => 'INSPECIONAR ANTENAS', 'equipe' => 'Carlos - inspector'],
            ['descricao' => 'REVISAR DOCUMENTAÇÃO TÉCNICA', 'equipe' => 'Carlos - inspector'],
        ],
    ];

    /**
     * Mock 5: 4 componentes, 7 itens
     * @var array
     */
    public const PDF_4_COMP_7_ITENS = [
        'os' => [
            'numero' => '10004/25',
            'prefixo' => 'PP-JKL',
            'inicio' => '01/04/2025',
            'termino' => '10/04/2025',
            'responsavel' => 'ANA',
            'componentes' => [
                [ // Componente 1 (TAIL)
                    'nome' => 'TAIL', 'sn' => 'T-001', 'modelo' => 'TAIL1', 'fabricante' => 'FAB7',
                    'tsn' => '800', 'tso' => 'N/A', 'revisao' => 'Manual:7 / Revisão:7 / PN:007', 'outros' => 'Ano de fabricação: 2019',
                ],
                [ // Componente 2 (FLAP)
                    'nome' => 'FLAP', 'sn' => 'F-002', 'modelo' => 'FLAP1', 'fabricante' => 'FAB8',
                    'tsn' => '600', 'tso' => 'N/A', 'revisao' => 'Manual:8 / Revisão:8 / PN:008', 'outros' => 'Ano de fabricação: 2018',
                ],
                [ // Componente 3 (RUDDER)
                    'nome' => 'RUDDER', 'sn' => 'R-001', 'modelo' => 'RUD1', 'fabricante' => 'FAB9',
                    'tsn' => '400', 'tso' => 'N/A', 'revisao' => 'Manual:9 / Revisão:9 / PN:009', 'outros' => 'Ano de fabricação: 2017',
                ],
                [ // Componente 4 (ELEVATOR)
                    'nome' => 'ELEVATOR', 'sn' => 'E-002', 'modelo' => 'ELEV1', 'fabricante' => 'FAB10',
                    'tsn' => '200', 'tso' => 'N/A', 'revisao' => 'Manual:10 / Revisão:10 / PN:010', 'outros' => 'Ano de fabricação: 2016',
                ],
            ],
        ],
        'itens' => [
            ['descricao' => 'INSPECIONAR CAUDA', 'equipe' => 'Ana - inspector'],
            ['descricao' => 'LIMPAR FLAP', 'equipe' => 'Ana - inspector'],
            ['descricao' => 'AJUSTAR RUDDER', 'equipe' => 'Ana - inspector'],
            ['descricao' => 'VERIFICAR ELEVADOR', 'equipe' => 'Ana - inspector'],
            ['descricao' => 'TROCAR LUZ DE NAVEGAÇÃO', 'equipe' => 'Ana - inspector'],
            ['descricao' => 'LUBRIFICAR ARTICULAÇÕES', 'equipe' => 'Ana - inspector'],
            ['descricao' => 'TESTAR SISTEMA DE ALERTA', 'equipe' => 'Ana - inspector'],
        ],
    ];

    /**
     * Mock 6: 6 componentes, 20 itens
     * @var array
     */
    public const PDF_6_COMP_20_ITENS = [
        'os' => [
            'numero' => '10005/25',
            'prefixo' => 'PP-MNO',
            'inicio' => '15/05/2025',
            'termino' => '16/05/2025',
            'responsavel' => 'PEDRO',
            'componentes' => [
                [ // Componente 1 (FUSELAGE)
                    'nome' => 'FUSELAGE', 'sn' => 'F-002', 'modelo' => 'X2', 'fabricante' => 'FAB11',
                    'tsn' => '1200', 'tso' => 'N/A', 'revisao' => 'Manual:11 / Revisão:11 / PN:011', 'outros' => 'Ano de fabricação: 2021',
                ],
                [ // Componente 2 (ENGINE LH)
                    'nome' => 'ENGINE LH', 'sn' => 'E-002', 'modelo' => 'Y2', 'fabricante' => 'FAB12',
                    'tsn' => '2200', 'tso' => '600', 'revisao' => 'Manual:12 / Revisão:12 / PN:012', 'outros' => 'CSO: 200',
                ],
                [ // Componente 3 (ENGINE RH)
                    'nome' => 'ENGINE RH', 'sn' => 'E-003', 'modelo' => 'Y3', 'fabricante' => 'FAB13',
                    'tsn' => '2300', 'tso' => '700', 'revisao' => 'Manual:13 / Revisão:13 / PN:013', 'outros' => 'CSO: 300',
                ],
                [ // Componente 4 (PROPELLER LH)
                    'nome' => 'PROPELLER LH', 'sn' => 'P-002', 'modelo' => 'Z2', 'fabricante' => 'FAB14',
                    'tsn' => '1300', 'tso' => 'N/A', 'revisao' => 'Manual:14 / Revisão:14 / PN:014', 'outros' => 'Ano de fabricação: 2022',
                ],
                [ // Componente 5 (PROPELLER RH)
                    'nome' => 'PROPELLER RH', 'sn' => 'P-003', 'modelo' => 'Z3', 'fabricante' => 'FAB15',
                    'tsn' => '1400', 'tso' => 'N/A', 'revisao' => 'Manual:15 / Revisão:15 / PN:015', 'outros' => 'Ano de fabricação: 2023',
                ],
                [ // Componente 6 (AVIONICS)
                    'nome' => 'AVIONICS', 'sn' => 'AV-002', 'modelo' => 'AV2', 'fabricante' => 'FAB16',
                    'tsn' => '350', 'tso' => 'N/A', 'revisao' => 'Manual:16 / Revisão:16 / PN:016', 'outros' => 'Ano de fabricação: 2024',
                ],
            ],
        ],
        'itens' => [
            ['descricao' => 'INSPECIONAR SISTEMA DE COMUNICAÇÃO', 'equipe' => 'Pedro - inspector'],
            ['descricao' => 'VERIFICAR RÁDIOS E ANTENAS', 'equipe' => 'Pedro - inspector'],
            ['descricao' => 'TESTAR INTERFONES E HEADSETS', 'equipe' => 'Pedro - inspector'],
            ['descricao' => 'CALIBRAR EQUIPAMENTOS DE NAVEGAÇÃO', 'equipe' => 'Pedro - inspector'],
            ['descricao' => 'ATUALIZAR SOFTWARES DE BORDO', 'equipe' => 'Pedro - inspector'],
            ['descricao' => 'VERIFICAR CABOS E CONECTORES', 'equipe' => 'Pedro - inspector'],
            ['descricao' => 'LIMPEZA DOS SENSORES EXTERNOS', 'equipe' => 'Pedro - inspector'],
            ['descricao' => 'INSPECIONAR FIAÇÃO INTERNA', 'equipe' => 'Pedro - inspector'],
            ['descricao' => 'REALIZAR TESTE DE FUNCIONALIDADE', 'equipe' => 'Pedro - inspector'],
            ['descricao' => 'VERIFICAR ILUMINAÇÃO DA CABINE', 'equipe' => 'Pedro - inspector'],
            ['descricao' => 'CHECAR SISTEMA DE ALARME', 'equipe' => 'Pedro - inspector'],
            ['descricao' => 'TESTAR SISTEMA DE ATERRAMENTO', 'equipe' => 'Pedro - inspector'],
            ['descricao' => 'REVISAR MANUAL DE OPERAÇÕES', 'equipe' => 'Pedro - inspector'],
            ['descricao' => 'VERIFICAR VAZAMENTOS HIDRÁULICOS', 'equipe' => 'Pedro - inspector'],
            ['descricao' => 'SUBSTITUIR FLUIDO HIDRÁULICO', 'equipe' => 'Pedro - inspector'],
            ['descricao' => 'INSPECIONAR FILTROS DE AR', 'equipe' => 'Pedro - inspector'],
            ['descricao' => 'LIMPAR E SUBSTITUIR VELAS', 'equipe' => 'Pedro - inspector'],
            ['descricao' => 'AJUSTAR MISTURA DE COMBUSTÍVEL', 'equipe' => 'Pedro - inspector'],
            ['descricao' => 'VERIFICAR BOMBAS DE COMBUSTÍVEL', 'equipe' => 'Pedro - inspector'],
            ['descricao' => 'TESTAR SISTEMA DE PARTIDA', 'equipe' => 'Pedro - inspector'],
        ],
    ];

    /**
     * Mock 7: 5 componentes, 10 itens
     * @var array
     */
    public const PDF_5_COMP_10_ITENS = [
        'os' => [
            'numero' => '10006/25',
            'prefixo' => 'PP-PQR',
            'inicio' => '01/06/2025',
            'termino' => '10/06/2025',
            'responsavel' => 'LUCAS',
            'componentes' => [
                [ // Componente 1 (LANDING GEAR)
                    'nome' => 'LANDING GEAR', 'sn' => 'LG-002', 'modelo' => 'LG2', 'fabricante' => 'FAB17',
                    'tsn' => '700', 'tso' => '150', 'revisao' => 'Manual:17 / Revisão:17 / PN:017', 'outros' => 'CSO: 75',
                ],
                [ // Componente 2 (BATTERY)
                    'nome' => 'BATTERY', 'sn' => 'B-002', 'modelo' => 'BAT2', 'fabricante' => 'FAB18',
                    'tsn' => '200', 'tso' => 'N/A', 'revisao' => 'Manual:18 / Revisão:18 / PN:018', 'outros' => 'Ano de fabricação: 2024',
                ],
                [ // Componente 3 (TAIL)
                    'nome' => 'TAIL', 'sn' => 'T-001', 'modelo' => 'TAIL1', 'fabricante' => 'FAB7',
                    'tsn' => '800', 'tso' => 'N/A', 'revisao' => 'Manual:7 / Revisão:7 / PN:007', 'outros' => 'Ano de fabricação: 2019',
                ],
                [ // Componente 4 (FLAP)
                    'nome' => 'FLAP', 'sn' => 'F-002', 'modelo' => 'FLAP1', 'fabricante' => 'FAB8',
                    'tsn' => '600', 'tso' => 'N/A', 'revisao' => 'Manual:8 / Revisão:8 / PN:008', 'outros' => 'Ano de fabricação: 2018',
                ],
                [ // Componente 5 (RUDDER)
                    'nome' => 'RUDDER', 'sn' => 'R-001', 'modelo' => 'RUD1', 'fabricante' => 'FAB9',
                    'tsn' => '400', 'tso' => 'N/A', 'revisao' => 'Manual:9 / Revisão:9 / PN:009', 'outros' => 'Ano de fabricação: 2017',
                ],
            ],
        ],
        'itens' => [
            ['descricao' => 'TROCAR PNEUS', 'equipe' => 'Lucas - inspector'],
            ['descricao' => 'VERIFICAR FREIOS', 'equipe' => 'Lucas - inspector'],
            ['descricao' => 'LUBRIFICAR RODAS', 'equipe' => 'Lucas - inspector'],
            ['descricao' => 'INSPECIONAR AMORTECEDORES', 'equipe' => 'Lucas - inspector'],
            ['descricao' => 'AJUSTAR PRESSÃO DOS PNEUS', 'equipe' => 'Lucas - inspector'],
            ['descricao' => 'TESTAR SISTEMA ELÉTRICO', 'equipe' => 'Lucas - inspector'],
            ['descricao' => 'TROCAR BATERIA', 'equipe' => 'Lucas - inspector'],
            ['descricao' => 'LIMPAR TERMINAIS', 'equipe' => 'Lucas - inspector'],
            ['descricao' => 'VERIFICAR CABOS', 'equipe' => 'Lucas - inspector'],
            ['descricao' => 'INSPECIONAR CONEXÕES', 'equipe' => 'Lucas - inspector'],
        ],
    ];

    /**
     * Mock 8: 7 componentes, 20 itens
     * @var array
     */
    public const PDF_7_COMP_20_ITENS = [
        'os' => [
            'numero' => '10007/25',
            'prefixo' => 'PP-STU',
            'inicio' => '15/07/2025',
            'termino' => '30/07/2025',
            'responsavel' => 'FERNANDA',
            'componentes' => [
                [ // Componente 1 (FUSELAGE)
                    'nome' => 'FUSELAGE', 'sn' => 'F-003', 'modelo' => 'X3', 'fabricante' => 'FAB19',
                    'tsn' => '1600', 'tso' => 'N/A', 'revisao' => 'Manual:19 / Revisão:19 / PN:019', 'outros' => 'Ano de fabricação: 2022',
                ],
                [ // Componente 2 (ENGINE)
                    'nome' => 'ENGINE', 'sn' => 'E-004', 'modelo' => 'Y4', 'fabricante' => 'FAB20',
                    'tsn' => '2600', 'tso' => '800', 'revisao' => 'Manual:20 / Revisão:20 / PN:020', 'outros' => 'CSO: 400',
                ],
                [ // Componente 3 (PROPELLER)
                    'nome' => 'PROPELLER', 'sn' => 'P-004', 'modelo' => 'Z4', 'fabricante' => 'FAB21',
                    'tsn' => '1700', 'tso' => 'N/A', 'revisao' => 'Manual:21 / Revisão:21 / PN:021', 'outros' => 'Ano de fabricação: 2023',
                ],
                [ // Componente 4 (WING)
                    'nome' => 'WING', 'sn' => 'W-001', 'modelo' => 'Z1', 'fabricante' => 'FAB3',
                    'tsn' => '1500', 'tso' => 'N/A', 'revisao' => 'Manual:3 / Revisão:3 / PN:003', 'outros' => 'Ano de fabricação: 2021',
                ],
                [ // Componente 5 (LANDING GEAR)
                    'nome' => 'LANDING GEAR', 'sn' => 'LG-001', 'modelo' => 'LG1', 'fabricante' => 'FAB4',
                    'tsn' => '500', 'tso' => '100', 'revisao' => 'Manual:4 / Revisão:4 / PN:004', 'outros' => 'CSO: 50',
                ],
                [ // Componente 6 (AVIONICS)
                    'nome' => 'AVIONICS', 'sn' => 'AV-001', 'modelo' => 'AV1', 'fabricante' => 'FAB5',
                    'tsn' => '300', 'tso' => 'N/A', 'revisao' => 'Manual:5 / Revisão:5 / PN:005', 'outros' => 'Ano de fabricação: 2022',
                ],
                [ // Componente 7 (BATTERY)
                    'nome' => 'BATTERY', 'sn' => 'B-001', 'modelo' => 'BAT1', 'fabricante' => 'FAB6',
                    'tsn' => '100', 'tso' => 'N/A', 'revisao' => 'Manual:6 / Revisão:6 / PN:006', 'outros' => 'Ano de fabricação: 2023',
                ],
            ],
        ],
        'itens' => [
            ['descricao' => 'INSPECIONAR TREM DE POUSO', 'equipe' => 'Fernanda - inspector'],
            ['descricao' => 'VERIFICAR AMORTECEDORES E STRUTS', 'equipe' => 'Fernanda - inspector'],
            ['descricao' => 'LUBRIFICAR ARTICULAÇÕES DA RODA', 'equipe' => 'Fernanda - inspector'],
            ['descricao' => 'TROCAR FLUIDO HIDRÁULICO DO TREM', 'equipe' => 'Fernanda - inspector'],
            ['descricao' => 'AJUSTAR PRESSÃO DOS PNEUS', 'equipe' => 'Fernanda - inspector'],
            ['descricao' => 'VERIFICAR MECANISMO DE RETRAÇÃO', 'equipe' => 'Fernanda - inspector'],
            ['descricao' => 'TESTAR LUZES DE TAXI', 'equipe' => 'Fernanda - inspector'],
            ['descricao' => 'INSPEÇÃO VISUAL DE DANOS E CORROSÃO', 'equipe' => 'Fernanda - inspector'],
            ['descricao' => 'LIMPEZA E POLIMENTO DAS SUPERFÍCIES', 'equipe' => 'Fernanda - inspector'],
            ['descricao' => 'REAPERTAR PARAFUSOS E CONEXÕES', 'equipe' => 'Fernanda - inspector'],
            ['descricao' => 'VERIFICAR SISTEMA DE FREIOS', 'equipe' => 'Fernanda - inspector'],
            ['descricao' => 'SUBSTITUIR PASTILHAS DE FREIO', 'equipe' => 'Fernanda - inspector'],
            ['descricao' => 'TESTAR INDICADORES DE POSIÇÃO', 'equipe' => 'Fernanda - inspector'],
            ['descricao' => 'INSPECIONAR PISTÕES HIDRÁULICOS', 'equipe' => 'Fernanda - inspector'],
            ['descricao' => 'VERIFICAR VEDAÇÕES E GAXETAS', 'equipe' => 'Fernanda - inspector'],
            ['descricao' => 'AJUSTAR ALINHAMENTO DA RODA DIANTEIRA', 'equipe' => 'Fernanda - inspector'],
            ['descricao' => 'TESTAR CONTROLES DA CABINE', 'equipe' => 'Fernanda - inspector'],
            ['descricao' => 'INSPECIONAR CÂMARAS DOS PNEUS', 'equipe' => 'Fernanda - inspector'],
            ['descricao' => 'REVISÃO GERAL DO TREM DE POUSO', 'equipe' => 'Fernanda - inspector'],
            ['descricao' => 'APLICAR PROTETIVO CONTRA CORROSÃO', 'equipe' => 'Fernanda - inspector'],
        ],
    ];

    /**
     * Mock 9: 10 componentes, 80 itens
     * @var array
     */
    public const PDF_10_COMP_80_ITENS = [
        'os' => [
            'numero' => '10008/25',
            'prefixo' => 'PP-VWX',
            'inicio' => '01/08/2025',
            'termino' => '31/08/2025',
            'responsavel' => 'RAFAEL',
            'componentes' => [
                [ // Componente 1 (AIRFRAME)
                    'nome' => 'AIRFRAME', 'sn' => 'AF-001', 'modelo' => 'AF1', 'fabricante' => 'FAB22',
                    'tsn' => '2000', 'tso' => 'N/A', 'revisao' => 'Manual:22 / Revisão:22 / PN:022', 'outros' => 'Ano de fabricação: 2020',
                ],
                [ // Componente 2 (ENGINE)
                    'nome' => 'ENGINE', 'sn' => 'E-004', 'modelo' => 'Y4', 'fabricante' => 'FAB20',
                    'tsn' => '2600', 'tso' => '800', 'revisao' => 'Manual:20 / Revisão:20 / PN:020', 'outros' => 'CSO: 400',
                ],
                [ // Componente 3 (PROPELLER)
                    'nome' => 'PROPELLER', 'sn' => 'P-004', 'modelo' => 'Z4', 'fabricante' => 'FAB21',
                    'tsn' => '1700', 'tso' => 'N/A', 'revisao' => 'Manual:21 / Revisão:21 / PN:021', 'outros' => 'Ano de fabricação: 2023',
                ],
                [ // Componente 4 (WING)
                    'nome' => 'WING', 'sn' => 'W-001', 'modelo' => 'Z1', 'fabricante' => 'FAB3',
                    'tsn' => '1500', 'tso' => 'N/A', 'revisao' => 'Manual:3 / Revisão:3 / PN:003', 'outros' => 'Ano de fabricação: 2021',
                ],
                [ // Componente 5 (LANDING GEAR)
                    'nome' => 'LANDING GEAR', 'sn' => 'LG-001', 'modelo' => 'LG1', 'fabricante' => 'FAB4',
                    'tsn' => '500', 'tso' => '100', 'revisao' => 'Manual:4 / Revisão:4 / PN:004', 'outros' => 'CSO: 50',
                ],
                [ // Componente 6 (AVIONICS)
                    'nome' => 'AVIONICS', 'sn' => 'AV-001', 'modelo' => 'AV1', 'fabricante' => 'FAB5',
                    'tsn' => '300', 'tso' => 'N/A', 'revisao' => 'Manual:5 / Revisão:5 / PN:005', 'outros' => 'Ano de fabricação: 2022',
                ],
                [ // Componente 7 (BATTERY)
                    'nome' => 'BATTERY', 'sn' => 'B-001', 'modelo' => 'BAT1', 'fabricante' => 'FAB6',
                    'tsn' => '100', 'tso' => 'N/A', 'revisao' => 'Manual:6 / Revisão:6 / PN:006', 'outros' => 'Ano de fabricação: 2023',
                ],
                [ // Componente 8 (TAIL)
                    'nome' => 'TAIL', 'sn' => 'T-001', 'modelo' => 'TAIL1', 'fabricante' => 'FAB7',
                    'tsn' => '800', 'tso' => 'N/A', 'revisao' => 'Manual:7 / Revisão:7 / PN:007', 'outros' => 'Ano de fabricação: 2019',
                ],
                [ // Componente 9 (FLAP)
                    'nome' => 'FLAP', 'sn' => 'F-002', 'modelo' => 'FLAP1', 'fabricante' => 'FAB8',
                    'tsn' => '600', 'tso' => 'N/A', 'revisao' => 'Manual:8 / Revisão:8 / PN:008', 'outros' => 'Ano de fabricação: 2018',
                ],
                [ // Componente 10 (RUDDER)
                    'nome' => 'RUDDER', 'sn' => 'R-001', 'modelo' => 'RUD1', 'fabricante' => 'FAB9',
                    'tsn' => '400', 'tso' => 'N/A', 'revisao' => 'Manual:9 / Revisão:9 / PN:009', 'outros' => 'Ano de fabricação: 2017',
                ],
            ],
        ],
        'itens' => [
            // Gerando 80 itens para este mock (EXTREMAMENTE VERBOSO E REPETITIVO)
            ['descricao' => 'ITEM DE SERVIÇO 1 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 2 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 3 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 4 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 5 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 6 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 7 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 8 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 9 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 10 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 11 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 12 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 13 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 14 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 15 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 16 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 17 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 18 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 19 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 20 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 21 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 22 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 23 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 24 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 25 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 26 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 27 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 28 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 29 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 30 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 31 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 32 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 33 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 34 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 35 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 36 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 37 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 38 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 39 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 40 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 41 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 42 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 43 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 44 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 45 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 46 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 47 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 48 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 49 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 50 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 51 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 52 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 53 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 54 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 55 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 56 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 57 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 58 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 59 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 60 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 61 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 62 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 63 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 64 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 65 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 66 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 67 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 68 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 69 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 70 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 71 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 72 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 73 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 74 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 75 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 76 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 77 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 78 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 79 - Rafael', 'equipe' => 'Rafael - inspector'],
            ['descricao' => 'ITEM DE SERVIÇO 80 - Rafael', 'equipe' => 'Rafael - inspector'],
        ],
    ];
}