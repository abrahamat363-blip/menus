<!DOCTYPE html>
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
    </footer>

</body>
</html>
