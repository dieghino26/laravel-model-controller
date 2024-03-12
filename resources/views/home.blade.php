<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>

    @vite('resources/js/app.js')
</head>

<body>
    <div class="container">
        <h1 class="card-title">Elenco dei Film</h1>
        @foreach ($movies as $movie)
            <div class="card m-3 p-3">
                <div class="mb-3">
                    <h3 class="card-title">
                        {{ $movie->title }}
                    </h3>
                    <h6 class="card-subtitle mb-2 text-secondary">{{ $movie->original_title }}</h6>
                    <p class="card-text">{{ $movie->nationality }}</p>
                    <p class="card-text">Voto: {{ $movie->vote }}</p>
                </div>
            </div>
        @endforeach
    </div>
</body>

</html>
