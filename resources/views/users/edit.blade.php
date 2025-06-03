@extends('layouts.admin')

@section('content')
    <div class="h-screen bg-gray-100">


        <div class="content">
            <div class="content-title">
                <h1 class="page-title">Editar Usuário</h1>
                <a href="{{ route('user.index') }}" class="btn-primary">Listar</a>
            </div>

            <x-alert />

            <form action="{{ route('user.update', ['user' => $user->id]) }}" class="form-container" method="POST">
                @csrf
                @method('PUT')

                <label class="form-label" for="name">Nome: </label>
                <input class="form-input" type="text" name="name" id="name" placeholder="Nome Completo"
                    value="{{ old('name', $user->name) }}">

                <label class="form-label" for="email">Email: </label>
                <input class="form-input" type="text" name="email" id="email" placeholder="Melhor Email"
                    value="{{ old('email', $user->email) }}">



                <button class="btn-sucess" type="submit">Salvar</button>
            </form>
        </div>


    </div>
@endsection
