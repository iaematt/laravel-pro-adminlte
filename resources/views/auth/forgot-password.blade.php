@extends('layouts/auth')

@section('body-class', 'login-page')
@section('title', 'Recuperar senha')

@section('content')
<div class="login-box">
    <div class="login-logo">
        <a href="{{ route('login') }}"><b>Admin</b>LTE</a>
    </div>
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Digite se endereço de e-mail para recuperar a senha</p>

            @session('status')
                <div class="alert alert-success">
                    {{ $value }}
                </div>
            @endsession

            <form action="{{ route('password.email') }}" method="post">
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
                <div class="row">
                    <div class="col">
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Enviar link de recuperação</button>
                        </div>
                    </div>
                </div>
            </form>

            <p class="mb-1 mt-1 text-center">
                <a href="{{ route('login') }}" title="Cadastrar novo membro">
                    Voltar para página de login
                </a>
            </p>
        </div>
    </div>
</div>

@endsection