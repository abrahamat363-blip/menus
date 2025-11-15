<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="/">My Menu</a>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') || request()->is('home') ? 'active text-warning' : '' }}" 
                           href="/home">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('photos') ? 'active text-warning' : '' }}" 
                           href="/photos">Photos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('contact') ? 'active text-warning' : '' }}" 
                           href="/contact">Contact</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer class="text-center py-3 mt-4 bg-light">
        <strong>Activity 11 & 9 — Created by MARTIN ALVAREZ.</strong>
    </footer>

</body>
</html>

