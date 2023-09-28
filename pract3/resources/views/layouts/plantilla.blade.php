<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title> @yield('titulo')</title>

    @vite(['resources/js/app.js'])

</head>

<body>
    @include('partials.navbar')
    
    @yield('contenido')

</body>
</html>