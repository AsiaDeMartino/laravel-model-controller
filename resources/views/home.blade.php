<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Movies</title>
</head>
<body>
    <h1 class="titolo">Movies</h1>
    <div class="card-wrapper">
        @foreach ($movies as $item)
            <li>
                <div>Titolo: {{$item->title}}</div>
                <div>Titolo originale: {{$item->original_title}}</div>
                <div> Nazionalità: {{ $item->nationality }}</div>
                <div>Data: {{$item->date}}</div>
                <div>Voto: {{$item->vote}}</div>
            </li>
        @endforeach
    </div>
</body>
</html>
