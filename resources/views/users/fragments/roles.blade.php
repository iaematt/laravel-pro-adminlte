<form action="{{ route('users.updateRoles', $user) }}" method="POST" class="card mb-4">
    @csrf
    @method('PUT')

    <div class="card-header">
        Cargos
    </div>

    <div class="card-body">
        @foreach ($roles as $role)
            <div class="form-check">
                <label class="form-check-label @error('roles') is-invalid @enderror">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        value="{{ $role->id }}"
                        name="roles[]"
                        @checked(in_array($role->name, $user->roles->pluck('name')->toArray()))
                    >
                    {{ $role->name }}
                </label>

                @if ($loop->last)
                    @error('roles')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                @endif
            </div>
        @endforeach


    </div>

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Salvar alterações</button>
    </div>
</form>