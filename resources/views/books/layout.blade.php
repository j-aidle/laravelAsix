<!DOCTYPE html>
<html>
<head>
    <title>Laravel ASIX</title>
    <meta charset="utf-8">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
