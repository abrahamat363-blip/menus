<!DOCTYPE html>
<<<<<<< HEAD
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
=======
<html>
<head>
    <title>Menus Activity</title>
    <style>
        body { font-family: Arial; margin: 0; padding: 0; }
        nav { background: #333; padding: 15px; }
        nav a {
            color: white;
            margin-right: 20px;
            text-decoration: none;
        }
        nav a.active {
            font-weight: bold;
            color: yellow;
        }
        footer {
            background: #222;
            padding: 15px;
            color: white;
            text-align: center;
            margin-top: 40px;
        }
    </style>
</head>
<body>

    {{-- MENU --}}
    <nav>
        <a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
        <a href="/photos" class="{{ request()->is('photos') ? 'active' : '' }}">Photos</a>
        <a href="/contact" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a>
    </nav>

    {{-- CONTENIDO --}}
    <div style="padding: 20px;">
        @yield('content')
    </div>

    {{-- FOOTER --}}
    <footer>
        Activity 11 - Created by Abraham 
>>>>>>> d2e81559bed91cfa69aa5464e60e1f2dd25bebf8
    </footer>

</body>
</html>
<<<<<<< HEAD

=======
>>>>>>> d2e81559bed91cfa69aa5464e60e1f2dd25bebf8
