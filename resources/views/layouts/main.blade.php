<!-- resources/views/layouts/main.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Main Page')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>My Laravel Application</h1>
        <nav>
            <ul>
                <li><a href="{{ url('/home') }}">Home</a></li>
                <li><a href="{{ url('/about') }}">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <!-- Content section for child views -->
        @yield('content')
    </div>

    <footer>
        <p>© 2024 My Laravel Application</p>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
