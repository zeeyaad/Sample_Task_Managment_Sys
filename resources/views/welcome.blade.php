<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', subject: app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Managment Sys</title>
    @vite('resources\css\app.css')
</head>
<body class="text-center  bg-amber-50">
    <h1 class="text-[#FF4F0F] my-3">Welcome To Task Manager App</h1>
    <p>To be apply to Manage Your Tasks You need to login First</p>
    <a href="{{route('Show.Login')}}" class="btn m-4 inline-block bg-[#FFE3BB]">Login</a>
    <a href="{{route('Show.Register')}}" class="btn m-4 inline-block bg-[#FFE3BB]">Register</a>
</body>
</html>