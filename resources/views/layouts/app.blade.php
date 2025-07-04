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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-1N7apbWfxF3y+v50E+VxuGzvYi++NMCYHYhJcKO9XZuvU66jULfIM6IDAdz0CNUvlNYDjeZ9gZ4d9kD6qyWAgA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

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