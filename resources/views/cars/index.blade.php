<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Laravel</title>
    </head>
    <body>
        <h1>Index of cars</h1>
        @foreach($cars as $car)
        <h2>{{$car->title}}</h2>
        @endforeach
    </body>
</html>