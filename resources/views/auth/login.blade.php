<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Refuge Animalier</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>
</head>
<body class="bg-gradient-to-b from-white to-slate-50 text-refuge-ink antialiased">

<main class="min-h-screen flex items-center justify-center p-6">
    <div class="w-full max-w-md bg-white/60 backdrop-blur-sm rounded-2xl shadow-lg p-8">
        <h1 class="text-2xl font-extrabold text-center mb-6">Connexion</h1>

        @if( session('success'))
            <div class="mb-4 text-green-700 bg-green-100 p-3 rounded">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="mb-4 text-red-700 bg-red-100 p-3 rounded">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('login.authenticate') }}" class="space-y-4">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium mb-1">Adresse email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required
                       class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-refuge-accent">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium mb-1">Mot de passe</label>
                <input type="password" name="password" id="password" required
                       class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-refuge-accent">
            </div>

            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input type="checkbox" name="remember" id="remember" class="mr-2">
                    <label for="remember" class="text-sm">Se souvenir de moi</label>
                </div>
                <a href="#" class="text-sm text-refuge-blue hover:underline">Mot de passe oublié ?</a>
            </div>

            <button type="submit"
                    class="w-full bg-blue-950 text-white py-2 rounded-xl font-semibold hover:bg-refuge-accent-dark transition">
                Se connecter
            </button>
        </form>
    </div>
</main>

</body>
</html>
