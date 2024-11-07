<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Marouan Portfolio</title>

    <!-- CSS -->
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:ital,wght@0,400;0,600;1,400;1,600&amp;family=Red+Hat+Display:wght@900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('js/script.js') }}">
    @stack('styles')
    <link rel="icon" href="{{ asset('icons/Mlogo.ico') }}" type="image/x-icon">
</head>
<body>
<!-- Header -->
<header>
    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/projects') }}">Projects</a>
        <a href="{{ url('/contact') }}">Contact</a>
    </nav>
</header>

<!-- Main Content -->
<main>
    @yield('content')
</main>

<!-- Footer -->
<footer>
    <p>&copy; {{ date('Y') }} Test Mod Site. Alle rechten voorbehouden. Ontwikkeld door Marouan el Marnissy.</p>
</footer>

<!-- JavaScript -->
<script src="{{ asset('js/app.js') }}"></script>
@stack('scripts')
</body>
</html>
