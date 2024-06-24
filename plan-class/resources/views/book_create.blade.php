@extends('layouts.master')

@section('titulo','Cadastrar Livro')

@section('content')
<form action="{{route('books.store')}}" method="POST">
    @csrf
    <label for="">Titulo</label>
    <input type="text" name="titulo" placeholder="Nome">
    <label for="">Subtitulo</label>
    <input type="text" name="sub_titulo" placeholder="Subtitulo">
    <label for="">Autor</label>
    <input type="text" name="autor" placeholder="Autor">
    <label for="">edição</label>
    <input type="text" name="edição" placeholder="Edição">
    <label for="">Editora</label>
    <input type="text" name="editora" placeholder="Editora">
    <label for="">Data da Publicação</label>
    <input type="date" name="date_publish" placeholder="Data da publicação">
    <button type="submmit">Salvar</button>
</form>
@endsection