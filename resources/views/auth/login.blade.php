@extends('layouts/auth')

@section('body-class', 'login-page')
@section('title', 'Entrar')

@section('content')
<div class="login-box">
    <div class="login-logo">
        <a href="{{ route('login') }}"><b>Admin</b>LTE</a>
    </div>
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Entre para acessar o painel</p>

            @session('status')
                <div class="alert alert-success">
                    {{ $value }}
                </div>
            @endsession

            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                    <input
                        type="email"
                        name="email"
                        class="form-control @error('email') is-invalid @enderror"
                        value="{{ old('email') }}"
                        placeholder="Endereço de e-mail"
                    >
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                    <input
                        type="password"
                        name="password"
                        class="form-control @error('password') is-invalid @enderror"
                        placeholder="Senha"
                    >
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="row">
                    <div class="col">
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Entrar</button>
                        </div>
                    </div>
                </div>
            </form>

            <p class="mb-1 text-center">
                <a href="{{ route('password.request') }}" title="Eu esqueci minha senha">
                    Eu esqueci minha senha
                </a>
            </p>
            <p class="mb-0 text-center">
                <a href="{{ route('register') }}" title="Cadastrar novo membro">
                    Cadastrar novo membro
                </a>
            </p>
        </div>
    </div>
</div>

@endsection