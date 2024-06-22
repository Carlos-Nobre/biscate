@extends('layouts.master')

@section('titulo','Biblioteca')

@section('content')
    <a href="{{route('logout')}}">Sair</a>

    <ul>
        @foreach ($books as $book)
            <li>{{$book->titulo}}</li>
        @endforeach
    </ul>
@endsection