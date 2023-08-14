<!DOCTYPE html>
<html lang="en"class='flex min-h-full'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vino</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js"></script>
    @livewireStyles
</head>
<body class="flex flex-col">
    @livewire('layouts.header')

    <div class="flex flex-col grow">
        {{ $slot }}
    </div>

    @livewire('layouts.footer')
    @livewireScripts
</body>
</html>