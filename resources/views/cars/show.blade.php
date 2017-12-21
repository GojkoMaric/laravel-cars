@extends('layouts.master')
@section('title')
    Single Car
@endsection

@section('content')

        <h1>Title:</h1>
        <h2>{{$car->title}}</h2>
        <h1>Producer:</h1>
        <h2>{{$car->producer}}</h2>
        <h1>Number of doors:</h1>
        <h2>{{$car->number_of_doors}}</h2>

        <p><a href="/cars">Back to cars</a></p>

@endsection