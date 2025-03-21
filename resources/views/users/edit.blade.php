@extends('layouts/default')

@section('title', $user->name . " - Usuários")
@section('page-title', 'Editar')

@php
    $breadcrumbs = [
        ['label' => 'Painel', 'route' => route('dashboard')],
        ['label' => 'Usuários', 'route'=> route('users.index')],
        ['label' => $user->name],
    ];
@endphp

@section('content')
    @session('status')
    <div class="alert alert-success">
        {{ $value }}
    </div>
    @endsession

    @include('users/fragments/basic-details')
    @include('users/fragments/profile')
    @include('users/fragments/interests')
    @include('users/fragments/roles')
@endsection