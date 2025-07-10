<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Ordem de Serviço</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            margin: 0 30px;
        }

        .header,
        .header-inner,
        .header-bottom {
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

        .info.right {
            flex-direction: column;
            text-align: right;
        }

        .info.center {
            flex-direction: column;
            padding: 50px;
            border-left: 1px solid #000;
            border-right: 1px solid #000;
            text-align: center;
        }

        .info img {
            width: 120px;
        }

        .info.center p,
        .info.right p {
            margin: 0;
            font-size: 12px;
        }

        .info.center p.title {
            font-weight: bold;
            font-size: 18px;
        }

        .header-bottom {
            justify-content: space-between;
            margin-top: 8px;
        }

        .header-bottom h1 {
            font-size: 22px;
            font-weight: bold;
        }

        h1 {
            font-size: 18px;
            margin: 10px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 12px;
            page-break-inside: auto;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 6px 10px;
            text-align: left;
            vertical-align: top;
            line-height: 1.4;
        }

        .components-table th {
            width: 18%;
            text-align: center;
            vertical-align: middle;
            font-weight: bold;
        }

        .components-table td {
            padding: 8px 12px;
        }

        .resume-table th {
            text-align: center;
            vertical-align: middle;
        }

        .resume-table .table-title {
            font-weight: bold;
            font-size: 14px;
        }

        .resume-table .table-subtitle {
            font-weight: normal;
            font-size: 12px;
            border-top: none;
        }

        .resume-table thead {
            display: table-header-group;
            page-break-inside: avoid;
        }

        .resume-table tbody tr {
            page-break-inside: avoid !important;
        }

        .item-team-description {
            font-size: 10px;
            color: #555;
            margin-top: 5px;
            display: block;
            line-height: 1.2;
        }

        .header {
            page-break-after: avoid;
        }

        .components-table {
            page-break-before: auto;
            page-break-after: avoid;
        }

        .resume-table {
            page-break-before: auto;
            page-break-after: avoid;
        }

        .final-declaration-wrapper {
            border: 1px solid #000;
            border-top: none;
            padding: 15px 20px;
            text-align: center;
            page-break-before: auto;
            page-break-inside: avoid;
            page-break-after: avoid;
            width: auto;
            box-sizing: border-box;
        }

        .declaration-text {
            font-weight: bold;
            font-size: 17px;
            line-height: 1.5;
            margin-bottom: 30px;
        }

        .signature-line-area {
            margin-top: 15px;
        }

        .signature-line {
            width: 500px;
            height: 1px;
            background-color: #000;
            margin: 0 auto 5px auto;
        }

        .signature-details {
            font-size: 13px;
            line-height: 1.4;
            margin-top: 5px;
        }

        .signature-details strong {
            display: block;
        }
    </style>
</head>

<body>
    <x-pdf.header :numero="$os['numero'] ?? null" :prefixo="$os['prefixo'] ?? null" />

    <table class="components-table">
        @foreach ($os['componentes'] ?? [] as $componente)
            <tr>
                <th>{{ $componente['nome'] ?? 'COMPONENTE' }}</th>
                <td>
                    SN: {{ $componente['sn'] ?? '-' }}<br>
                    Modelo: {{ $componente['modelo'] ?? '-' }}<br>
                    Fabricante: {{ $componente['fabricante'] ?? '-' }}<br>
                    TSN: {{ $componente['tsn'] ?? '-' }}<br>
                    TSO: {{ $componente['tso'] ?? '-' }}<br>
                    Revisão: {{ $componente['revisao'] ?? '-' }}<br>
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
        </thead>
        <tbody>
            @foreach ($itens as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>
                        {{ $item['descricao'] }}<br>
                        <span class="item-team-description">Equipe: {{ $item['equipe'] }}</span>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <x-pdf.footer :responsavel="$os['responsavel'] ?? null" />
</body>

</html>