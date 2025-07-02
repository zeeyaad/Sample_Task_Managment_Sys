<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Network</title>
    @vite('resources\css\app.css')
</head>

<body>

    @if (session('success'))

        <div id="flash" class="p-4 text-center bg-green-50 text-green-500 font-bold">
            {{session('success')}}
        </div>

    @endif

    <header>
        <nav>
            <h1>
            <a href="{{route('Home')}}">Task Managmants</a>
            </h1>
            {{-- <a href="{{route('Ninjas.index')}}">All Ninjas</a>
            <a href="{{route('Ninjas.create')}}">Add New Ninja</a> --}}
            <a href="{{route('Show.Login')}}">Login</a>
            <a href="{{route('Show.Register')}}">Register</a>
        </nav>
    </header>

    <main class="container">
        {{$slot}}
    </main>
    <footer>
        All rights reserved © Zed.
    </footer>
</body>

</html>