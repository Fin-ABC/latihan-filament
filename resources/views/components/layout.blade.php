<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
</head>

<body>

    <div class="bg-gray-900">
        {{-- Nav Section --}}
        <x-navbar></x-navbar>

        {{-- Isi --}}
        <section class="relative isolate overflow-hidden bg-gray-900 px-6 pb-96 sm:pb-12 lg:px-8">
            <div class="mx-auto lg:max-w-7xl">
                <figure class="mt-2">
                    <blockquote class="text-xl/8 font-semibold text-white sm:text-2xl/9">
                        <p>Halaman {{ $title }}</p>
                    </blockquote>
            </div>
        </section>
    </div>

    {{ $slot }}

</body>

</html>
