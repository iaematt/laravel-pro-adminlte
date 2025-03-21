<form action="{{ route('users.updateInterests', $user) }}" method="POST" class="card mt-4">
    @csrf
    @method('PUT')

    <div class="card-header">
        Interesses
    </div>

    <div class="card-body">
        @foreach (['Futebol', 'Formula 1'] as $item)
            <div class="form-check">
                <label class="form-check-label @error('interests') is-invalid @enderror">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        value="{{ $item }}"
                        name="interests[][name]"
                        @checked(in_array($item, $user->interests->pluck('name')->toArray()))
                    >
                    {{ $item }}
                </label>

                @if ($loop->last)
                    @error('interests')
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