<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AI eszközök</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="{{route('categories.index')}}">Kategóriáj</a></li>
            <li><a href="{{route('aitools.index')}}">Ai tools</a></li>
            <li><a href="{{route('categories.create')}}">új kategória</a></li>
        </ul>
    </nav>
</header>
<main>
    @yield('content')
</main>
<footer>
    <p>© 2024 Dézsi Zoltán</p>
</footer>
</body>
</html>