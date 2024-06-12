@extends('layouts.master')

@section('titulo','Welcome')

@section('content')

    <a href="{{route('user.register')}}">Register</a>
    <a href="{{ route('user.login') }}">Login</a>

@endsection