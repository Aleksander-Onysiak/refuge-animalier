<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Demande d’adoption – {{ $animal->name }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">
<header>
    <h1 class="text-4xl font-extrabold text-center">Formualire d'adoption pour : {{ $animal->name }}</h1>
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
<main class="container mx-auto max-w-lg mt-16">

    <a href="{{ route('fiches.index') }}" class="text-blue-900 hover:underline mb-6 inline-block">
        ← Retour aux fiches
    </a>

    <section class="bg-white/60 backdrop-blur-sm rounded-2xl p-8 shadow">

        <h2 class="text-2xl font-bold mb-6">Adopter {{ $animal->name }}</h2>

        @if(session('success'))
            <div class="mb-4 p-4 bg-green-200 text-green-800 rounded">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('adoption.store', $animal) }}" method="POST" class="space-y-4">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="lastname" class="block font-medium">Nom <span class="text-red-600">*</span></label>
                    <input id="lastname" name="lastname" type="text" value="{{ old('lastname') }}"
                           class="border rounded-lg px-4 py-2 w-full">
                    @error('lastname') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="firstname" class="block font-medium">Prénom <span class="text-red-600">*</span></label>
                    <input id="firstname" name="firstname" type="text" value="{{ old('firstname') }}"
                           class="border rounded-lg px-4 py-2 w-full">
                    @error('firstname') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="email" class="block font-medium">Email <span class="text-red-600">*</span></label>
                    <input id="email" name="email" type="email" value="{{ old('email') }}"
                           class="border rounded-lg px-4 py-2 w-full">
                    @error('email') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="phone" class="block font-medium">Téléphone <span class="text-red-600">*</span></label>
                    <input id="phone" name="phone" type="text" value="{{ old('phone') }}"
                           class="border rounded-lg px-4 py-2 w-full">
                    @error('phone') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
                </div>
            </div>

            <div>
                <label for="hours" class="block font-medium">Heures joignables (optionnel)</label>
                <select id="hours" name="hours" class="border rounded-lg px-4 py-2 w-full">
                    <option value="">Sélectionnez</option>
                    <option value="08:00-10:00">08:00 - 10:00</option>
                    <option value="10:00-12:00">10:00 - 12:00</option>
                    <option value="13:00-15:00">13:00 - 15:00</option>
                    <option value="15:00-18:00">15:00 - 18:00</option>
                    <option value="18:00-20:00">18:00 - 20:00</option>
                </select>
            </div>

            <div>
                <label for="message" class="block font-medium">Message (optionnel)</label>
                <textarea id="message" name="message" rows="4"
                          class="border rounded-lg px-4 py-2 w-full">{{ old('message') }}</textarea>
            </div>

            <button type="submit"
                    class="w-full bg-blue-950 text-white py-3 rounded-xl font-medium hover:bg-blue-900 transition">
                Envoyer la demande
            </button>
        </form>
    </section>
</main>

<footer class="mt-12 text-center text-sm text-white bg-blue-950 py-16">
    Les Pattes Heureuses
</footer>

</body>
</html>
