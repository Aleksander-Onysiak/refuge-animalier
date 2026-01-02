<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fiches animaux – Refuge Animalier</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">

<header class="w-full flex flex-col items-center py-8">
    <h1 class="text-4xl font-extrabold text-center">Fiches des animaux</h1>
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

<main class="container mx-auto max-w-[90%]">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">

        <article
            class="rounded-xl overflow-hidden bg-white shadow-md border-2 border-slate-300 flex items-center justify-center cursor-pointer hover:border-blue-700 transition group">
            <h2 class="text-lg font-semibold visibility: hidden">Ajouter un animal</h2>
            <a href="{{ route('fiches.create') }}"
               class="w-full h-full flex flex-col items-center justify-center py-10">
                <div
                    class="w-16 h-16 rounded-full border-2 border-slate-300 group-hover:border-blue-700 flex items-center justify-center text-slate-400 group-hover:text-blue-700 text-4xl font-bold transition">
                    +
                </div>
                <p class="mt-4 text-slate-500 group-hover:text-blue-700 font-medium transition">Ajouter un animal /
                    fiche</p>
            </a>
        </article>

        @foreach($animals as $animal)
            <article class="rounded-xl overflow-hidden bg-white shadow-md">
                <img src="{{ $animal->image ? asset('storage/' . $animal->image) : 'https://placedog.net/200/200' }}"
                     alt="Photo de {{ $animal->name }}" class="w-full h-32 object-cover">
                <div class="p-4 space-y-2">
                    <h2 class="font-semibold text-lg">{{ $animal->name }}</h2>
                    <p class="text-sm text-slate-500">{{ $animal->sex }} - {{ $animal->age ?? 'N/A' }}</p>
                    <p class="text-sm text-slate-500">{{ $animal->type }} - {{ $animal->race ?? 'Non renseignée' }}</p>
                    <p class="text-sm text-green-500 font-medium">{{ ucfirst($animal->status) }}</p>
                    <a href="{{ route('fiche.show', $animal) }}"
                       class="block w-full bg-blue-950 text-white text-sm px-4 py-2 rounded-lg text-center hover:bg-blue-900 transition">
                        Voir la fiche
                    </a>
                </div>
            </article>
        @endforeach

    </div>
</main>

<footer class="text-center text-sm text-white bg-blue-950 py-16">
    © {{ date('Y') }} Refuge Animalier – Tous droits réservés
</footer>

</body>
</html>
