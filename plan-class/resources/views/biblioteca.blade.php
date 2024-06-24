@extends('layouts.master')

@section('titulo','Biblioteca')

@section('content')
    <nav class="navbar">
        
        <ul>
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('books.index')}}">Meus Livros</a></li>
            <li><a href="{{route('books.create')}}">Cadastrar Livros</a></li>
            <li><a href="{{route('logout')}}">Sair</a></li>
        </ul>
        <h5>Seja bem-vindo, {{Auth::user()->name}}</h5>
    </nav>


@endsection