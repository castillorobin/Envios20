<x-default-layout>
    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="card shadow-lg" style="width: 400px; max-width: 90%;">
            <div class="card-body">
                <h4 class="mb-4 text-center">Autorización de Supervisor</h4>

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

                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary">Autorizar</button>
                        <a href="{{ url()->previous() }}" class="btn btn-secondary">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-default-layout>