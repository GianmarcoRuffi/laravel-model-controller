<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Laravel Model Controller</title>
</head>
<body>
    <div class="container">
  
        <ul>
        @foreach ($movies as $movie)
                <li><strong>Title:</strong> {{$movie->title}} </li>
                <li><strong>Link:</strong> <a href="route('detail',$movie->id">{{$movie->title}}</a></li>
                <li><strong>Titolo originale:</strong> {{$movie->original_title}}</li>
                <li><strong>Nazionalità:</strong> {{$movie->nationality}}</li>
                <li><strong>Uscito il:</strong> {{$movie->date}}</li>
                <li><strong>Voto:</strong> {{$movie->vote}}</li>
                @endforeach
        </ul>
    
    
    </div>

</body>
</html>