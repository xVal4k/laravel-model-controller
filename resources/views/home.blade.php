<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <main>
        <div class="container">
            @foreach ($movies as $movie)
            <div class="card">
                <div class="card-info">
                    <h2>{{ $movie->title }}</h2>
                    <h3>{{ $movie->original_title }}</h3>
                    <div class="mini_info">
                        <p>Nationality: <strong>{{ $movie->nationality }}</strong></p>
                        <p>Date: <strong>{{ $movie->date }}</strong></p>
                        <p>Average vote: <strong>{{ $movie->vote }} / 10</strong></p>
                    </div>
                </div>
              </div>
            @endforeach
        </div>
    </main>
</body>

</html>
