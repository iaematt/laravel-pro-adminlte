<form action="{{ route('users.update', $user) }}" method="POST" class="card">
    @csrf
    @method('PUT')

    <div class="card-header">
        Dados do usuário {{ $user->name }}
    </div>

    <div class="card-body">
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input
                type="text"
                name="name"
                id="name"
                value="{{ old('name') ?? $user->name }}"
                class="form-control @error('name') is-invalid @enderror"
            >
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Endereço de e-mail</label>
            <input
                type="email"
                name="email"
                id="email"
                value="{{ old('email') ?? $user->email }}"
                class="form-control @error('email') is-invalid @enderror"
            >
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Senha</label>
            <input
                type="password"
                name="password"
                id="password"
                class="form-control @error('password') is-invalid @enderror"
            >
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Salvar alterações</button>
    </div>
</form>
