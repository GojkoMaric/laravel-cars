@extends('layouts.master')
@section('title')
    All cars
@endsection

@section('content')
    @foreach($cars as $car)
        <h2>
        <a href="{{ route('single-car', ['id'=>$car->id]) }}">
        {{$car->title}}
        </a>
        </h2>
    @endforeach

@endsection