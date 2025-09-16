<?php
namespace App\Exports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\{
    FromCollection, WithHeadings, WithMapping, WithColumnFormatting,
    ShouldAutoSize, WithEvents, WithDrawings, WithCustomStartCell
};
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use PhpOffice\PhpSpreadsheet\Shared\Date as ExcelDate;
use Illuminate\Support\Carbon;

class EnviosExport implements
    FromCollection, WithHeadings, WithMapping, WithColumnFormatting,
    ShouldAutoSize, WithEvents, WithDrawings, WithCustomStartCell
{
    public function __construct(
        private Collection $pedidos,
        private string $usuario
    ) {
        $this->pedidos = $this->pedidos->values();
    }

    /** La tabla empieza en la fila 9 */
    public function startCell(): string { return 'A9'; }

    /** Logo */
    public function drawings()
    {
         $path = public_path('fotos/logo24.png');
    if (!file_exists($path)) return [];

    $d = new Drawing();
    $d->setName('Logo');
    $d->setDescription('Logo');
    $d->setPath($path);
    $d->setHeight(60);

    // Opción 1: directo en D1 (más simple)
   // $d->setCoordinates('D1');

    // Opción 2: si prefieres A1 con desplazamiento
    $d->setCoordinates('E1');
$d->setOffsetX(-50); // ajusta fino si quieres moverlo un poquito

    return [$d];
    }

    public function collection() { return $this->pedidos; }

    public function headings(): array
    {
        return [
            'Guía','Comercio','Destinatario','Dirección',
            'Tipo','Fecha de entrega','Estado','Total'
        ];
    }

    public function map($row): array
    {
        return [
            $row->guia,
            $row->comercio,
            $row->destinatario,
            $row->direccion,
            $row->tipo,
            $this->toExcelDate($row->fecha_entrega ?? null),
            $row->estado,
            (float) ($row->total ?? 0),
        ];
    }

    public function columnFormats(): array
    {
        return [
            'F' => NumberFormat::FORMAT_DATE_DDMMYYYY,       // Fecha de entrega
            'H' => NumberFormat::FORMAT_CURRENCY_USD_SIMPLE, // Total
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $e) {
                $s = $e->sheet->getDelegate();
                $lastCol = 'H';

                // --- Logo centrado ---
                $s->mergeCells("A1:{$lastCol}1");
                $s->getRowDimension(1)->setRowHeight(60);
                $s->getStyle("A1:{$lastCol}1")->getAlignment()->setHorizontal('center');

                // Encabezados
                $s->mergeCells("A3:{$lastCol}3");
                $s->setCellValue('A3', 'Cuadre de paquetería');
                $s->getStyle('A3')->getFont()->setBold(true)->setSize(14);
                $s->getStyle('A3')->getAlignment()->setHorizontal('center');

                $s->mergeCells("A4:{$lastCol}4");
                $s->setCellValue('A4', 'Centro Comercial Metrogaleria local 3-9 - San Salvador');
                $s->getStyle('A4')->getAlignment()->setHorizontal('center');

                $s->mergeCells("A5:{$lastCol}5");
                $s->setCellValue('A5', 'WWW.MELOEXPRESS.COM.SV');
                $s->getStyle('A5')->getAlignment()->setHorizontal('center');

                $s->mergeCells("A6:{$lastCol}6");
                $s->setCellValue('A6', 'Fecha: ' . now()->format('d/m/Y') . '    Hora: ' . now()->format('h:i A'));
                $s->getStyle('A6')->getAlignment()->setHorizontal('left');

                $s->mergeCells("A7:{$lastCol}7");
                $s->setCellValue('A7', 'Usuario: ' . $this->usuario);
                $s->getStyle('A7')->getAlignment()->setHorizontal('left');

                // Estilos cabecera tabla
                $s->getStyle("A9:{$lastCol}9")->getFont()->setBold(true);
                $s->getStyle("A9:{$lastCol}9")->getAlignment()->setHorizontal('center');
                $s->getStyle("A9:{$lastCol}9")->getFill()
                    ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                    ->getStartColor()->setARGB('FFEDEDED');
                $s->getStyle("A9:{$lastCol}9")->getBorders()->getAllBorders()
                    ->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);

                // --- Total general ---
                $totalRow = 10 + $this->pedidos->count() + 1;
                $s->mergeCells("A{$totalRow}:G{$totalRow}");
                $s->setCellValue("A{$totalRow}", 'Total general:');
                $s->setCellValue("H{$totalRow}", $this->pedidos->sum('total'));

                $s->getStyle("A{$totalRow}:G{$totalRow}")
                    ->getAlignment()->setHorizontal('right');
                $s->getStyle("H{$totalRow}")
                    ->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_CURRENCY_USD_SIMPLE);

                $s->getStyle("A{$totalRow}:H{$totalRow}")->getFont()->setBold(true);
            }
        ];
    }

    private function toExcelDate($value)
    {
        if (!$value) return null;
        if ($value instanceof \DateTimeInterface) {
            return ExcelDate::dateTimeToExcel($value);
        }
        try {
            return ExcelDate::dateTimeToExcel(Carbon::parse($value));
        } catch (\Throwable $e) {
            return $value;
        }
    }
}