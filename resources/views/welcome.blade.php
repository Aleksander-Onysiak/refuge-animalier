@php use App\Models\Animal @endphp
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('Refuge Animalier', 'Refuge Animalier') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="bg-gradient-to-b from-white to-slate-50 text-refuge-ink antialiased">
<header class="w-full flex flex-col items-center py-8">
    <h1 class="text-4xl font-extrabold text-center">Les Pattes Heureuses</h1>
    <nav class="w-[90%] border-b border-slate-300 pb-3 mb-6">
        <h2 class="visibility: hidden">Navigation principale</h2>
        <ul class="flex justify-center gap-6">
            <li><a class="px-3 py-2 rounded-md hover:bg-refuge-ink/10 transition" href="#">Accueil</a></li>
            <li><a class="px-3 py-2 rounded-md hover:bg-refuge-ink/10 transition"
                   href="{{ route('volunteer.index') }}">Bénévolat</a></li>
            <li><a class="px-3 py-2 rounded-md hover:bg-refuge-ink/10 transition"
                   href="{{ route('animals.index') }}">Animaux</a>
            </li>
            <li><a class="px-3 py-2 rounded-md hover:bg-refuge-ink/10 transition" href="{{ route('before_adoption.index') }}">Avant
                    d'adopter</a></li>
        </ul>
    </nav>
</header>
<main class="min-h-screen container mx-auto p-6 lg:p-12">
    <div class="w-full">
        <div class="container mx-auto px-6">
            <section class="mt-8 bg-white/60 backdrop-blur-sm rounded-lg p-6 shadow who">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-xl font-semibold p-4">Qui sommes nous?</h2>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1">
                    <article class="rounded-xl overflow-hidden bg-white shadow-sm">
                        <div class="p-4">
                            <h3 class="font-semibold">Les Pattes Heureuses</h3>
                            <p class="text-sm text-slate-500">Rue des Tilleuls 32, 4650 HERVE</p>
                            <a href="https://maps.app.goo.gl/hxiGuXzr91bLzL3e8"
                               class="mt-3 inline-block text-refuge-blue hover:underline">Voir sur la carte</a>
                        </div>
                        <div>
                            <img src="src/images/img.png" alt="Photo aérienne du refuge"
                                 class="w-full h-44 object-cover"/>
                        </div>
                    </article>
                </div>
            </section>
        </div>
    </div>

    <div class="container mx-auto px-6">
        @php
            $lastAnimals = \App\Models\Animal::orderBy('created_at', 'desc')
                ->limit(3)
                ->get();
        @endphp
        <section class="mt-8 bg-white/60 backdrop-blur-sm rounded-lg p-6 shadow arrivants">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-xl font-semibold">Nos derniers arrivants</h2>
                <a href="{{ route('animals.index') }}"
                   class="text-sm text-refuge-blue bg-blue-950 text-white p-4 hover:underline rounded-lg">Voir tous nos
                    animaux</a>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                @foreach($lastAnimals as $animal)
                    <article class="rounded-xl overflow-hidden bg-white shadow-md">
                        <img src="https://placedog.net/200/200" alt="Photo de {!! $animal->name !!}"
                             class="w-full h-32 object-cover">
                        <div class="p-4 space-y-2">
                            <h3 class="font-semibold text-lg">{!! $animal->name !!}</h3>
                            <p class="text-sm text-slate-500">{!! $animal->sex !!} - {!! $animal->age !!}</p>
                            <p class="text-sm text-slate-500">{!! $animal->type !!} - {!! $animal->race !!}</p>
                            <a href="{{route('animal.show', $animal)}}"
                               class="block w-full bg-blue-950 text-white text-sm px-4 py-2 rounded-lg text-center hover:bg-blue-900 transition"
                               title="Lien vers la fiche de {!! $animal->name !!}">Voir la fiche de
                                {!! $animal->name !!}
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        </section>
    </div>

    <div class="w-full  mt-8">
        <div class="container mx-auto px-6">
            <section class="bg-white/60 backdrop-blur-sm rounded-2xl p-6 shadow team">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-xl font-semibold">Notre équipe</h2>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    <article class="text-center p-4 rounded-lg bg-white shadow-sm">
                        <img src="src/images/img.png" alt="Photo bénévole"
                             class="mx-auto mb-3 w-24 h-24 rounded-full object-cover"/>
                        <h3 class="font-medium">Camille</h3>
                        <p class="text-sm text-slate-500">Bénévole</p>
                    </article>
                    <article class="text-center p-4 rounded-lg bg-white shadow-sm">
                        <img src="src/images/img.png" alt="Photo bénévole"
                             class="mx-auto mb-3 w-24 h-24 rounded-full object-cover"/>
                        <h3 class="font-medium">Antoine</h3>
                        <p class="text-sm text-slate-500">Soigneur</p>
                    </article>
                    <article class="text-center p-4 rounded-lg bg-white shadow-sm">
                        <img src="src/images/img.png" alt="Photo bénévole"
                             class="mx-auto mb-3 w-24 h-24 rounded-full object-cover"/>
                        <h3 class="font-medium">Sofia</h3>
                        <p class="text-sm text-slate-500">Vétérinaire</p>
                    </article>
                    <article class="text-center p-4 rounded-lg bg-white shadow-sm">
                        <img src="src/images/img.png" alt="Photo bénévole"
                             class="mx-auto mb-3 w-24 h-24 rounded-full object-cover"/>
                        <h3 class="font-medium">Lucas</h3>
                        <p class="text-sm text-slate-500">Bénévole</p>
                    </article>
                </div>
            </section>
        </div>
    </div>

</main>

<footer class="text-center text-sm text-white bg-blue-950 py-16">
    © {{ date('Y') }} Refuge Animalier – Tous droits réservés
</footer>
</body>
</html>
