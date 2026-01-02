<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ajout bénévole – {{ config('app.name', 'Refuge Animalier') }}</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="bg-gray-50 text-gray-800">

<header class="w-full flex flex-col items-center py-8">
    <h1 class="text-4xl font-extrabold text-center">Ajouter un nouveau bénévole</h1>
    <nav class="w-full lg:w-auto">
        <h2 class="text-lg font-semibold visibility: hidden">Navigation principale</h2>
        <ul class="flex gap-4 bg-refuge-ink/5 rounded-xl p-3 lg:p-2">
            <li>
                <a class="px-3 py-2 rounded-md hover:bg-refuge-ink/10 transition" href="{{ route('dashboard.index') }}">Dashboard</a>
            </li>
            <li>
                <a class="px-3 py-2 rounded-md hover:bg-refuge-ink/10 transition" href="{{ route('fiches.index') }}">Fiches bénévoles</a>
            </li>
            <li>
                <a class="px-3 py-2 rounded-md hover:bg-refuge-ink/10 transition"
                   href="{{ route('fiches.index') }}">Fiches animaux</a>
            </li>
            <li>
                <a class="px-3 py-2 rounded-md hover:bg-refuge-ink/10 transition" href="#">Fiches
                    d'adoption</a>
            </li>
        </ul>
    </nav>
</header>

<main class="w-[40%] mx-auto py-10">
    <form action="{{ route('volunteer.store') }}" method="POST" class="space-y-6 bg-white p-8 rounded-xl shadow-md">
        @csrf

        <div class="flex flex-col gap-1">
            <label for="name" class="font-medium">Nom</label>
            <input type="text" id="name" name="name" value=""  placeholder="Nom du bénévole"
                   class="border rounded-lg px-4 py-2 bg-slate-50 focus:bg-white focus:outline-none focus:ring-2 focus:ring-blue-700">
        </div>

        <div class="flex flex-col gap-1">
            <label for="email" class="font-medium">Email</label>
            <input type="email" id="email" name="email" placeholder="benevole@refuge.com" value="" required
                   class="border rounded-lg px-4 py-2 bg-slate-50 focus:bg-white focus:outline-none focus:ring-2 focus:ring-blue-700">
        </div>

        <div class="flex flex-col gap-1">
            <label for="password" class="font-medium">Mot de passe</label>
            <input type="password" id="password" name="password" placeholder="Mot de passe" value="" required
                   class="border rounded-lg px-4 py-2 bg-slate-50 focus:bg-white focus:outline-none focus:ring-2 focus:ring-blue-700">
        </div>

        <input type="hidden" name="role" value="benevole">
        <div class="flex flex-col gap-1">
            <label class="font-medium">Rôle</label>
            <input type="text" value="Bénévole" disabled
                   class="border rounded-lg px-4 py-2 bg-slate-50 focus:outline-none">
        </div>

        <button type="submit"
                class="w-full bg-blue-900 text-white py-3 rounded-xl font-medium hover:bg-blue-800 transition">
            Ajouter le compte bénévole
        </button>
    </form>
</main>


<footer class="text-center text-sm text-white bg-blue-950 py-16">
    © {{ date('Y') }} Refuge Animalier – Tous droits réservés
</footer>

</body>
</html>
