@extends('layouts.admin')

@section('content')
    <div class="h-screen bg-gray-100">


        <div class="content">
            <div class="content-title">
                <h1 class="page-title">Detalhes do Usuário</h1>
                <span> <a href="{{ route('user.index') }}" class="btn-primary">Listar</a>
                    <a href="{{ route('user.edit', ['user' => $user->id]) }}" class="btn-warning">Editar</a>
                    <a href="#" class="btn-warning">Editar senha</a></span>

            </div>

            <x-alert />

            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-2xl font-semibold mb-4">Informações do usuario</h2>
                <div class="mb-4">
                    <strong>ID:</strong> {{ $user->id }}
                </div>
                <div class="mb-4">
                    <strong>Nome:</strong> {{ $user->name }}
                </div>
                <div class="mb-4">
                    <strong>E-mail:</strong> {{ $user->email }}
                </div>
                <div class="mb-4">
                    <strong>Criado em:</strong> {{ $user->created_at->format('d/m/Y') }}
                </div>
                <div class="mb-4">
                    <strong>Atualizado em:</strong> {{ $user->updated_at->format('d/m/Y') }}
                </div>

            </div>
        </div>


    </div>
@endsection
