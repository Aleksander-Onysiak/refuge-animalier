@php use App\Models\Animal @endphp
    <!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Modifier la fiche – {{ config('app.name', 'Refuge Animalier') }}</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>
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
                <a class="px-3 py-2 rounded-md hover:bg-refuge-ink/10 transition" href="{{ route('fiches.index') }}">Fiches
                    bénévoles</a>
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

<main class="w-[40%] mx-auto py-10">
    <form action="{{ route('fiches.update', $animal) }}" method="POST" enctype="multipart/form-data"
          class="space-y-8 bg-white p-8 rounded-xl shadow-md">
        <h2 class="font-medium mb-2">Modifier la fiche de {{ $animal->name }}</h2>
        @csrf
        @method('PUT')

        <fieldset>
            <div class="flex flex-col gap-1">
                <label for="name" class="font-medium">Nom</label>
                <input type="text" id="name" name="name" value="{{ old('name', $animal->name) }}"
                       class="border rounded-lg px-4 py-2 bg-slate-50 focus:bg-white focus:ring-2 focus:ring-blue-700">
            </div>
        </fieldset>
        <fieldset>
            <div class="flex gap-6">
                <label class="flex items-center gap-2">Sexe
                    <input type="radio" name="sex" value="male"
                           {{ old('sex', $animal->sex) == 'male' ? 'checked' : '' }} class="accent-blue-700">
                    <span>Mâle</span>
                </label>
                <label class="flex items-center gap-2">
                    <input type="radio" name="sex" value="female"
                           {{ old('sex', $animal->sex) == 'female' ? 'checked' : '' }} class="accent-blue-700">
                    <span>Femelle</span>
                </label>
            </div>
        </fieldset>

        <fieldset class="flex flex-col gap-1">
            <label for="type" class="font-medium">Type de l'animal</label>
            <select id="type" name="type"
                    class="border rounded-lg px-4 py-2 bg-slate-50 focus:bg-white focus:ring-2 focus:ring-blue-700">
                <option value="cat" {{ old('type', $animal->type) == 'cat' ? 'selected' : '' }}>Chat</option>
                <option value="dog" {{ old('type', $animal->type) == 'dog' ? 'selected' : '' }}>Chien</option>
                <option value="parrot" {{ old('type', $animal->type) == 'parrot' ? 'selected' : '' }}>Perroquet</option>
                <option value="rabbit" {{ old('type', $animal->type) == 'rabbit' ? 'selected' : '' }}>Lapin</option>
            </select>
        </fieldset>

        <fieldset class="flex flex-col gap-1">
            <label for="race" class="font-medium">Race</label>
            <input type="text" id="race" name="race" value="{{ old('race', $animal->race) }}"
                   class="border rounded-lg px-4 py-2 bg-slate-50 focus:bg-white focus:ring-2 focus:ring-blue-700">
        </fieldset>

        <fieldset class="flex flex-col gap-1">
            <label for="color" class="font-medium">Couleur</label>
            <select id="color" name="color"
                    class="border rounded-lg px-4 py-2 bg-slate-50 focus:bg-white focus:ring-2 focus:ring-blue-700">
                <option value="brown" {{ old('color', $animal->color) == 'brown' ? 'selected' : '' }}>Brun</option>
                <option value="white" {{ old('color', $animal->color) == 'white' ? 'selected' : '' }}>Blanc</option>
                <option value="black" {{ old('color', $animal->color) == 'black' ? 'selected' : '' }}>Noir</option>
                <option value="gray" {{ old('color', $animal->color) == 'gray' ? 'selected' : '' }}>Gris</option>
            </select>
        </fieldset>

        <fieldset class="flex flex-col gap-1">
            <label for="status" class="font-medium">Statut</label>
            <select id="status" name="status"
                    class="border rounded-lg px-4 py-2 bg-slate-50 focus:bg-white focus:ring-2 focus:ring-blue-700">
                <option value="available" {{ old('status', $animal->status) == 'available' ? 'selected' : '' }}>
                    Disponible
                </option>
                <option value="care" {{ old('status', $animal->status) == 'care' ? 'selected' : '' }}>En soins</option>
                <option value="process" {{ old('status', $animal->status) == 'process' ? 'selected' : '' }}>En cours
                    d’adoption
                </option>
            </select>
        </fieldset>

        <fieldset class="flex flex-col gap-1">
            <label for="image" class="font-medium">Image de l’animal</label>
            <input type="file" id="image" name="image" accept="image/*"
                   class="border rounded-lg px-4 py-2 bg-slate-50 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-blue-900 file:text-white hover:file:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-700">
            @if($animal->image)
                <img src="{{ $animal->image }}" alt="{{ $animal->name }}"
                     class="mt-2 w-32 h-32 object-cover rounded-md">
            @endif
        </fieldset>

        <button type="submit"
                class="w-full bg-blue-900 text-white py-3 rounded-xl font-medium hover:bg-blue-800 transition">
            Enregistrer les modifications
        </button>
    </form>
</main>

<footer class="text-center text-sm text-white bg-blue-950 py-16">
    © {{ date('Y') }} Refuge Animalier
</footer>

</body>
</html>
