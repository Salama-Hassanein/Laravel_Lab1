<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITI BLOG</title>
</head>

<body>
    <header>
        <nav>
            <a href="{{ route('home') }}">ITI BLOG</a>
            <a href="{{ route('posts.index') }}">All Posts</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
</body>

</html>