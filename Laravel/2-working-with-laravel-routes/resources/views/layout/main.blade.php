<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ URL::to('css/app.css') }}"></link>
</head>
<body class="antialiased">

    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('posts') }}">Posts</a></li>
        <li><a href="{{ route('create-post') }}">Create new post</a></li>
    </ul>
    <hr />

    <h1>{{ $page_title ?? 'missing $page_title tag' }}</h1>

    @yield('content')
</body>
</html>
