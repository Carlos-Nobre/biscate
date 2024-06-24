@extends('layouts.master')

@section('titulo','Login')

@section('content')

@if (session()->has('message'))
    {{session()->get('message')}}
@endif

<form action="{{ route( 'books.update' , ['book' => $book->id])}} " method="POST">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <label for="">Titulo</label>
    <input type="text" name="titulo" value="{{$book->titulo}}">
    <label for="">Subtitulo</label>
    <input type="text" name="sub_titulo" value="{{$book->sub_titulo}}">
    <label for="">Autor</label>
    <input type="text" name="autor"  value="{{$book->autor}}">
    <label for="">edição</label>
    <input type="text" name="edição" value="{{$book->edição}}">
    <label for="">Editora</label>
    <input type="text" name="editora" value="{{$book->editora}}">
    <label for="">Data da Publicação</label>
    <input type="date" name="date_publish" value="{{$book->date_publish}}">
    <button type="submmit">Salvar</button>
</form>
@endsection