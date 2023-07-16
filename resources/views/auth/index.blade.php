<!DOCTYPE html>
<html>
<head>
    <title>Page de connexion</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="flex items-center justify-center h-screen">
        <div class="bg-white p-8 rounded shadow w-64">
            <h1 class="text-2xl font-bold mb-4">Connexion</h1>

            @if(session('success'))
                <div class="bg-green-200 text-green-800 p-2 mb-4 rounded">{{ session('success') }}</div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                @if($errors->any())
                    <div class="bg-red-200 text-red-800 p-2 mb-4 rounded">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li class="text-sm">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="mb-4">
                    <label for="email" class="block font-medium">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required
                           class="border-gray-300 rounded-md p-2 w-full">
                </div>

                <div class="mb-4">
                    <label for="password" class="block font-medium">Mot de passe</label>
                    <input id="password" type="password" name="password" required
                           class="border-gray-300 rounded-md p-2 w-full">
                </div>

                <div class="mb-4">
                    <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded w-full">Se connecter</button>
                </div>
            </form>

            <div class="text-center">
                <span class="text-sm">Vous n'avez pas de compte ?</span>
                <a href="{{ route('register') }}" class="text-blue-500 font-medium">S'inscrire</a>
            </div>
        </div>
    </div>
</body>
</html>
