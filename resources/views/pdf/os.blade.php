<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Ordem de Serviço</title>
    <style>
        @page {
            margin: 1cm 0;
        }
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            margin: 0 30px;
        }
        .header, .header-inner, .header-bottom {
            display: flex;
            align-items: center;
            width: 100%;
        }
        .header-inner {
            border: 1px solid #000;
            justify-content: space-between;
        }
        .info {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0 20px;
        }
        .info.left { border-right: 1px solid #000; }
        .info.right {
            flex-direction: column;
            border-left: 1px solid #000;
            text-align: right;
        }
        .info.center {
            flex-direction: column;
            padding: 50px;
            text-align: center;
        }
        .info img { width: 120px; }
        .info.center p, .info.right p {
            margin: 0;
            font-size: 12px;
        }
        .info.center p.title {
            font-weight: bold;
            font-size: 18px;
        }
        .header-bottom { justify-content: space-between; margin-top: 8px; }
        .header-bottom h1 { font-size: 22px; font-weight: bold; }
        .footer {
            text-align: center;
            font-size: 10px;
            position: fixed;
            bottom: 30px;
            width: 100%;
        }
        h1 { font-size: 18px; margin: 10px 0; }
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 12px;
        }
        th, td {
            border: 1px solid #000;
            padding: 6px 10px;
            text-align: left;
            vertical-align: top;
        }
        .components-table th {
            width: 18%;
            text-align: center;
            font-weight: bold;
        }
        .components-table td { padding: 8px 12px; }
        .resume-table th { text-align: center; }
        .resume-table .table-title {
            font-weight: bold;
            font-size: 14px;
        }
        .resume-table .table-subtitle {
            font-weight: normal;
            font-size: 12px;
        }
        .declaration {
            text-align: center;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <x-pdf.header :numero="$os['numero'] ?? null" :prefixo="$os['prefixo'] ?? null" />
    @php
        $nomesComponentes = ['AIRFRAME', 'LEFT ENGINE', 'RIGHT ENGINE', 'LEFT PROPELLER', 'RIGHT PROPELLER'];
    @endphp

    <table class="components-table">
        @foreach ($os['componentes'] ?? [] as $index => $componente)
            <tr>
                <th>{{ $nomesComponentes[$index] ?? 'COMPONENTE' }}</th>
                <td>
                    SN: {{ $componente['sn'] }}<br>
                    Modelo: {{ $componente['modelo'] }}<br>
                    Fabricante: {{ $componente['fabricante'] }}<br>
                    TSN: {{ $componente['tsn'] }}<br>
                    TSO: {{ $componente['tso'] }}<br>
                    Revisão: {{ $componente['revisao'] }}<br>
                    {!! $componente['outros'] ?? '' !!}
                </td>
            </tr>
        @endforeach
    </table>

    <table class="resume-table">
        <thead>
            <tr>
                <th colspan="3" class="table-subtitle">
                    Data de Início: {{ $os['inicio']}} &nbsp;&nbsp;&nbsp;&nbsp;
                    Término Previsto: {{ $os['termino']}}
                </th>
            </tr>
            <tr>
                <th colspan="3" class="table-title">RESUMO DE ITENS EXECUTADOS</th>
            </tr>
            <tr>
                <th style="width: 5%;">#</th>
                <th style="width: 65%;">Descrição</th>
                <th style="width: 30%;">Equipe</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($itens as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item['descricao'] }}</td>
                    <td>{{ $item['equipe'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>


    <div class="declaration">
        DECLARAÇÃO DE AERONAVEGABILIDADE
    </div>
    <x-pdf.footer :responsavel="$os['responsavel'] ?? null" />
</body>

</html>