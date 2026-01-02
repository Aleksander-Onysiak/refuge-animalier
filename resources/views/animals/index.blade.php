@php use App\Models\Animal @endphp
    <!doctype html>
<html lang="{!! app()->getLocale() !!}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liste des animaux</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="bg-gray-50">

<header class="w-full flex flex-col items-center py-8">
    <h1 class="text-4xl font-extrabold text-center">Nos animaux</h1>
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

<main class="container mx-auto max-w-[90%] py-10">

    <div class="flex flex-col-reverse lg:flex-row gap-10 items-start">

        <aside class="w-full lg:w-1/4 bg-white p-5 rounded-xl shadow-sm self-stretch">
            <h2 class="text-lg font-semibold mb-4">Filtres</h2>

            <form method="GET" action="{{ route('animals.index') }}">
                <fieldset class="space-y-6">

                    <div>
                        <p class="font-medium mb-1">Sexe</p>
                        <div class="flex gap-4">
                            <label>
                                <input type="radio" name="sex"
                                       value="male" {{ request('sex') == 'male' ? 'checked' : '' }}>
                                Mâle
                            </label>
                            <label>
                                <input type="radio" name="sex"
                                       value="female" {{ request('sex') == 'female' ? 'checked' : '' }}>
                                Femelle
                            </label>
                        </div>
                    </div>

                    <div>
                        <label class="font-medium" for="type">Type d’animal</label>
                        <select id="type" name="type" class="mt-1 w-full border rounded-md p-2">
                            <option value="">Tous</option>
                            <option value="cat" {{ request('type') == 'cat' ? 'selected' : '' }}>Chat</option>
                            <option value="dog" {{ request('type') == 'dog' ? 'selected' : '' }}>Chien</option>
                            <option value="parrot" {{ request('type') == 'parrot' ? 'selected' : '' }}>Perroquet
                            </option>
                            <option value="rabbit" {{ request('type') == 'rabbit' ? 'selected' : '' }}>Lapin</option>
                        </select>
                    </div>

                    <div>
                        <label class="font-medium" for="race">Race</label>
                        <input type="text" name="race" value="{{ request('race') }}"
                               class="mt-1 w-full border rounded-md p-2" placeholder="Race">
                    </div>

                    <div>
                        <label class="font-medium" for="color">Couleur</label>
                        <select id="color" name="color" class="mt-1 w-full border rounded-md p-2">
                            <option value="">Toutes</option>
                            <option value="brown" {{ request('color') == 'brown' ? 'selected' : '' }}>Brun</option>
                            <option value="white" {{ request('color') == 'white' ? 'selected' : '' }}>Blanc</option>
                            <option value="black" {{ request('color') == 'black' ? 'selected' : '' }}>Noir</option>
                            <option value="gray" {{ request('color') == 'gray' ? 'selected' : '' }}>Gris</option>
                        </select>
                    </div>
                </fieldset>
                <button type="submit"
                        class="mt-4 w-full bg-blue-950 text-white py-2 rounded-lg hover:bg-blue-900 transition">
                    Filtrer
                </button>
            </form>
        </aside>

        <section class="w-full lg:w-3/4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <h2 class="text-lg font-semibold visibility: hidden">Nos animaux</h2>
        @if(isset ($animals))
                @foreach( $animals as $animal )
                    <article class="rounded-xl overflow-hidden bg-white shadow-md">
                        <img src="https://placedog.net/200/200" alt="Photo de {!! $animal->name !!}"
                             class="w-full h-32 object-cover">

                        <div class="p-4 space-y-2">
                            <h2 class="font-semibold text-lg">{!! $animal->name !!}</h2>
                            <p class="text-sm text-slate-500">{!! $animal->sex !!} - {!! $animal->age !!}</p>
                            <p class="text-sm text-slate-500">{!! $animal->type !!} - {!! $animal->race !!}</p>
                            <a href="{{route('animal.show', $animal)}}"
                               class="block w-full bg-blue-950 text-white text-sm px-4 py-2 rounded-lg text-center hover:bg-blue-900 transition"
                               title="Vers le animal {!! $animal->name !!}">Voir la fiche de
                                {!! $animal->name !!}
                            </a>
                        </div>
                    </article>
                @endforeach
            @endif
        </section>
    </div>

</main>

<footer class="text-center text-sm text-white bg-blue-950 py-16">
    © {{ date('Y') }} Refuge Animalier – Tous droits réservés
</footer>

</body>
</html>
