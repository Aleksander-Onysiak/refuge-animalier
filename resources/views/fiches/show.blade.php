<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $animal->name }} – Fiche animal</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">
<header class="w-full flex flex-col items-center py-8">
    <h1 class="text-4xl font-extrabold text-center">Fiche de {{ $animal->name }}</h1>

    <nav class="w-full lg:w-auto">
        <h2 class="text-lg font-semibold visibility: hidden">Navigation principale</h2>
        <ul class="flex gap-4 bg-refuge-ink/5 rounded-xl p-3 lg:p-2">
            <li>
                <a class="px-3 py-2 rounded-md hover:bg-refuge-ink/10 transition" href="{{ route('dashboard.index') }}">Dashboard</a>
            </li>
            <li>
                <a class="px-3 py-2 rounded-md hover:bg-refuge-ink/10 transition" href="#">Fiches bénévoles</a>
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
<main class="container mx-auto max-w-4xl py-2">
    <a href="{{ route('fiches.index') }}" class="text-blue-900 hover:underline mb-6 inline-block">
        ← Retour aux fiches
    </a>

    <section class="bg-white rounded-2xl shadow p-8 grid grid-cols-1 md:grid-cols-2 gap-8">
        <img src="{{ $animal->image ?? 'https://placedog.net/400/400' }}"
             alt="Photo de {{ $animal->name }}"
             class="rounded-xl object-cover w-full h-80">

        <div class="space-y-4">
            <h2 class="text-3xl font-extrabold">{{ $animal->name }}</h2>

            <ul class="space-y-2">
                <li><strong>Type :</strong> {{ ucfirst($animal->type) }}</li>
                <li><strong>Race :</strong> {{ $animal->race ?? 'Non renseignée' }}</li>
                <li><strong>Sexe :</strong> {{ $animal->sex === 'male' ? 'Mâle' : 'Femelle' }}</li>
                <li><strong>Couleur :</strong> {{ ucfirst($animal->color ?? 'Non renseignée') }}</li>
                <li><strong>Statut :</strong> {{ ucfirst($animal->status ?? 'Non renseigné') }}</li>
            </ul>

            <p class="pt-4">{{ $animal->description ?? 'Cet animal attend une famille aimante.' }}</p>
            <a href="{{ route('fiches.edit', $animal) }}"
               class="mt-6 inline-block bg-yellow-500 text-white px-6 py-2 rounded-xl hover:bg-yellow-400 transition">
                Modifier la fiche
            </a>

        </div>
    </section>
</main>

<footer class="text-center text-sm text-white bg-blue-950 py-16">
    © {{ date('Y') }} Refuge Animalier – Tous droits réservés
</footer>
</body>
</html>
