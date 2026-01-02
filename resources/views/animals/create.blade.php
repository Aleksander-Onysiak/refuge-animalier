@php use App\Models\Animal @endphp
    <!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ajout animal – {{ config('app.name', 'Refuge Animalier') }}</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="bg-gray-50 text-gray-800">

<header class="w-full flex flex-col items-center py-8">
    <h1 class="text-4xl font-extrabold text-center">
        Ajouter un nouvel animal
    </h1>

    <nav class="w-[90%] border-b border-slate-300 pb-3 mb-6">
        <h2 class="sr-only">Navigation principale</h2>
        <ul class="flex justify-center gap-6">
            <li>
                <a class="px-3 py-2 rounded-md hover:bg-blue-950/10 transition" href="/">
                    Accueil
                </a>
            </li>
            <li>
                <a class="px-3 py-2 rounded-md hover:bg-blue-950/10 transition" href="{{ route('volunteer.index') }}">
                    Bénévolat
                </a>
            </li>
            <li>
                <a class="px-3 py-2 rounded-md hover:bg-blue-950/10 transition" href="{{ route('animals.index') }}">
                    Animaux
                </a>
            </li>
            <li>
                <a class="px-3 py-2 rounded-md hover:bg-blue-950/10 transition"
                   href="{{ route('before_adoption.index') }}">
                    Avant d’adopter
                </a>
            </li>
        </ul>
    </nav>
</header>

<main class="w-[40%] mx-auto py-10">
    <form
        action="{!! route('animals.store') !!}"
        method="POST"
        enctype="multipart/form-data"
        class="space-y-8 bg-white p-8 rounded-xl shadow-md"
    >
        @csrf

        <div class="flex flex-col gap-1">
            <label for="name" class="font-medium">Nom</label>
            <input
                type="text"
                id="name"
                name="name"
                placeholder="Nom de l'animal"
                class="border rounded-lg px-4 py-2 bg-slate-50
                       focus:bg-white focus:outline-none
                       focus:ring-2 focus:ring-blue-700"
            >
        </div>

        <div>
            <h2 class="font-medium mb-2">Sexe</h2>
            <div class="flex gap-6">
                <label class="flex items-center gap-2">
                    <input type="radio" name="sex" value="male" class="accent-blue-700">
                    <span>Mâle</span>
                </label>

                <label class="flex items-center gap-2">
                    <input type="radio" name="sex" value="female" class="accent-blue-700">
                    <span>Femelle</span>
                </label>
            </div>
        </div>

        <div class="flex flex-col gap-1">
            <label for="type" class="font-medium">Type de l'animal</label>
            <select
                id="type"
                name="type"
                class="border rounded-lg px-4 py-2 bg-slate-50
                       focus:bg-white focus:ring-2 focus:ring-blue-700"
            >
                <option value="cat">Chat</option>
                <option value="dog">Chien</option>
                <option value="parrot">Perroquet</option>
                <option value="rabbit">Lapin</option>
            </select>
        </div>

        <div class="flex flex-col gap-1">
            <label for="color" class="font-medium">Couleur</label>
            <select
                id="color"
                name="color"
                class="border rounded-lg px-4 py-2 bg-slate-50
                       focus:bg-white focus:ring-2 focus:ring-blue-700"
            >
                <option value="brown">Brun</option>
                <option value="white">Blanc</option>
                <option value="black">Noir</option>
                <option value="gray">Gris</option>
            </select>
        </div>

        <div class="flex flex-col gap-1">
            <label for="status" class="font-medium">Statut</label>
            <select
                id="status"
                name="status"
                class="border rounded-lg px-4 py-2 bg-slate-50
                       focus:bg-white focus:ring-2 focus:ring-blue-700"
            >
                <option value="available">Disponible</option>
                <option value="care">En soins</option>
                <option value="process">En cours d’adoption</option>
            </select>
        </div>

        <div class="flex flex-col gap-1">
            <label for="race" class="font-medium">Race</label>
            <input
                type="text"
                id="race"
                name="race"
                placeholder="Race de l'animal"
                class="border rounded-lg px-4 py-2 bg-slate-50
                       focus:bg-white focus:ring-2 focus:ring-blue-700"
            >
        </div>

        <div class="flex flex-col gap-1">
            <label for="image" class="font-medium">
                Image de l’animal
            </label>

            <input
                type="file"
                id="image"
                name="image"
                accept="image/*"
                class="border rounded-lg px-4 py-2 bg-slate-50
                       file:mr-4 file:py-2 file:px-4
                       file:rounded-lg file:border-0
                       file:bg-blue-900 file:text-white
                       hover:file:bg-blue-800
                       focus:outline-none focus:ring-2 focus:ring-blue-700"
            >
            <p class="text-sm text-gray-500">
                Formats acceptés : JPG, PNG – Taille max recommandée : 2 Mo
            </p>
        </div>

        <button
            type="submit"
            class="w-full bg-blue-900 text-white py-3 rounded-xl
                   font-medium hover:bg-blue-800 transition"
        >
            Ajouter l’animal
        </button>

    </form>
</main>

<footer class="text-center text-sm text-white bg-blue-950 py-16">
    © {{ date('Y') }} Refuge Animalier – Tous droits réservés
</footer>

</body>
</html>
