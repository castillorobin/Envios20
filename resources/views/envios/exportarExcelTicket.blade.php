<table border="1">
    <thead>
        <tr style="background-color: #f2f2f2; font-weight: bold;">
            <th>ID</th>
            <th>Comercio</th>
            <th>Destinatario</th>
            <th>Dirección</th>
            <th>Tipo</th>
            <th>Estado</th>
            <th>Fecha de entrega</th>
            <th>Precio</th>
            <th>Envío</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pedidos as $pedido)
            <tr>
                <td>{{ $pedido->id }}</td>
                <td>{{ $pedido->comercio }}</td>
                <td>{{ $pedido->destinatario }}</td>
                <td>{{ $pedido->direccion }}</td>
                <td>{{ $pedido->tipo }}</td>
                <td>{{ $pedido->estado }}</td>
                <td>{{ \Carbon\Carbon::parse($pedido->fecha_entrega)->format('d/m/Y') }}</td>
                <td>{{ $pedido->precio }}</td>
                <td>{{ $pedido->envio }}</td>
                <td>{{ $pedido->total }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<br><br>

<table>
    <tr>
        <td><strong>Total pagado:</strong></td>
        <td>${{ number_format($total, 2) }}</td>
    </tr>
    <tr>
        <td><strong>Cantidad de guías:</strong></td>
        <td>{{ $cantidad }}</td>
    </tr>
</table>