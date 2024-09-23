<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.1/dist/cdn.min.js"></script>
    <title>Home</title>
</head>

<body>
    {{-- Navigation --}}
    <x-navbar></x-navbar>
    {{-- Header --}}
    <x-header>{{ $title }}</x-header>
    {{-- Content section --}}
    <main class="">
        {{ $slot }}
    </main>
    {{-- Footer --}}
    <footer>

    </footer>
</body>

</html>
