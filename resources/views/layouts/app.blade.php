<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Dr. Ritu Arora | Portfolio')</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style-modular.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body>

    @include('partials.header')

    <main>
        @yield('content')
    </main>

    <footer class="text-center py-3 bg-dark text-light">
        @include('partials.footer')
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="{{ asset('js/testimonial.js') }}" defer></script>
</body>
</html>
