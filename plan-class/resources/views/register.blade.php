@extends('layouts.master')

@section('titulo','Register')

@section('content')
<div class="container-fluid">
     <div class="box">
         <h1>Registre-se</h1>
         <form action="{{route('user.store')}}" method="POST">
                @csrf
                <label class="form-label">Seu nome</label>
                <input class="form-control" type="text" name="name" placeholder="Seu nome" >
                <label class="form-label">Email</label>
                <input class="form-control" type="text" name="email" placeholder="Seu email" >
                <label class="form-label">Senha</label>
                <input class="form-control" type="text" name="password" placeholder="Sua senha" >
                <label class="form-label">Confirme sua senha</label>
                <input class="form-control" type="text" name="password_confirmation" placeholder="Confirme sua senha">
            
            <button type="submit" class="btn btn-outline-sucess submit">Cadastrar</button>
        </form>
     </div>
</div>
@endsection