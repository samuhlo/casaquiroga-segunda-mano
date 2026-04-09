<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $machine->brand->name }} {{ $machine->model }} — {{ $machine->identifier_code }}</title>
    {{-- =============================================================================
         █ [BLADE_PAGE] :: secondhandmachine-print-page
         DESC:   Vista de impresión/PDF para máquina de segunda mano.
         VAR:    $machine (SecondHandMachine) — inyectado desde SecondHandMachinePrintController
         ADAPT: ORIGEN: maquina-product-page → DESTINO: SecondHandMachine
         STATUS: STABLE
         ============================================================================= --}}

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;600&family=IBM+Plex+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'IBM Plex Sans', sans-serif;
            background: #fff;
            color: #111;
            font-size: 13px;
            line-height: 1.5;
        }

        .page {
            max-width: 860px;
            margin: 0 auto;
            padding: 48px 48px 64px;
        }

        /* ── CABECERA ── */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding-bottom: 24px;
            border-bottom: 2px solid #111;
            margin-bottom: 36px;
        }

        .header-left .company {
            font-size: 11px;
            font-weight: 600;
            letter-spacing: .12em;
            text-transform: uppercase;
            color: #999;
            margin-bottom: 6px;
        }

        .header-left .title {
            font-size: 32px;
            font-weight: 700;
            line-height: 1.1;
            letter-spacing: -.02em;
        }

        .header-left .subtitle {
            font-family: 'IBM Plex Mono', monospace;
            font-size: 11px;
            color: #999;
            margin-top: 4px;
        }

        .header-right {
            text-align: right;
        }

        .header-right .ref-label {
            font-size: 10px;
            font-weight: 600;
            letter-spacing: .1em;
            text-transform: uppercase;
            color: #999;
        }

        .header-right .ref {
            font-family: 'IBM Plex Mono', monospace;
            font-size: 14px;
            font-weight: 600;
        }

        .badge {
            display: inline-block;
            margin-top: 8px;
            padding: 3px 10px;
            font-size: 10px;
            font-weight: 600;
            letter-spacing: .08em;
            text-transform: uppercase;
            border-radius: 99px;
            border: 1px solid #111;
        }

        /* ── IMAGEN ── */
        .images-grid {
            display: grid;
            gap: 8px;
            margin-bottom: 32px;
        }

        .images-grid.cols-1 {
            grid-template-columns: 1fr;
        }

        .images-grid.cols-2 {
            grid-template-columns: 1fr 1fr;
        }

        .images-grid.cols-3 {
            grid-template-columns: 1fr 1fr 1fr;
        }

        .images-grid img {
            width: 100%;
            aspect-ratio: 4/3;
            object-fit: cover;
            border-radius: 8px;
        }

        .images-grid.cols-1 img {
            aspect-ratio: 16/7;
        }

        .specs-grid {
            display: grid;
            gap: 1px;
        }

        .specs-grid.specs-1 {
            grid-template-columns: 1fr;
        }

        .specs-grid.specs-2 {
            grid-template-columns: 1fr 1fr;
        }

        .spec-item {
            background: #fff;
            padding: 14px 18px;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            margin: -1px;
        }

        .spec-label {
            font-size: 9px;
            font-weight: 600;
            letter-spacing: .12em;
            text-transform: uppercase;
            color: #9ca3af;
            margin-bottom: 3px;
        }

        .spec-value {
            font-size: 15px;
            font-weight: 600;
            color: #111;
        }

        .spec-value.mono {
            font-family: 'IBM Plex Mono', monospace;
            font-size: 13px;
        }

        .price-box {
            background: #111;
            color: #fff;
            padding: 18px 24px;
            border-radius: 8px;
            margin-bottom: 28px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .price-label {
            font-size: 10px;
            font-weight: 600;
            letter-spacing: .12em;
            text-transform: uppercase;
            color: #9ca3af;
        }

        .price-value {
            font-size: 28px;
            font-weight: 700;
            letter-spacing: -.02em;
        }

        .price-currency {
            font-size: 16px;
            font-weight: 400;
            color: #9ca3af;
        }

        /* ── DESCRIPCIÓN ── */
        .section-label {
            font-size: 9px;
            font-weight: 600;
            letter-spacing: .12em;
            text-transform: uppercase;
            color: #9ca3af;
            margin-top: 8px;
            margin-bottom: 8px;
        }

        .description {
            font-size: 13px;
            color: #444;
            line-height: 1.7;
            padding: 16px 20px;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            margin-bottom: 28px;
        }

        /* ── FOOTER ── */
        .footer {
            margin-top: 48px;
            padding-top: 20px;
            border-top: 1px solid #e5e7eb;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 10px;
            color: #9ca3af;
            font-family: 'IBM Plex Mono', monospace;
        }

        /* ── PRINT ── */
        @media print {
            body {
                background: #fff;
            }

            .page {
                padding: 24px;
                max-width: 100%;
            }

            .no-print {
                display: none !important;
            }

            @page {
                margin: 1cm;
                size: A4;
            }
        }

        /* ── BOTONES PANTALLA ── */
        .screen-actions {
            position: fixed;
            bottom: 24px;
            right: 24px;
            display: flex;
            gap: 10px;
        }

        .btn {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 10px 18px;
            font-family: 'IBM Plex Sans', sans-serif;
            font-size: 13px;
            font-weight: 600;
            border-radius: 99px;
            cursor: pointer;
            border: none;
            transition: opacity .15s;
        }

        .btn:hover {
            opacity: .8;
        }

        .btn-primary {
            background: #111;
            color: #fff;
        }

        .btn-secondary {
            background: #fff;
            color: #111;
            border: 1px solid #e5e7eb;
        }

    </style>
</head>

<body>

    <div class="page">
        {{-- CABECERA --}}
        <div class="header">
            <div class="header-left">
                <p class="company">{{ ucfirst(__('product data sheet')) }}</p>
                <h1 class="title">{{ $machine->model }}</h1>
                <p class="subtitle">{{ $machine->brand?->name }}</p>
            </div>
            <div class="header-right">
                <p class="ref-label">{{ ucfirst(__('identifier_code')) }}</p>
                <p class="ref">{{ $machine->identifier_code }}</p>
                @if($machine->sell_status)
                    <span class="badge">{{ $machine->sell_status->getLabel() }}</span>
                @endif
            </div>
        </div>

        {{-- IMÁGENES --}}
        @if($machine->photos && count($machine->photos) > 0)
            @php
            $imgs = array_slice($machine->photos, 0, 3);
            $cols = count($imgs) === 1 ? 'cols-1' : (count($imgs) === 2 ? 'cols-2' : 'cols-3');
            @endphp
        <div class="images-grid {{ $cols }}">
            @foreach($imgs as $img)
                <img src="/storage/{{ $img }}" alt="{{ $machine->model }}">
            @endforeach
        </div>
        @endif

        {{-- PRECIO --}}
        <div class="price-box">
            <p class="price-label">{{ ucfirst(__('selling_price')) }}</p>
            <p class="price-value">
                {{ number_format($machine->selling_price, 0, ',', '.') }}
                <span class="price-currency">EUR</span>
            </p>
        </div>

        {{-- SPECS --}}
        @php
            $specs = [];
            $specs[] = [ucfirst(__('brand')), $machine->brand?->name ?? '—', false];
            $specs[] = [ucfirst(__('model')), $machine->model ?? '—', false];
            $specs[] = [ucfirst(__('work_hours')), number_format($machine->work_hours ?? 0, 0, ',', '.') . ' h', false];
            $specs[] = [ucfirst(__('identifier_code')), $machine->identifier_code ?? '—', true];
        @endphp

        @if(count($specs))
            <div class="specs-grid specs-{{ min(count($specs), 2) }}">
                @foreach($specs as [$label, $value, $mono])
                    <div class="spec-item">
                        <p class="spec-label">{{ $label }}</p>
                        <p class="spec-value {{ $mono ? 'mono' : '' }}">{{ $value }}</p>
                    </div>
                @endforeach
            </div>
        @endif

        {{-- DESCRIPCIÓN --}}
        @if($machine->description)
            <p class="section-label">{{ ucfirst(__('description'))}}</p>
            <div class="description">{!! $machine->description !!}</div>
        @endif

        {{-- FOOTER --}}
        <div class="footer">
            <span>{{ config('app.name')}}</span>
            <span>{{ $machine->identifier_code }} — {{ ucfirst(__('created_at')) . ' ' . now()->format('d/m/Y') }}</span>
        </div>

    </div>
</body>
</html>
