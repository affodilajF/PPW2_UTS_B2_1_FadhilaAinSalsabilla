<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel App</title>
</head>
<body>
    <header>
        <h1> PEMAIN </h1>
        <h6> ini contoh penggunaan extends yaa </h6>
    </header>

    <nav>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('footer')
    </footer>




</body>
</html>
