  <x-default-layout>
<form method="POST" action="{{ route('pedidos.autorizar') }}">
    @csrf

    <input type="hidden" name="ticket" value="{{ $ticket }}">

    <div class="mb-3">
        <label for="supervisor_id" class="form-label">Supervisor</label>
        <select name="supervisor_id" id="supervisor_id" class="form-select" required>
            <option value="">Seleccione supervisor</option>
            @foreach($supervisores as $sup)
                <option value="{{ $sup->id }}">{{ $sup->name }} ({{ $sup->email }})</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Contraseña del supervisor</label>
        <input type="password" name="password" id="password" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Autorizar</button>
    <a href="{{ url()->previous() }}" class="btn btn-secondary">Cancelar</a>
</form>
</x-default-layout>