@php use App\Models\Animal @endphp
    <!doctype html>
<html lang="{!! app()->getLocale() !!}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body>
<header class="w-full flex flex-col items-center py-8">
    <h1 class="text-4xl font-extrabold text-center">
        Toutes les notifications
    </h1>
    <nav class="w-full lg:w-auto">
        <h2 class="text-lg font-semibold hidden">Navigation principale</h2>
        <ul class="flex gap-4 bg-refuge-ink/5 rounded-xl p-3 lg:p-2">
            <li>
                <a class="px-3 py-2 rounded-md hover:bg-refuge-ink/10 transition" href="{{ route('dashboard.index') }}">Dashboard</a>
            </li>
            <li>
                <a class="px-3 py-2 rounded-md hover:bg-refuge-ink/10 transition" href="#">Fiches bénévoles</a>
            </li>
            <li>
                <a class="px-3 py-2 rounded-md hover:bg-refuge-ink/10 transition"
                   href="{{ route('animals.index') }}">Fiches animaux</a>
            </li>
            <li>
                <a class="px-3 py-2 rounded-md hover:bg-refuge-ink/10 transition" href="#">Fiches
                    d'adoption</a>
            </li>
        </ul>
    </nav>
</header>
<main>
    <section class="max-w-5xl mx-auto mt-12 space-y-12">

        <h2 class="text-3xl font-bold text-center mb-8">Notifications récentes</h2>

        <article class="border rounded-xl overflow-hidden shadow-sm bg-white">
            <div class="grid grid-cols-3 bg-blue-950 text-white px-6 py-4 text-sm font-medium">
                <div>
                    <div class="opacity-80">Envoyé le :</div>
                    <div>14 Septembre 2025</div>
                </div>
                <div>
                    <div class="opacity-80">Reçu à :</div>
                    <div>10 h 34</div>
                </div>
                <div>
                    <div class="opacity-80">À l’intention de :</div>
                    <div>Elise</div>
                </div>
            </div>

            <div class="flex flex-col lg:flex-row justify-between items-center gap-6 px-6 py-6">

                <div class="flex items-center gap-4">
                    <img src="https://placekitten.com/200/200" class="w-24 h-24 rounded-full object-cover" alt="">
                    <p class="font-medium text-lg leading-snug">
                        Moka – chien mâle : demande d’adoption en cours de validation
                    </p>
                </div>

                <div class="flex flex-col items-center gap-3">

                    <a class="px-6 py-2 bg-blue-950 text-white rounded-full hover:bg-blue-900 transition"
                       href="">
                        Voir la discussion
                    </a>

                    <a class="w-full text-center px-6 py-2 border-2 border-blue-400 text-blue-400 rounded-full hover:bg-red-50 transition"
                       href="">
                        Archiver
                    </a>

                    <a class="w-full text-center px-6 py-2 border-2 border-red-700 text-red-700 rounded-full hover:bg-red-100 transition"
                       href="">
                        Supprimer
                    </a>

                </div>

            </div>
        </article>



    </section>

</main>
<footer class="text-center text-sm text-white bg-blue-950 py-16">
    © {{ date('Y') }} Refuge Animalier – Tous droits réservés
</footer>
</body>

</html>
