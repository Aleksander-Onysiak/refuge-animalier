<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fiches animaux – Refuge</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

<header class="w-full py-8 bg-white shadow mb-6">
    <h1 class="text-4xl font-extrabold text-center">Fiches animaux</h1>
</header>

<main class="container mx-auto px-6">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @forelse($animals as $animal)
            <article class="bg-white p-4 rounded-2xl shadow hover:shadow-md transition">
                <img src="{{ $animal->image ?? 'https://placedog.net/200/200' }}"
                     alt="{{ $animal->name }}"
                     class="w-full h-48 object-cover rounded-lg mb-3">
                <h2 class="font-semibold text-xl">{{ $animal->name }}</h2>
                <p class="text-sm text-gray-500">{{ ucfirst($animal->type) }} – {{ $animal->race ?? 'Race inconnue' }}</p>
                <p class="text-sm text-gray-500">{{ $animal->sex === 'male' ? 'Mâle' : 'Femelle' }}</p>
                <a href="{{ route('fiche.show', $animal) }}"
                   class="mt-3 block text-center bg-blue-900 text-white py-2 rounded-lg hover:bg-blue-800 transition">
                    Voir la fiche
                </a>
            </article>
        @empty
            <p class="col-span-full text-center text-gray-600">Aucun animal trouvé.</p>
        @endforelse
    </div>
</main>

<footer class="mt-12 text-center text-sm text-gray-500">
    © {{ date('Y') }} Refuge – Tous droits réservés
</footer>

</body>
</html>
