@php use App\Models\Animal @endphp
    <!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Rocky – Chien à l’adoption</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>
</head>

<body class="bg-gray-50 text-gray-800">

<header class="w-full flex flex-col items-center py-8">
    <h1 class="text-4xl font-extrabold text-center">
        Rocky
    </h1>
    <p class="text-gray-600 mt-2">
        Chien à l’adoption
    </p>
</header>

<main class="container mx-auto max-w-[60%] mt-10">

    <section class="bg-white rounded-2xl shadow p-8 grid grid-cols-1 md:grid-cols-2 gap-8">

        <div class="flex justify-center">
            <img
                src="https://placedog.net/400/400"
                alt="Photo de Rocky, chien à l’adoption"
                class="rounded-xl object-cover shadow-md"
            >
        </div>

        <div class="space-y-4">

            <h2 class="text-2xl font-bold">
                Informations générales
            </h2>

            <ul class="space-y-2">
                <li>
                    <span class="font-medium">Nom :</span> Rocky
                </li>
                <li>
                    <span class="font-medium">Type :</span> Chien
                </li>
                <li>
                    <span class="font-medium">Race :</span> Croisé Labrador
                </li>
                <li>
                    <span class="font-medium">Sexe :</span> Mâle
                </li>
                <li>
                    <span class="font-medium">Couleur :</span> Brun
                </li>
                <li>
                    <span class="font-medium">Statut :</span>
                    <span class="inline-block bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">
                        Disponible
                    </span>
                </li>
            </ul>

            <div class="pt-4">
                <h3 class="text-xl font-semibold mb-2">
                    Description
                </h3>
                <p class="leading-relaxed">
                    Rocky est un chien affectueux et joueur, très proche de l’humain.
                    Il aime les longues promenades, les moments de jeu et les câlins.
                    Sociable avec les autres chiens, il pourra s’épanouir aussi bien
                    dans une famille active que chez des adoptants disponibles et bienveillants.
                </p>
            </div>

        </div>
    </section>

    <section class="mt-10 bg-blue-950 text-white rounded-2xl p-8 flex flex-col md:flex-row items-center justify-between gap-6">
        <div>
            <h2 class="text-2xl font-bold mb-2">
                Intéressé(e) par Rocky ?
            </h2>
            <p class="opacity-90">
                Contactez-nous ou venez le rencontrer au refuge.
            </p>
        </div>

        <a
            href="#"
            class="inline-block bg-white text-blue-950 font-semibold px-6 py-3 rounded-lg hover:bg-gray-100 transition"
        >
            Faire une demande d’adoption
        </a>
    </section>

</main>

<footer class="mt-16 text-center text-sm text-white bg-blue-950 py-16">
    © {{ date('Y') }} Les Pattes Heureuses – Tous droits réservés
</footer>

</body>
</html>
