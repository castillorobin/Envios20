<?php

namespace App\Exports;

use App\Models\Caja;
use App\Models\Detallecaja;


use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ReporteCajasExport implements FromCollection, WithMapping, WithHeadings
{

    protected $idcaja;

    public function __construct($idcaja)
    {
        $this->idcaja = $idcaja;
    }

    public function collection()
    {
        return DB::table('detallecajas')
            ->join('cajas', 'detallecajas.idcaja', '=', 'cajas.id')
            ->where('detallecajas.idcaja', $this->idcaja)
            ->select(
                'detallecajas.id as id_detalle',
                'detallecajas.concepto',
                'detallecajas.valor',
                'cajas.cajero',
                'detallecajas.created_at'
            )
            ->get();
    }

    public function map($row): array
    {
        return [
            $row->id_detalle,
            $row->concepto,
            $row->valor,
            $row->cajero,
            \Carbon\Carbon::parse($row->created_at)->format('d/m/Y'),
        ];
    }

    public function headings(): array
    {
        return [
            'ID Detalle',
            'Concepto',
            'Monto',
            'Cajero',
            'Fecha',
        ];
    }
}