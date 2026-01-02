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
<main class="min-h-screen container mx-auto p-6 lg:p-12">
    <header class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-6 mb-8">
        <div class="flex items-center gap-4">
            <div
                class="w-14 h-14 rounded-full bg-refuge-accent/20 flex items-center justify-center text-refuge-accent font-bold text-xl">
            </div>
            <div>
                <h1 class="text-2xl lg:text-3xl font-extrabold leading-tight">Dashboard - Elise</h1>
            </div>
        </div>

        <nav class="w-full lg:w-auto">
            <h2 class="text-lg font-semibold visibility: hidden">Navigation principale</h2>
            <ul class="flex gap-4 bg-refuge-ink/5 rounded-xl p-3 lg:p-2">
                <li>
                    <a class="px-3 py-2 rounded-md hover:bg-refuge-ink/10 transition"
                       href="{{ route('welcome.index') }}">Page d'accueil</a>
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

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <aside class="lg:col-span-1 bg-white/60 backdrop-blur-sm rounded-2xl p-6 shadow">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-lg font-semibold">Notifications</h2>
                <span class="text-sm text-slate-500">3 non lues</span>
            </div>

            <article class="space-y-2 mb-4 p-3 rounded-lg border border-slate-100 hover:shadow-md transition">
                <h3 class="font-medium">Adoption — Moka</h3>
                <p class="text-sm text-slate-600">Sarah a laissé un message concernant Moka.</p>
                <a href="{{ route('notifications.index') }}"
                   class="mt-3 block w-full text-center bg-blue-950 text-white text-sm px-4 py-2 rounded-lg hover:bg-blue-900 transition hover:underline">Consulter
                    la page
                    d’adoption</a>
            </article>

            <article class="space-y-2 mb-4 p-3 rounded-lg border border-slate-100 hover:shadow-md transition">
                <h3 class="font-medium">Nouveau message — Demande d'accueil</h3>
                <p class="text-sm text-slate-600">Un visiteur souhaite adopter un chaton.</p>
                <a href="{{ route('notifications.index') }}"
                   class="mt-3 block w-full text-center bg-blue-950 text-white text-sm px-4 py-2 rounded-lg hover:bg-blue-900 transition hover:underline">Voir
                    la demande</a>
            </article>

            <article class="space-y-2 p-3 rounded-lg border border-red-600 hover:shadow-md transition">
                <h3 class="font-medium"><span>&#9758; </span>Rappel — Soins vétérinaires</h3>
                <p class="text-sm text-slate-600">Vaccinations prévues pour la semaine prochaine.</p>
            </article>

            <p>
                <a href="/{{ route('notifications.index') }}"
                   class="mt-3 block w-full text-center bg-blue-950 text-white text-sm px-4 py-2 rounded-lg hover:bg-blue-900 transition hover:underline">Voir
                    toutes les
                    notifications</a>
            </p>
        </aside>

        <section class="lg:col-span-2 flex flex-col justify-start space-y-8">

            <div
                class="bg-white/60 backdrop-blur-sm rounded-2xl p-6 shadow flex flex-col lg:flex-row items-center gap-6">
                <div class="flex-1 min-w-0">
                    <h2 class="text-xl font-semibold">Statistiques</h2>
                    <div class="mt-4 grid grid-cols-3 gap-4">
                        <div class="p-4 rounded-lg bg-refuge-ink/5">
                            <div class="text-xs text-slate-500">Adoptions</div>
                            <div class="text-2xl font-bold">12</div>
                        </div>
                        <div class="p-4 rounded-lg bg-refuge-ink/5">
                            <div class="text-xs text-slate-500">Nouveaux arrivants</div>
                            <div class="text-2xl font-bold">8</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white/60 backdrop-blur-sm rounded-2xl p-6 shadow">
                <h2 class="text-xl font-semibold mb-4">Rapports récents</h2>

                <div class="space-y-4">
                    <article class="p-4 bg-white rounded-lg shadow-sm border border-slate-100">
                        <h3 class="font-medium">Bilan hebdomadaire</h3>
                        <p class="text-sm text-slate-600">Résumé des arrivées, soins et sorties du refuge.</p>
                    </article>

                    <article class="p-4 bg-white rounded-lg shadow-sm border border-slate-100">
                        <h3 class="font-medium">Mises à jour vétérinaires</h3>
                        <p class="text-sm text-slate-600">Derniers comptes rendus des visites vétérinaires.</p>
                    </article>

                    <article class="p-4 bg-white rounded-lg shadow-sm border border-slate-100">
                        <h3 class="font-medium">Journal d’activité</h3>
                        <p class="text-sm text-slate-600">Activités enregistrées par les bénévoles cette semaine.</p>
                    </article>
                </div>
            </div>

        </section>

    </div>

    <section class="mt-8 bg-white/60 backdrop-blur-sm rounded-2xl p-6 shadow">
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-xl font-semibold">Demandes pour fiches</h2>
            <a href="{{ route('animals.index') }}" class="mt-3 inline-block text-refuge-blue hover:underline">Voir
                toutes les demandes</a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <article class="rounded-xl overflow-hidden bg-white shadow-sm">
                <img src="src/images/img.png" alt="Photo animal" class="w-full h-44 object-cover"/>
                <div class="p-4">
                    <h3 class="font-semibold">Moka</h3>
                    <p class="text-sm text-slate-500">Femelle, 2 ans — Sociable</p>
                    <a href="{{ route('animals.index') }}" class="mt-3 inline-block text-refuge-blue hover:underline">Consulter
                        la demande</a>
                </div>
            </article>
            <article class="rounded-xl overflow-hidden bg-white shadow-sm">
                <img src="src/images/img.png" alt="Photo animal" class="w-full h-44 object-cover"/>
                <div class="p-4">
                    <h3 class="font-semibold">Rex</h3>
                    <p class="text-sm text-slate-500">Mâle, 4 ans — Calme</p>
                    <a href="{{ route('animals.index') }}" class="mt-3 inline-block text-refuge-blue hover:underline">Consulter
                        la demande</a>
                </div>
            </article>
            <article class="rounded-xl overflow-hidden bg-white shadow-sm">
                <img src="src/images/img.png" alt="Photo animal" class="w-full h-44 object-cover"/>
                <div class="p-4">
                    <h3 class="font-semibold">Luna</h3>
                    <p class="text-sm text-slate-500">Femelle, 6 mois — Jouette</p>
                    <a href="{{ route('animals.index') }}" class="mt-3 inline-block text-refuge-blue hover:underline">Consulter
                        la demande</a>
                </div>
            </article>
            <article class="rounded-xl overflow-hidden bg-white shadow-sm">
                <img src="src/images/img.png" alt="Photo animal" class="w-full h-44 object-cover"/>
                <div class="p-4">
                    <h3 class="font-semibold">Bella</h3>
                    <p class="text-sm text-slate-500">Femelle, 3 ans — Calme</p>
                    <a href="{{ route('animals.index') }}" class="mt-3 inline-block text-refuge-blue hover:underline">Consulter
                        la demande</a>
                </div>
            </article>
        </div>
    </section>

    <section class="mt-8 bg-white/60 backdrop-blur-sm rounded-2xl p-6 shadow">
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-xl font-semibold">Gérer l'équipe</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4">
            <article class="relative text-center p-4 rounded-lg bg-white shadow-sm">
                <img src="src/images/img.png" alt="Photo bénévole"
                     class="mx-auto mb-3 w-24 h-24 rounded-full object-cover"/>
                <h3 class="font-medium">Camille</h3>
                <p class="text-sm text-slate-500">Bénévole</p>
                <a href="#" class="mt-3 inline-block text-refuge-blue hover:underline">Voir la fiche</a>
            </article>

            <article class="relative text-center p-4 rounded-lg bg-white shadow-sm">
                <img src="src/images/img.png" alt="Photo bénévole"
                     class="mx-auto mb-3 w-24 h-24 rounded-full object-cover"/>
                <h3 class="font-medium">Antoine</h3>
                <p class="text-sm text-slate-500">Soigneur</p>
                <a href="#" class="mt-3 inline-block text-refuge-blue hover:underline">Voir la fiche</a>
            </article>

            <article class="relative text-center p-4 rounded-lg bg-white shadow-sm">
                <img src="src/images/img.png" alt="Photo bénévole"
                     class="mx-auto mb-3 w-24 h-24 rounded-full object-cover"/>
                <h3 class="font-medium">Sofia</h3>
                <p class="text-sm text-slate-500">Vétérinaire</p>
                <a href="#" class="mt-3 inline-block text-refuge-blue hover:underline">Voir la fiche</a>
            </article>

            <article class="relative text-center p-4 rounded-lg bg-white shadow-sm">
                <img src="src/images/img.png" alt="Photo bénévole"
                     class="mx-auto mb-3 w-24 h-24 rounded-full object-cover"/>
                <h3 class="font-medium">Lucas</h3>
                <p class="text-sm text-slate-500">Bénévole</p>
                <a href="#" class="mt-3 inline-block text-refuge-blue hover:underline">Voir la fiche</a>
            </article>
            <article
                class="rounded-xl overflow-hidden bg-white shadow-md border-2 border-slate-300 flex items-center justify-center cursor-pointer hover:border-blue-700 transition group"
            >

                <a href="{{ route('volunteer.create') }}"
                   class="w-full h-full flex flex-col items-center justify-center py-10">
                    <h3 class="font-semibold text-lg visibility:hidden">
                        <div
                            class="w-16 h-16 rounded-full border-2 border-slate-300 group-hover:border-blue-700 flex items-center justify-center text-slate-400 group-hover:text-blue-700 text-4xl font-bold transition"
                        >
                            +
                        </div>
                    </h3>
                    <p class="mt-4 text-slate-500 group-hover:text-blue-700 font-medium transition">
                        Ajouter un bénévole
                    </p>
                </a>
            </article>
        </div>
    </section>


</main>
<footer class="text-center text-sm text-white bg-blue-950 py-16">
    © {{ date('Y') }} Refuge Animalier – Tous droits réservés
</footer>
</body>
</html>
