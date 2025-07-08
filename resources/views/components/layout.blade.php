<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0">
    <link rel="stylesheet" href=" {{ asset('css/app.css') }}">
    <title>{{$title}}</title>
</head>
<body>
    <div class="container">
        <h1>{{$title}}</h1>

        {{$slot}}
    </div>
</body>
</html>
