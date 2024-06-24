@extends('layouts.master')

@section('titulo','Detalhes')

@section('content')

    <h2>Livro - {{$book->titulo}}</h2>

    <form action="{{route('books.destroy' , ['book' => $book->id])}}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit">Deletar</button>
    </form>
@endsection