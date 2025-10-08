<?php

namespace App\Exports;

use App\Models\Envio;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ReporteTicketExport implements FromView
{
    protected $ticketc;
    protected $total;
    protected $cantidad;

    public function __construct($ticketc, $total, $cantidad)
    {
        $this->ticketc = $ticketc;
        $this->total = $total;
        $this->cantidad = $cantidad;
    }

    public function view(): View
    {
        $pedidos = Envio::where('ticketc', $this->ticketc)->get();
        $comercio = $pedidos[0]->comercio ?? 'N/A';
        $comerset = \App\Models\Comercio::where('comercio', $comercio)->get();

        return view('envios.exportarExcelTicket', [
            'pedidos'  => $pedidos,
            'comerset' => $comerset,
            'total'    => $this->total,
            'cantidad' => $this->cantidad,
        ]);
    }
}