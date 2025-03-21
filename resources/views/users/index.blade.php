@extends('layouts/default')

@section('title', 'Usuários')
@section("page-actions")
    <a href="{{ route("users.create") }}" class="btn btn-primary">Adicionar</a>
@endsection

@php
    $breadcrumbs = [
        ['label' => 'Painel', 'route' => route('dashboard')],
        ['label' => 'Usuários'],
    ];
@endphp

@section('page-title', 'Usuários')

@section('content')
    @session('status')
        <div class="alert alert-success">
            {{ $value }}
        </div>
    @endsession

    <form action="{{ route('users.index') }}" method="GET" class="mb-3 input-group input-group-sm" style="width: 300px">
        <input
            type="text"
            name="keyword"
            class="form-control"
            placeholder="Buscar por nome ou e-mail..."
            value="{{ request()?->keyword }}"
        >
        <button type="submit" class="btn btn-primary">Buscar</button>
    </form>

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
                    @can('edit', \App\Models\User::class)
                        <a href="{{ route('users.edit', $user) }}" class="btn btn-primary btn-sm">Editar</a>
                    @endcan

                    @can('destroy', \App\Models\User::class)
                        <form action="{{ route('users.destroy', $user) }}" method="POST" class="d-inline-flex">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Remover</button>
                        </form>
                    @endcan
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $users->links() }}
@endsection
