<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css' integrity='sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==' crossorigin='anonymous'/>
    <title>Document</title>
</head>
<body>
    {{-- dato che passo alla view l'array associativo $data basta richiamare la $key per visualizzarne i dati --}}
    {{-- <h1>hello {{ $user }}</h1> --}}
    <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{ Route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ Route('about') }}">About US</a>
        </li>
      </ul>

      <h2 class="text-center">Ciao {{ $user }}</h2>

      <h3>Colori preferiti:</h3>
      <ul>
        @foreach ($colors as $color)
            <li>  {{ $color }} </li>
        @endforeach
      </ul>
      <h3>Records:</h3>
      <ul>
         @if ($records != null)
          @foreach ($records as $record )
             <li>{{ $record }}</li>
          @endforeach
      @else
          <h5>Nessun record trovato</h5>
      @endif
      </ul>

</body>
</html>
