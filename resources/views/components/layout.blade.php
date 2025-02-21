<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Tailwind / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="flex flex-col min-h-screen h-full">
    <nav class="h-20 w-full shadow-sm">
        <div class="w-full h-full flex items-center gap-4 mx-auto container px-2">
            <a href="/">
                <p class="text-2xl font-bold text-[#4fd1c5e6]">FietsenWinkel.nl</p>
            </a>

            <a href="/bikes" class="text-gray-600 mt-1">Fietsen</a>
            <a href="/accesories" class="text-gray-600 mt-1">Accesoires</a>
            <a href="/sale" class="text-gray-600 mt-1">Aanbiedingen</a>
        </div>
    </nav>

    <div class="flex-grow h-full mx-auto container px-2 w-full">
        {{ $slot }}
    </div>
</body>

</html>