<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vino</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
</head>

<body>

    @livewire('layouts.header')

    <div class="">
        {{ $slot }}
    </div>

    @livewire('layouts.footer')
    @livewireScripts
</body>

</html>