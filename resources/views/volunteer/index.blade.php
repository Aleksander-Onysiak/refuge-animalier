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

<body class="bg-gray-50">

<header class="w-full flex flex-col items-center py-8">
    <h1 class="text-4xl font-extrabold text-center">Bénévolat</h1>
    <nav class="w-[90%] border-b border-slate-300 pb-3 mb-6">
        <h2 class="visibility: hidden">Navuigation principale</h2>
        <ul class="flex justify-center gap-6">
            <li><a class="px-3 py-2 rounded-md hover:bg-refuge-ink/10 transition" href="/">Accueil</a></li>
            <li><a class="px-3 py-2 rounded-md hover:bg-refuge-ink/10 transition" href="#">Bénévolat</a></li>
            <li><a class="px-3 py-2 rounded-md hover:bg-refuge-ink/10 transition" href="{{ route('animals.index') }}">Animaux</a>
            </li>
            <li><a class="px-3 py-2 rounded-md hover:bg-refuge-ink/10 transition" href="{{ route('before_adoption.index') }}">Avant
                    d'adopter</a></li>
        </ul>
    </nav>

</header>


<main class="container mx-auto max-w-[70%] mt-8 space-y-10">

    <section class="bg-white/60 backdrop-blur-sm rounded-2xl p-8 shadow space-y-6">

        <h2 class="text-2xl font-bold">Le bénévolat : un engagement essentiel pour nos animaux</h2>

        <p class="leading-relaxed">
            Vous souhaitez devenir bénévole dans un refuge pour animaux en Belgique ?
            Chez <strong>Les Pattes Heureuses</strong>, chaque bénévole joue un rôle fondamental pour offrir une
            seconde chance aux chiens et chats abandonnés, maltraités ou perdus.
            Rejoindre notre équipe, c’est agir concrètement pour la cause animale,
            au sein d’une structure bienveillante et engagée.
        </p>

        <h3 class="text-xl font-semibold mt-6">Pourquoi devenir bénévole chez Les Pattes Heureuses ?</h3>

        <p>Devenir bénévole, c’est vivre une aventure humaine et animale. Une expérience forte, parfois remuante, mais
            toujours pleine de sens.</p>
        <p>C’est refuser l’indifférence et vouloir agir, concrètement, sur le terrain, ici et maintenant.</p>
        <p>S’engager comme bénévole, c’est choisir une cause qui vous prend au cœur. C’est offrir du temps et de
            l’énergie, sans rien attendre en retour.</p>
        <p>C’est rejoindre une équipe portée par des valeurs communes : respect, solidarité, espoir et bienveillance.
            Une équipe motivée, bienveillante et soudée, avec son organisation, son cadre, ses règles, et son esprit
            d’équipe.</p>

        <h3 class="text-xl font-semibold mt-6">Le rôle des bénévoles dans notre refuge pour animaux</h3>

        <p>
            Les bénévoles sont le cœur battant des Pattes Heureuses.
            Chacun, à leur manière, contribue à offrir aux animaux une vie meilleure en attendant leur adoption.
            Il existe plusieurs formes d’engagement selon vos envies, votre temps et votre énergie.
        </p>

        <h3 class="text-xl font-semibold mt-6">Bénévolat suivi post-adoption</h3>

        <p>
            L’adoption est un nouveau départ, et nos anciens pensionnaires méritent ce qu’il y a de meilleur.
            Grâce à vous, nous veillons à ce qu’ils soient enfin chez eux… pour la vie !
            Vous participerez à :
        </p>

        <ul class="list-disc pl-6 space-y-1">
            <li>Prendre des nouvelles par téléphone pour vous assurer que tout se passe bien</li>
            <li>Effectuer des visites à domicile pour vérifier le cadre de vie</li>
            <li>Maintenir un lien de confiance avec les adoptants</li>
        </ul>

        <p class="mt-4">
            Votre engagement fait une réelle différence en garantissant que chaque animal s’épanouit dans sa nouvelle
            famille.
        </p>

    </section>

    <section class="bg-white/60 backdrop-blur-sm rounded-2xl p-8 shadow">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-2xl font-bold">Devenir bénévole</h2>
        </div>

        <form action="/" method="GET" class="space-y-6">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="flex flex-col">
                    <label for="lastname" class="font-medium">Nom</label>
                    <input id="lastname" name="lastname" type="text"
                           class="border rounded-lg p-2 mt-1">
                </div>

                <div class="flex flex-col">
                    <label for="firstname" class="font-medium">Prénom</label>
                    <input id="firstname" name="firstname" type="text"
                           class="border rounded-lg p-2 mt-1">
                </div>

                <div class="flex flex-col">
                    <label for="email" class="font-medium">Email</label>
                    <input id="email" name="email" type="email"
                           class="border rounded-lg p-2 mt-1">
                </div>

                <div class="flex flex-col">
                    <label for="phone" class="font-medium">Téléphone</label>
                    <input id="phone" name="phone" type="text"
                           class="border rounded-lg p-2 mt-1">
                </div>
            </div>

            <button type="submit"
                    class="mt-3 inline-block bg-blue-950 text-white px-6 py-3 rounded-lg hover:bg-blue-900 transition">
                Envoyer ma candidature
            </button>

        </form>
    </section>

</main>


<footer class="text-center text-sm text-white bg-blue-950 py-16">
    © {{ date('Y') }} Refuge Animalier – Tous droits réservés
</footer>
</body>
</html>
