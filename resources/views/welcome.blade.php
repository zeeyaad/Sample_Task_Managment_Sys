<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', subject: app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sample Task Managment Sys</title>
</head>
<body>
    <header>
        <nav>
            <h1>
            <a href="{{route('Home')}}">Zed Network</a>
            </h1>
            {{-- <a href="{{route('Ninjas.index')}}">All Ninjas</a>
            <a href="{{route('Ninjas.create')}}">Add New Ninja</a> --}}
        </nav>
    </header>
</body>
</html>