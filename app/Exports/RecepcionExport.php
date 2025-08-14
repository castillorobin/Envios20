<?php

namespace App\Exports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithDrawings;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use PhpOffice\PhpSpreadsheet\Shared\Date as ExcelDate;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class RecepcionExport implements
    FromCollection,
    WithHeadings,
    WithMapping,
    WithColumnFormatting,
    ShouldAutoSize,
    WithEvents,
    WithDrawings,
    WithCustomStartCell
{
    public function __construct(private Collection $rows) {}

    /** Donde inicia la tabla (encabezado ocupa filas arriba) */
    public function startCell(): string
    {
        return 'A8'; // La fila 8 tendrá los headings de la tabla
    }

    /** Logo en el encabezado */
    public function drawings()
    {
        $logoPath = public_path('fotos/logo24.png'); // ajusta si tu ruta cambia
        if (!file_exists($logoPath)) {
            return []; // si no existe, no inserta nada
        }
        $drawing = new Drawing();
        $drawing->setName('Logo');
        $drawing->setDescription('Logo');
        $drawing->setPath($logoPath);
        $drawing->setHeight(60);              // alto del logo
        $drawing->setCoordinates('A1');       // posición del logo
        $drawing->setOffsetX(5);
        $drawing->setOffsetY(5);
        return [$drawing];
    }

    public function collection()
    {
        return $this->rows->values();
    }

    public function headings(): array
    {
        return ['# de ticket', 'Comercio', 'Usuario', 'Agencia', 'Subtotal', 'IVA', 'Descuento', 'Nota', 'Total', 'Fecha'];
    }

    public function map($caja): array
    {
        $persoi = (float) ($caja->persoi ?? 0);
        $puntoi = (float) ($caja->puntoi ?? 0);
        $casili = (float) ($caja->casili ?? 0);
        $depari = (float) ($caja->depari ?? 0);
        $guiasi = (float) ($caja->guiasi ?? 0);

        $subtotal = $persoi + $puntoi + $casili + $depari + $guiasi;
        $iva      = (float) ($caja->iva ?? 0);
        $descto   = (float) ($caja->descuento ?? 0);
        $total    = (float) ($caja->total ?? ($subtotal + $iva - $descto));

        return [
            '#' . $caja->codigo,
            $caja->comercio,
            $caja->cajero,
            $caja->agencia,
            $subtotal,
            $iva,
            $descto,
            $caja->nota,
            $total,
            $caja->created_at ? ExcelDate::dateTimeToExcel($caja->created_at) : null,
        ];
    }

    public function columnFormats(): array
    {
        return [
            'E' => NumberFormat::FORMAT_CURRENCY_USD_SIMPLE, // Subtotal
            'F' => NumberFormat::FORMAT_CURRENCY_USD_SIMPLE, // IVA
            'G' => NumberFormat::FORMAT_CURRENCY_USD_SIMPLE, // Descuento
            'I' => NumberFormat::FORMAT_CURRENCY_USD_SIMPLE, // Total
            'J' => NumberFormat::FORMAT_DATE_DDMMYYYY,       // Fecha
        ];
    }

    /** Encabezado (texto, merges y estilos) + estilos de la fila de encabezados de la tabla */
    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {

                // Texto del encabezado (ajusta a tu gusto)
                $sheet = $event->sheet->getDelegate();

                // Altura de filas del bloque de encabezado
                $sheet->getRowDimension(1)->setRowHeight(50);
                $sheet->getRowDimension(2)->setRowHeight(6);  // separador visual
                $sheet->getRowDimension(3)->setRowHeight(22);
                $sheet->getRowDimension(4)->setRowHeight(18);
                $sheet->getRowDimension(5)->setRowHeight(18);
                $sheet->getRowDimension(6)->setRowHeight(18);

                // Combinar celdas para centrar textos sobre 10 columnas (A..J)
                foreach ([1,3,4,5,6] as $row) {
                    $sheet->mergeCells("A{$row}:J{$row}");
                }

                // Título
                $sheet->setCellValue('A3', 'Reporte de recepcion');
                $sheet->getStyle('A3')->getFont()->setBold(true)->setSize(14);
                $sheet->getStyle('A3')->getAlignment()->setHorizontal('center');

                // Dirección
                $sheet->setCellValue('A4', 'Centro Comercial Metrogaleria local 3-9 - San Salvador');
                $sheet->getStyle('A4')->getAlignment()->setHorizontal('center');

                // Web
                $sheet->setCellValue('A5', 'WWW.MELOEXPRESS.COM.SV');
                $sheet->getStyle('A5')->getAlignment()->setHorizontal('center');

                // Fecha y hora (usa zona horaria de tu app)
                $sheet->setCellValue('A6', 'Fecha: ' . now()->format('d/m/Y') . '    Hora: ' . now()->format('h:i A'));
                $sheet->getStyle('A6')->getAlignment()->setHorizontal('center');

                // Línea/relleno para Headings de la tabla (fila 8)
                $sheet->getStyle('A8:J8')->getFont()->setBold(true);
                $sheet->getStyle('A8:J8')->getAlignment()->setHorizontal('center');
                $sheet->getStyle('A8:J8')->getFill()
                    ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                    ->getStartColor()->setARGB('FFEDEDED');

                // Bordes finos al header de la tabla
                $sheet->getStyle('A8:J8')->getBorders()->getAllBorders()
                    ->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);

                // (Opcional) Encabezado de impresión de la hoja
                // $sheet->getHeaderFooter()->setOddHeader('&C&HReporte de recepcion');

                // (Opcional) Repetir fila 8 como fila de título en cada página impresa
                // $sheet->getPageSetup()->setRowsToRepeatAtTopByStartAndEnd(8, 8);
            },
        ];
    }
}