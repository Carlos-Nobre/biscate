@extends('layouts.master')

@section('titulo','Biblioteca')

@section('content')
    <nav class="navbar">
        <ul>
            
        </ul>
        <a href="{{route('logout')}}">Sair</a>
    </nav>

    <ul>
            @foreach ($books as $book)
                <li>{{$book->titulo}}  | <a href="{{route('books.edit' , ['book'=>$book->id])}}"> edit </a> | <a href="{{route('books.show' , ['book'=>$book->id])}}">Mais Informações</a></li>
            @endforeach
    </ul>

    <a href="{{route('books.create')}}">Adicionar livro</a>
@endsection

