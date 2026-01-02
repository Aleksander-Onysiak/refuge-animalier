@php use App\Models\Animal @endphp
    <!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Avant d'adopter – {{ config('app.name', 'Refuge Animalier') }}</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="bg-gray-50 text-gray-800">

<header class="w-full flex flex-col items-center py-8">
    <h1 class="text-4xl font-extrabold text-center mb-4">
        Avant d’adopter
    </h1>

    <nav class="w-[90%] border-b border-slate-300 pb-3 mb-6">
        <h2 class="sr-only">Navigation principale</h2>
        <ul class="flex justify-center gap-6">
            <li><a class="px-3 py-2 rounded-md" href="/">Accueil</a></li>
            <li><a class="px-3 py-2 rounded-md" href="{{ route('volunteer.index') }}">Bénévolat</a></li>
            <li><a class="px-3 py-2 rounded-md" href="{{ route('animals.index') }}">Animaux</a></li>
            <li><a class="px-3 py-2 rounded-md" href="#">Avant d’adopter</a></li>
        </ul>
    </nav>
</header>

<main class="container mx-auto max-w-[70%] space-y-10 mb-16 ">

    <section class="bg-white/60 backdrop-blur-sm rounded-2xl p-8 shadow">
        <p class="text-lg leading-relaxed">
            Adopter un animal est une décision importante qui engage sur le long terme.
            Avant de franchir ce pas, il est essentiel de bien comprendre ce que cela implique,
            pour garantir le bien-être de l’animal et une adoption réussie.
        </p>
    </section>

    <section class="bg-white/60 backdrop-blur-sm rounded-2xl p-8 shadow space-y-4">
        <h2 class="text-2xl font-bold">
            Adopter un animal : un engagement pour la vie
        </h2>

        <p>
            Adopter un chien ou un chat n’est pas un simple coup de cœur.
            C’est accueillir un être vivant qui dépendra de vous pendant de nombreuses années.
        </p>

        <p>
            Un animal a besoin de stabilité, de temps, d’attention, de soins et d’amour au quotidien.
            Il partagera votre vie, avec ses joies comme avec ses contraintes.
        </p>

        <ul class="list-disc pl-6 space-y-1">
            <li>Suis-je prêt(e) à m’engager sur toute la durée de vie de l’animal ?</li>
            <li>Ai-je suffisamment de temps à lui consacrer ?</li>
            <li>Que se passera-t-il en cas de changement de situation ?</li>
        </ul>

        <p class="font-medium">
            Une adoption réfléchie est la meilleure prévention contre l’abandon.
        </p>
    </section>

    <section class="bg-white/60 backdrop-blur-sm rounded-2xl p-8 shadow space-y-4">
        <h2 class="text-2xl font-bold">
            Votre mode de vie est-il compatible ?
        </h2>

        <p>
            Chaque animal a des besoins spécifiques. Il est important de choisir un compagnon
            dont le mode de vie correspond au vôtre.
        </p>

        <ul class="list-disc pl-6 space-y-1">
            <li>Appartement ou maison avec jardin</li>
            <li>Présence d’enfants ou d’autres animaux</li>
            <li>Temps passé à la maison</li>
            <li>Niveau d’activité physique</li>
        </ul>

        <p>
            Le bon choix est celui qui respecte avant tout le bien-être de l’animal,
            et non uniquement vos envies.
        </p>
    </section>

    <section class="bg-white/60 backdrop-blur-sm rounded-2xl p-8 shadow space-y-4">
        <h2 class="text-2xl font-bold">
            Les responsabilités financières
        </h2>

        <p>
            Adopter un animal implique des frais réguliers et parfois imprévus.
        </p>

        <ul class="list-disc pl-6 space-y-1">
            <li>Alimentation adaptée</li>
            <li>Soins vétérinaires et vaccins</li>
            <li>Stérilisation ou castration</li>
            <li>Frais d’urgence</li>
            <li>Accessoires et équipements</li>
        </ul>

        <p>
            Il est important de pouvoir assumer ces coûts tout au long de la vie de l’animal.
        </p>
    </section>

    <section class="bg-white/60 backdrop-blur-sm rounded-2xl p-8 shadow space-y-4">
        <h2 class="text-2xl font-bold">
            Comprendre le passé de l’animal
        </h2>

        <p>
            Les animaux de refuge ont souvent vécu des situations difficiles :
            abandon, errance ou maltraitance.
        </p>

        <p>
            Certains auront besoin de temps pour s’adapter, de patience et d’un cadre rassurant.
            Nos équipes sont là pour vous accompagner et vous informer sur le caractère et les besoins
            de chaque animal.
        </p>

        <p class="font-medium">
            Adopter, c’est accepter une histoire… et offrir un avenir.
        </p>
    </section>

    <section class="bg-white/60 backdrop-blur-sm rounded-2xl p-8 shadow space-y-4">
        <h2 class="text-2xl font-bold">
            Le processus d’adoption au refuge
        </h2>

        <p>
            L’adoption se fait de manière encadrée afin de garantir une correspondance optimale
            entre l’animal et sa future famille.
        </p>

        <ul class="list-disc pl-6 space-y-1">
            <li>Échange avec notre équipe</li>
            <li>Rencontre avec l’animal</li>
            <li>Temps de réflexion</li>
            <li>Suivi post-adoption si nécessaire</li>
        </ul>

        <p>
            Ce processus est une garantie de réussite, autant pour vous que pour l’animal.
        </p>
    </section>

    <section
        class="bg-white text-black rounded-2xl p-10 shadow flex flex-col md:flex-row items-center justify-between gap-6">
        <div>
            <h2 class="text-2xl font-bold mb-2">
                Prêt(e) à rencontrer votre futur compagnon ?
            </h2>
            <p class="opacity-90">
                Nos animaux n’attendent qu’une chose : trouver une famille aimante et responsable.
            </p>
        </div>

        <a href="{{ route('animals.index') }}"
           class="inline-block bg-white text-blue-950 font-semibold px-6 py-3 rounded-lg hover:bg-gray-100 transition">
            Voir les animaux à l’adoption
        </a>
    </section>

</main>

<footer class="mt-12 text-center text-sm text-white bg-blue-950 py-16">
    Un footer
</footer>
</body>
</html>
