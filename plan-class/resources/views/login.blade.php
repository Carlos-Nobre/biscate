@extends('layouts.master')

@section('titulo','Login')
    <div class="container login">
        <form action="{{ route('user.auth') }}" method="POST">
            @csrf
            <label class="form-label">Email</label>
            <input class="form-control" type="text"  name='email' placeholder="Digite se email">
            <label class="form-label">Senha</label>
            <input class="form-control" type="text"  name='password' placeholder="Digite sua senha ">
            <button type="submmit" class="btn btn-outline-success">logar</button>
        </form>
    </div>

@section('content')

@endsection