@extends('layouts.admin')

@section('content')

<div class="h-screen bg-gray-100">
    <header class="header">
        <div class="content-header">
            <h2 class="title-logo"><a href="{{ route('dashboard') }}">Amaral</a></h2>
            <ul class="list-nav-link">
                <li><a href="#" class="nav-link">Usuário</a></li>
                <li><a href="{{ route('dashboard') }}" class="nav-link">Sair</a></li>
            </ul>
        </div>
    </header>

    <div class="content">
        <div class="content-title">
            <h1 class="page-title">Cadastrar Usuário</h1>
            <a href="#" class="btn-primary">Listar</a>
        </div>
        <form action="{{ route('user.store') }}" class="form-container" method="POST">
            @csrf

            <label class="form-label" for="name">Nome: </label>
            <input class="form-input" type="text" name="name" id="name" placeholder="Nome Completo"
                value="{{ old('name') }}">

            <label class="form-label" for="email">Email: </label>
            <input class="form-input" type="text" name="email" id="email" placeholder="Melhor Email"
                value="{{ old('email') }}">

            <label class="form-label"for="password">Senha: </label>
            <input class="form-input" type="password" name="password" id="password"
                placeholder="Senha com no minimo 6 caracteres" value="{{ old('password') }}">

            <button class="btn-sucess" type="submit">Entrar</button>
        </form>
    </div>


</div>
@endsection