@extends('layouts.admin')

@section('content')
    <h1 class="text-3xl font-bold">Bem-vindo</h1>
    <a class="nav-link" href="{{ route('user.create') }}">Cadastrar</a>
@endsection
