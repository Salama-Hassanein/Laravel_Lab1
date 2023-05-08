<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITI BLOG</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>

</head>

<body>
    <nav>
        <a href="{{ route('home') }}">ITI BLOG</a>
        <a href="{{ route('home') }}">All Posts</a>
    </nav>

    <div>
        @yield('content')
    </div>
</body>

</html>