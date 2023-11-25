<!-- resources/views/sample.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Blade File</title>
</head>
<body>

    <header>
        <h1>Welcome to JuiFood!</h1>
    </header>

    {{-- <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </nav> --}}

    <h1>My Profile</h1>

    <h2>Name: </h2>

    <section>
        @yield('content')
    </section>

    {{-- <footer>
        <p>&copy; 2023 My Website</p>
    </footer> --}}

</body>
</html>