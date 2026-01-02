<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>{{ $animal->name }} – Fiche animal</title>
</head>
<body class="bg-gradient-to-b from-gray-50 to-gray-100 text-gray-800">
<header>
    <h1 class="text-4xl font-extrabold text-center">Fiche de l'animal</h1>
    <nav class="w-[90%] border-b border-slate-300 pb-3 mb-6">
        <h2 class="text-lg font-semibold visibility: hidden">Navigation principale</h2>
        <ul class="flex justify-center gap-6">
            <li><a class="px-3 py-2 rounded-md hover:bg-refuge-ink/10 transition" href="/">Accueil</a></li>
            <li><a class="px-3 py-2 rounded-md hover:bg-refuge-ink/10 transition" href="{{ route('volunteer.index') }}">Bénévolat</a>
            </li>
            <li><a class="px-3 py-2 rounded-md hover:bg-refuge-ink/10 transition" href="{{ route('animals.index') }}">Animaux</a>
            </li>
            <li><a class="px-3 py-2 rounded-md hover:bg-refuge-ink/10 transition"
                   href="{{ route('before_adoption.index') }}">Avant d'adopter</a></li>
        </ul>
    </nav>
</header>
<main class="container mx-auto max-w-4xl py-16 px-4">

    <a href="{{ route('animals.index') }}"
       class="inline-block mb-6 text-blue-900 font-semibold hover:text-blue-700 transition">
        ← Retour aux animaux
    </a>

    <section class="bg-white rounded-3xl shadow-lg p-8 grid grid-cols-1 md:grid-cols-2 gap-8 items-center">

        <div class="flex justify-center">
            <img src="{{ $animal->image ?? 'https://placedog.net/400/400' }}"
                 alt="Photo de {{ $animal->name }}"
                 class="rounded-2xl object-cover w-full h-80 md:h-[350px] shadow-md">
        </div>

        <div class="space-y-6">
            <h2 class="text-4xl font-extrabold text-gray-900">{{ $animal->name }}</h2>

            <div class="flex flex-wrap gap-2">
                <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm font-medium">
                    {{ ucfirst($animal->type) }}
                </span>
                <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm font-medium">
                    {{ ucfirst($animal->status) }}
                </span>
            </div>

            <ul class="space-y-2 text-gray-700">
                <li><strong>Race :</strong> {{ $animal->race ?? 'Non renseignée' }}</li>
                <li><strong>Sexe :</strong> {{ $animal->sex === 'male' ? 'Mâle' : 'Femelle' }}</li>
                <li><strong>Couleur :</strong> {{ ucfirst($animal->color ?? 'Non renseignée') }}</li>
            </ul>

            <p class="mt-4 text-gray-600 leading-relaxed">
                {{ $animal->description ?? 'Cet animal attend une famille aimante.' }}
            </p>

            <a href="{{ route('adoption.index', $animal) }}"
               class="mt-6 w-full md:w-auto bg-green-600 text-white px-6 py-2 rounded-xl hover:bg-green-500 transition inline-block text-center">
                Adopter {{ $animal->name }}
            </a>

        </div>

    </section>

</main>
<footer class="mt-12 text-center text-sm text-white bg-blue-950 py-16">
    Les Pattes Heureuses
</footer>
</body>
</html>
