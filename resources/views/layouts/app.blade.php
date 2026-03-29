<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ config('app.name', 'Nepa Rudraksha') }} – 14 Mukhi Rudraksha</title>
    <meta name="description" content="14 Mukhi Rudraksha – Inner Clarity, Fearless Decisions, Higher Awareness. 5000+ years of sacred usage." />

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700&family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600&family=Jost:wght@300;400;500;600&display=swap"
        rel="stylesheet"
    />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-ivory text-ebony overflow-x-hidden" style="font-family: var(--font-family-body)">

    {{ $slot }}
    @livewireScripts

    @stack('scripts')
</body>
</html>