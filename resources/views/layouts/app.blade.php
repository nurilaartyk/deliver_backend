<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tandyr</title>
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}">
    @vite('resources/css/app.css')
</head>
<body>

@if(!Route::is('login') && !Route::is('register'))
    <x-header/>
@endif

@yield('content')

@if(!Route::is('login') && !Route::is('register'))
    <x-footer/>
@endif

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css"/>

</body>
</html>
