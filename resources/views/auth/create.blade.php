<!DOCTYPE html>
<html>

<head>
    <title>S'inscrire</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body class="bg-gray-100 flex flex-col items-center justify-center h-screen w-full">

    <div class="w-full max-w-xl mx-auto p-6 px-4">
        <h1 class="text-2xl font-bold mb-6 text-center">Inscription</h1>

        <form method="POST" class="w-full">
            @csrf
            <div class="mb-4">
                @error('first_name')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
                <label for="first_name" class="sr-only">Prénom</label>
                <input id="first_name" type="text" name="first_name" value="{{ old('first_name') }}" required autofocus class="border border-gray-300 rounded px-3 py-2 w-full text-xs" placeholder="Prénom">
            </div>

            <div class="mb-4">
                @error('last_name')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
                <label for="last_name" class="sr-only">Nom de famille</label>
                <input id="last_name" type="text" name="last_name" value="{{ old('last_name') }}" required class="border border-gray-300 rounded px-3 py-2 w-full text-xs" placeholder="Nom de famille">
            </div>

            <div class="mb-4">
                @error('email')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
                <label for="email" class="sr-only">Courriel</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required class="border border-gray-300 rounded px-3 py-2 w-full text-xs" placeholder="Courriel">
            </div>

            <div class="mb-4">
                @error('password')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
                <label for="password" class="sr-only">Mot de passe</label>
                <input id="password" type="password" name="password" required class="border border-gray-300 rounded px-3 py-2 w-full text-xs" placeholder="Mot de passe">
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="sr-only">Confirmation du mot de passe</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required class="border border-gray-300 rounded px-3 py-2 w-full text-xs" placeholder="Confirmation de mot de passe">
            </div>

            <div class="flex justify-between items-center">
                <a href="{{ route('login') }}" class="text-red-wine text-sm">Retour à la connection</a>
                <button type="submit" class="bg-red-wine text-white px-4 py-2 rounded">Je m'inscris</button>
            </div>

        </form>
    </div>
</body>

</html>