<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body class="text-bg-success">

    <main>
        <div class="container pt-5">
            <div class="d-flex row g-3 justify-content-center align-items-center"> 
            
                <h1 class="text-center mb-5 text-primary-emphasis">Lista dei film presi da database</h1>
            
            @foreach($movies as $movie)
                
            <div class="col-3">
                <div class="card border-warning ">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item border-warning fw-semibold">Titolo : <span class="fw-bold">{{$movie['title']}}</span></li>
                        <li class="list-group-item border-warning fw-semibold">Titolo originale : <span class="fst-italic fw-normal">{{$movie['original_title']}}</span></li>
                        <li class="list-group-item border-warning fw-semibold">Prodotto in : <span class="fw-normal text-capitalize">{{$movie['nationality']}}</span></li>
                        <li class="list-group-item border-warning fw-semibold">Data uscita : <span class="fw-normal">{{$movie['date']}}</span></li>
                        <li class="list-group-item border-warning fw-semibold">Voto : <span class="fw-normal {{$movie['vote'] > 8.6 ? 'text-secondary-emphasis':'text-danger-emphasis'}}">{{$movie['vote']}}</span></li>
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
        </div>
    </main>

</body>

</html>