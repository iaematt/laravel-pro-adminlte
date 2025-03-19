@extends('layouts/auth')

@section('body-class', 'register-page')
@section('title', 'Cadastro')

@section('content')
<div class="register-box">
    <div class="register-logo">
        <a href="{{ route('login') }}"><b>Admin</b>LTE</a>
    </div>
    <div class="card">
        <div class="card-body register-card-body">
            <p class="register-box-msg">Cadastro de novo membro</p>
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-text"><span class="bi bi-person"></span></div>
                    <input
                        type="text"
                        name="name"
                        class="form-control @error('name') is-invalid @enderror"
                        value="{{ old('name') }}"
                        placeholder="Nome completo"
                    >
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
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
                <div class="input-group mb-3">
                    <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                    <input
                        type="password"
                        name="password_confirmation"
                        class="form-control"
                        placeholder="Confirmar senha"
                    >
                </div>
                <div class="row">
                    <div class="col">
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </div>
                    </div>
                </div>
            </form>
            <p class="mb-1 text-center">
                <a href="{{ route('login') }}" class="text-center">Eu já sou um membro</a>
            </p>
        </div>
    </div>
</div>
@endsection