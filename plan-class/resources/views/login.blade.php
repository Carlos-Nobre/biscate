@extends('layouts.master')

@section('titulo','Login')
    <div class="container-fluid">
        <div class="box">
            <h3>Login</h3>
            <form action="{{ route('user.auth') }}" method="POST">
                @csrf
                <label class="form-label">Email</label>
                <input class="form-control" type="text"  name='email' placeholder="Digite se email">
                <label class="form-label">Senha</label>
                <input class="form-control" type="password"  name='password' placeholder="Digite sua senha ">
                <button type="submmit" class="btn btn-outline-success submit ">logar</button>
            </form>
            <h6>Não tem uma conta ainda?<a href="{{route('user.register')}}">Click aqui para Cadastrar-se</a></h6>
        </div>
    </div>

@section('content')

@endsection