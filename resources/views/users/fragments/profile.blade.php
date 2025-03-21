<form action="{{ route('users.updateProfile', $user) }}" method="POST" class="card mt-4">
    @csrf
    @method('PUT')

    <div class="card-header">
        Perfil
    </div>

    <div class="card-body">
        <div class="mb-3">
            <label class="form-label" for="type">
                Tipo de pessoa
            </label>
            <select
            name="type"
            class="form-control @error('type') is-invalid @enderror"
            >
                @foreach (['PF', 'PJ'] as $type)
                    <option
                        value="{{ $type }}"
                        @selected(old('type') === $type || $user?->profile?->type === $type)
                    >{{ $type }}</option>
                @endforeach
            </select>
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Endereço</label>
            <input
                type="text"
                name="address"
                id="address"
                value="{{ old('address') ?? $user?->profile?->address }}"
                class="form-control @error('address') is-invalid @enderror"
            >
            @error('address')
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