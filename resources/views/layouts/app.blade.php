<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Dr. Ritu Arora | Portfolio')</title>

    <!-- Styles -->
    <!-- <link rel="stylesheet" href="{{ asset('css/style-modular.css') }}"> -->
    <!-- The above line is redundant as Vite is handling SCSS compilation-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @stack('styles')
    {{-- Vite assets --}}
    @vite(['resources/scss/style-modular.scss', 'resources/js/app.js'])
</head>

<body>

    @include('partials.header')

    <main class="m-0 p-0">
        @yield('content')
    </main>

    <footer class="text-center py-3 bg-dark text-light">
        @include('partials.footer')
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
</body>

</html>