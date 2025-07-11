<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Ordem de Serviço</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
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

        .header-bottom {
            justify-content: space-around;
        }

        .header-bottom h1 {
            font-size: 22px;
            font-weight: bold;
        }

        .header {
            page-break-after: avoid;
        }

        .info {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .info.right {
            flex-direction: column;
            text-align: right;
        }

        .info.right,
        .info.left {
            width: 20%;
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

        .item-team-description {
            font-size: 10px;
            color: #555;
            margin-top: 5px;
            display: block;
            line-height: 1.1;
        }

        .final-declaration-wrapper {
            border: 1px solid #000;
            padding: 10px 20px;
            text-align: center;
            page-break-before: auto;
            page-break-inside: avoid;
            page-break-after: avoid;
            width: auto;
            box-sizing: border-box;
            margin-top: 5px;
        }

        .declaration-text {
            font-weight: bold;
            font-size: 17px;
            line-height: 1.5;
            margin-bottom: 60px;
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

        .component-row {
            display: flex;
            border: 1px solid #000;
            border-bottom: none;
            page-break-inside: avoid;
            max-height: 100px;
        }

        .component-header {
            width: 20%;
            padding: 8px 12px;
        }

        .component-body {
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            width: 80%;
            padding: 8px 12px;
            border-left: 1px solid #000;
        }

        .component-body span {
            width: max-content;
            line-height: normal;
            margin-bottom: 4px;
        }

        .component-header {
            font-weight: bold;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .resume-header {
            display: flex;
            justify-content: space-around;
            border: 1px solid #000;
            padding: 20px;
            font-size: 15px;
            page-break-inside: avoid;
        }

        .resume-title {
            border: 1px solid #000;
            padding: 20px;
            border-top: none;
            border-bottom: none;
            text-align: center;
            font-size: 18px
        }

        .resume-row {
            display: flex;
            grid-template-columns: 5% 95%;
            margin-bottom: -1px;
            page-break-inside: avoid;
        }

        .resume-col {
            padding: 6px 10px;
            vertical-align: top;
            line-height: 1.4;
        }

        .resume-col.desc {
            border-left: 1px solid #000;
        }

        .resume-col.index {
            display: flex;
            width: 3%;
            text-align: center;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <x-pdf.header :numero="$os['numero'] ?? null" :prefixo="$os['prefixo'] ?? null" />

    @foreach ($os['componentes'] ?? [] as $i => $comp)
        <div class="component-row">
            <div class="component-header">
                {{ $comp['nome'] ?? 'COMPONENTE' }}
            </div>
            <div class="component-body">
                <span>SN: {{ $comp['sn'] ?? '-' }}</span>
                <span>Modelo: {{ $comp['modelo'] ?? '-' }}</span>
                <span>Fabricante: {{ $comp['fabricante'] ?? '-' }}</span>
                <span>TSN: {{ $comp['tsn'] ?? '-' }}</span>
                <span>TSO: {{ $comp['tso'] ?? '-' }}</span>
                <span>Revisão: {{ $comp['revisao'] ?? '-' }}</span>
                <span>{!! $comp['outros'] ?? '' !!}</span>
            </div>
        </div>
    @endforeach


    <div class="resume-header">
        <div>Data de Início: {{ $os['inicio'] }}</div>
        <div>Término Previsto: {{ $os['termino'] }}</div>
    </div>

    <div class="resume-title">RESUMO DE ITENS EXECUTADOS</div>

    <div style="border: 1px solid #000;">
        @foreach ($itens as $idx => $item)
            <div class="resume-row">
                <div class="resume-col index">
                    {{ $idx + 1 }}
                </div>
                <div class="resume-col desc">
                    {{ $item['descricao'] }}<br>
                    <span class="item-team-description">
                        Equipe: {{ $item['equipe'] }}
                    </span>
                </div>
            </div>
        @endforeach
    </div>

    <x-pdf.footer :responsavel="$os['responsavel'] ?? null" />
</body>

</html>