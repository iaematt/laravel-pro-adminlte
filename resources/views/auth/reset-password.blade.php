@extends('layouts/auth')

@section('body-class', 'register-page')
@section('title', 'Redefinir senha')

@section('content')
<div class="register-box">
    <div class="register-logo">
        <a href="{{ route('login') }}"><b>Admin</b>LTE</a>
    </div>
    <div class="card">
        <div class="card-body register-card-body">
            <p class="register-box-msg">Preencha com uma nova senha</p>
            <form action="{{ route('password.update') }}" method="post">
                @csrf
                <input type="hidden" name="token" value="{{ request()->token }}">
                <div class="input-group mb-3">
                    <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                    <input
                        type="email"
                        name="email"
                        readonly
                        class="form-control @error('email') is-invalid @enderror"
                        value="{{ request()->email }}"
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
                            <button type="submit" class="btn btn-primary">Reset password</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection