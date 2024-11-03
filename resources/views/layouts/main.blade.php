<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Vite tailwindcss --}}
    @vite(['resources/css/app.css', 'resources/scss/snow.scss'])

    {{-- AOS CDN --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>@yield('title')</title>
</head>

<body>
    <div class="bg-[#111] relative overflow-x-hidden">
        @include('partials.snows')
        @yield('content')
    </div>

    {{-- AOS CDN --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // AOS Initialize
        AOS.init();
    </script>
</body>

</html>
