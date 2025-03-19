@extends('layouts/default')

@section('title', 'Usuários')
@section("page-actions")
    <a href="#" class="btn btn-primary">Adicionar</a>
@endsection

@section('page-title', 'Usuários')

@section('content')
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Endereço de e-mail</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <a href="#" class="btn btn-primary btn-sm">Editar</a>
                <a href="#" class="btn btn-danger btn-sm">Remover</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection