<?php

namespace App\Exports;

use Illuminate\Support\Carbon;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\{
    FromCollection, WithHeadings, WithMapping, WithColumnFormatting,
    ShouldAutoSize, WithEvents, WithDrawings, WithCustomStartCell
};
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use PhpOffice\PhpSpreadsheet\Shared\Date as ExcelDate;

class TicketRepoExport implements
    FromCollection, WithHeadings, WithMapping, WithColumnFormatting,
    ShouldAutoSize, WithEvents, WithDrawings, WithCustomStartCell
{
    public function __construct(
        private Collection $rows,
        private string $usuario,
        private ?string $repartidor,
        private string|int $ticketId,
        private int $cantidadGuias,
        private float $totalPagado
    ) {}

    /** Inicia la tabla en la fila 10 (A10) para dejar espacio al encabezado */
    public function startCell(): string { return 'A10'; }

    /** Inserta el logo */
    public function drawings()
    {
        $path = public_path('fotos/logo24.png'); // ajusta si tu ruta cambia
        if (!file_exists($path)) return [];
        $d = new Drawing();
        $d->setName('Logo');
        $d->setDescription('Logo');
        $d->setPath($path);
        $d->setHeight(60);
        $d->setCoordinates('A1');
        $d->setOffsetX(5);
        $d->setOffsetY(5);
        return [$d];
    }

    public function collection() { return $this->rows->values(); }

    /** Encabezados de la tabla, mismo orden que el PDF */
    public function headings(): array
    {
        return [
            'Guia','Comercio','Destinatario','Usuario',
            'Agencia','Estado','Estado del pago',
            'Tipo','Total','Fecha'
        ];
    }

    /** Mapeo 1:1 con tus campos */
    public function map($row): array
    {
        $fechaExcel = $this->toExcelDate($row->created_at ?? null);

        return [
            $row->guia,
            $row->comercio,
            $row->destinatario,
            $row->usuario,
            $row->agencia,
            $row->estado,
            $row->pago,
            $row->tipo,
            (float) ($row->total ?? 0),
            // Fecha de entrega como fecha de Excel
            $fechaExcel,
           
            
        ];
    }

    private function toExcelDate($value)
{
    if (!$value) return null;

    if ($value instanceof \DateTimeInterface) {
        return \PhpOffice\PhpSpreadsheet\Shared\Date::dateTimeToExcel($value);
    }

    // Si viene como string, intentamos parsear
    try {
        // Intenta parseo libre (YYYY-mm-dd HH:ii:ss, etc.)
        return \PhpOffice\PhpSpreadsheet\Shared\Date::dateTimeToExcel(Carbon::parse($value));
    } catch (\Throwable $e) {
        // Si tu string está en formato dd/mm/YYYY, usa createFromFormat
        try {
            $c = Carbon::createFromFormat('d/m/Y', $value)->startOfDay();
            return \PhpOffice\PhpSpreadsheet\Shared\Date::dateTimeToExcel($c);
        } catch (\Throwable $e2) {
            // Si no se puede parsear, devuélvelo tal cual (como texto)
            return $value;
        }
    }
}

    /** Formatos: fecha y monedas */
    public function columnFormats(): array
    {
        return [
            'G' => NumberFormat::FORMAT_DATE_DDMMYYYY,       // Fecha de entrega
            'H' => NumberFormat::FORMAT_CURRENCY_USD_SIMPLE, // Precio
            'I' => NumberFormat::FORMAT_CURRENCY_USD_SIMPLE, // Envio
            'J' => NumberFormat::FORMAT_DATE_DDMMYYYY, // Total
        ];
    }

    /** Estilos + textos encabezado + total pagado al pie */
   public function registerEvents(): array
{
    return [
        AfterSheet::class => function (AfterSheet $e) {
            $s = $e->sheet->getDelegate();
            $lastCol = 'J';

            // Alturas y merges
            $s->getRowDimension(1)->setRowHeight(50);
            foreach ([3,4,5,6,7,8,9] as $r) {
                $s->mergeCells("A{$r}:{$lastCol}{$r}");
            }

            // Encabezados
            $s->setCellValue('A3', 'Reporte de recepcion');
            $s->getStyle('A3')->getFont()->setBold(true)->setSize(14);
            $s->getStyle('A3')->getAlignment()->setHorizontal('center');

            $s->setCellValue('A4', 'Centro Comercial Metrogaleria local 3-9 - San Salvador');
            $s->getStyle('A4')->getAlignment()->setHorizontal('center');

            $s->setCellValue('A5', 'WWW.MELOEXPRESS.COM.SV');
            $s->getStyle('A5')->getAlignment()->setHorizontal('center');

            $s->setCellValue('A6', 'Fecha: ' . now()->format('d/m/Y') . '    Hora: ' . now()->format('h:i A'));
            $s->getStyle('A6')->getAlignment()->setHorizontal('left'); // ← IZQUIERDA

            $s->setCellValue('A7', 'Usuario: ' . $this->usuario);
            $s->getStyle('A7')->getAlignment()->setHorizontal('left'); // ← IZQUIERDA

            $s->setCellValue('A8', 'Repartidor: ' . ($this->repartidor ?? ''));
            $s->getStyle('A8')->getAlignment()->setHorizontal('left'); // ← IZQUIERDA

            $s->setCellValue('A9', 'Ticket: ' . $this->ticketId . '    Cantidad de Guias: ' . $this->cantidadGuias);
            $s->getStyle('A9')->getAlignment()->setHorizontal('left'); // ← IZQUIERDA

            // Encabezados tabla
            $s->getStyle("A10:{$lastCol}10")->getFont()->setBold(true);
            $s->getStyle("A10:{$lastCol}10")->getAlignment()->setHorizontal('center');
            $s->getStyle("A10:{$lastCol}10")->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()->setARGB('FFEDEDED');
            $s->getStyle("A10:{$lastCol}10")->getBorders()->getAllBorders()
                ->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);

            // Total pagado al pie
            $dataCount   = max(1, $this->rows->count());
            $lastDataRow = 10 + $dataCount;
            $totalRow    = $lastDataRow + 2;

            $s->mergeCells("A{$totalRow}:I{$totalRow}");
            $s->setCellValue("A{$totalRow}", 'Total Pagado:');
            $s->setCellValue("J{$totalRow}", $this->totalPagado);
            $s->getStyle("J{$totalRow}")
                ->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_CURRENCY_USD_SIMPLE);
            $s->getStyle("A{$totalRow}:J{$totalRow}")->getFont()->setBold(true);
            $s->getStyle("A{$totalRow}:J{$totalRow}")
                ->getBorders()->getTop()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);

            // Alineación derecha para A13
            $s->getStyle('A13')->getAlignment()->setHorizontal('right');
        },
    ];
}
}
