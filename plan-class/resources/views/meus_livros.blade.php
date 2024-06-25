@extends('layouts.master')

@section('titulo','Biblioteca')

@section('content')
    <nav class="navbar">
            
        <ul>
            <li><a class="a" href="{{route('home')}}">Home</a></li>
            <li><a class="a" href="{{route('books.index')}}">Meus Livros</a></li>
            <li><a class="a" href="{{route('books.create')}}">Cadastrar Livros</a></li>
            <li><a class="a" href="{{route('logout')}}">Sair</a></li>
        </ul>
        <h5>Seja bem-vindo, {{Auth::user()->name}}</h5>
    </nav>
    <div class="container-fluid">
        <div class="box">
            <h2>SEUS LIVROS</h2>
            <ul class="meus-livros">
            @foreach ($books as $book)
                <li>{{$book->titulo}} <a 
                     href="{{route('books.edit' , ['book'=>$book->id])}}"> edit </a> | <a
                     href="{{route('books.show' , ['book'=>$book->id])}}">Mais Informações</a></li>
            @endforeach
            </ul>
            <button class="btn btn-success cadastro"><a href="{{route('books.create')}}" style="text-decoration: none;color:white;"> Adicionar Novo Livro</a></button>
            @if (session()->has('message'))
                <div class="alert alert-success" role="alert">{{session()->get('message')}}</div>    
            @endif
        </div>
    </div>

    
@endsection
