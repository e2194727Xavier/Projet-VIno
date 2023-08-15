<!DOCTYPE html>
<html>

<head>
    <title>Page de connexion</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body class="bg-gray-100 flex flex-col items-center justify-center h-screen w-full gap-11">
    <!-- logo -->

    <div class="w-full px-4">
        <h1 class="text-center text-xl my-4 font-bold text-gray-700">Votre vin, à portée de main.</h1>
    </div>
    <div class="w-full px-4 ">
        @if(session('success'))
        <div class="bg-green-200 text-green-800 p-2 mb-4 rounded">{{ session('success') }}</div>
        @endif
        <form method="POST" action="{{ route('login') }}" class="w-full flex flex-col">
            @csrf
            @if($errors->any())
            <div class="bg-red-200 text-red-800 p-2 mb-4 rounded">
                <ul>
                    @foreach($errors->all() as $error)
                    <li class="text-xs">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="mb-6">
                <label for="email" class="sr-only">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required class="border-gray-200 rounded-md p-2 w-full" placeholder="Courriel">
            </div>

            <div class="mb-6">
                <label for="password" class="sr-only">Mot de passe</label>
                <input id="password" type="password" name="password" required class="border-gray-200 rounded-md p-2 w-full" placeholder="Mot de passe">
            </div>

                <button type="submit" class="rounded-md bg-red-wine mt-2 px-3 py-2 text-xs font-semibold text-white shadow-sm">Se connecter</button>
        </form>

        <div class="text-center flex flex-col">
            <span class="text-sm mt-4">Vous n'avez pas de compte ?</span>
            <a href="{{ route('register') }}" class="text-red-wine text-md">Inscrivez-vous ici  </a>
        </div>
        <p class="text-xs my-6 text-center">@Copyright</p>
    </div>

</body>

</html>
