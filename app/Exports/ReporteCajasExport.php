<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\{
    FromCollection, WithMapping, WithHeadings, WithEvents, WithDrawings, WithCustomStartCell
};
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use Maatwebsite\Excel\Events\AfterSheet;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;


class ReporteCajasExport implements FromCollection, WithMapping, WithHeadings, WithEvents, WithDrawings, ShouldAutoSize, WithCustomStartCell
{
    protected $id;
    protected $saldo;
    protected $descuadre;
    protected $cajero;
    protected $fechaHora;

    public function __construct($id, $saldo, $descuadre, $cajero, $fechaHora)
    {
        $this->idcaja = $id;
        $this->saldo = $saldo;
        $this->descuadre = $descuadre;
        $this->cajero = $cajero;
        $this->fechaHora = $fechaHora;
    }

    public function collection()
    {
        return DB::table('detallecajas')
            ->join('cajas', 'detallecajas.idcaja', '=', 'cajas.id')
            ->where('detallecajas.idcaja', $this->idcaja)
            ->select(
                'detallecajas.created_at',
                
                'detallecajas.concepto',
                'detallecajas.valor',
                
                'detallecajas.saldo'
            )
            ->get();
    }

    public function map($row): array
    {
         $fechaFormateada = \Carbon\Carbon::parse($row->created_at)->format('d/m/Y');
    $horaFormateada = \Carbon\Carbon::parse($row->created_at)->format('g:i A');
        return [
              $fechaFormateada,
            $horaFormateada,
           
            $row->concepto,
            $row->valor,
            
            $row->saldo,
        ];
    }

   public function headings(): array
    {
        return ['Fecha', 'Hora', 'Concepto', 'Valor', 'Saldo'];
    }

    public function drawings()
    {
        $drawing = new Drawing();
        $drawing->setName('Logo');
        $drawing->setDescription('Logo');
        $drawing->setPath(public_path('fotos/logo24.png')); // Ruta al logo
        $drawing->setHeight(60);
        $drawing->setCoordinates('A1');
        return [$drawing];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                $sheet = $event->sheet;

                // Título
                $sheet->mergeCells('A3:F3');
                $sheet->setCellValue('A3', 'Reporte de caja');
                $sheet->getStyle('A3')->applyFromArray([
                    'font' => ['bold' => true, 'size' => 16],
                    'alignment' => ['horizontal' => 'center']
                ]);

                // Información institucional
                $sheet->mergeCells('A4:F4');
                $sheet->setCellValue('A4', 'Centro Comercial Metrogaleria local 3-9');
                $sheet->getStyle('A4')->applyFromArray([
    'alignment' => ['horizontal' => 'center'],
]);

                $sheet->mergeCells('A5:F5');
                $sheet->setCellValue('A5', 'San Salvador - www.meloexpress.com.sv');
$sheet->getStyle('A5')->applyFromArray([
    'alignment' => ['horizontal' => 'center'],
]);
                // Información de sesión
                $sheet->mergeCells('A7:B7');
                $sheet->setCellValue('A7', "SESION Nº {$this->idcaja}");

                $sheet->mergeCells('C7:D7');
                $sheet->setCellValue('C7', "Cajero: {$this->cajero}");

                $sheet->mergeCells('E7:F7');
                $sheet->setCellValue('E7', "Fecha: {$this->fechaHora}");

                // Encabezados
                $sheet->getStyle('A9:F9')->applyFromArray([
                    'font' => ['bold' => true, 'color' => ['rgb' => 'FFFFFF']],
                    'fill' => [
                        'fillType' => 'solid',
                        'startColor' => ['rgb' => '4F81BD'],
                    ],
                    'alignment' => ['horizontal' => 'center']
                ]);

                // Resumen final: después de los datos
                $count = $this->collection()->count();
                $startRow = 10;
                $lastRow = $startRow + $count + 1;

                $sheet->setCellValue("D{$lastRow}", 'Saldo en caja');
                $sheet->setCellValue("E{$lastRow}", '$ ' . number_format($this->saldo, 2));

                $sheet->setCellValue("D" . ($lastRow + 1), 'Saldo de cajero');
                $sheet->setCellValue("E" . ($lastRow + 1), '$ ' . number_format($this->saldo - $this->descuadre, 2));

                $sheet->setCellValue("D" . ($lastRow + 2), 'Descuadre');
                $sheet->setCellValue("E" . ($lastRow + 2), '$ ' . number_format($this->descuadre, 2));
            }
        ];
    }

    public function startCell(): string
    {
        return 'A9'; // Encabezados en A9, datos desde A10
    }
}