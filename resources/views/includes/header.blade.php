<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>pagina nueva</h1>
        <h2>{{ asset('assets/css/style.css') }}</h2>

         <nav>
             <ul>
                 <li><a href="{{ url('hola') }}">Hola</a></li>
                 <li><a href="{{ url('adios') }}">Adios</a></li>
             </ul>
         </nav>

    </header>
