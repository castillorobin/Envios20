<?php
namespace App\Exports;

use App\Models\Envio;
use Illuminate\Support\Collection;
use Illuminate\Support\Carbon;
use Maatwebsite\Excel\Concerns\{
    FromCollection, WithHeadings, WithMapping, WithColumnFormatting,
    ShouldAutoSize, WithEvents, WithDrawings, WithCustomStartCell
};
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use PhpOffice\PhpSpreadsheet\Shared\Date as ExcelDate;

class ReporteTicketExcelExport implements
    FromCollection, WithHeadings, WithMapping, WithColumnFormatting,
    ShouldAutoSize, WithEvents, WithDrawings, WithCustomStartCell
{
    private string $ticket;
    private string $usuario;
    private Collection $pedidos;
    private float $total;
    private int $cantidad;

    public function __construct($ticket, $usuario)
    {
        $this->ticket = $ticket;
        $this->usuario = $usuario;

        $this->pedidos = Envio::where('ticketc', $ticket)->get();
        $this->total = $this->pedidos->sum('total');
        $this->cantidad = $this->pedidos->count();
    }

    public function startCell(): string
    {
        return 'A9';
    }

    public function collection()
    {
        return $this->pedidos;
    }

    /** 🟢 Encabezados del reporte */
    public function headings(): array
    {
        return [
            'Guía',
            'Comercio',
            'Destinatario',
            'Dirección',
            'Tipo de envío',
            'Estado del envío',
            'Fecha de entrega',
            'Estado del pago',
            'Precio del paquete',
            'Precio de envío',
            'Total',
            'Cobro del envío'
        ];
    }

    /** 🟢 Mapeo de campos según la tabla */
    public function map($row): array
    {
        return [
            $row->guia,
            $row->comercio,
            $row->destinatario,
            $row->direccion,
            $row->tipo,
            $row->estado,
            $this->toExcelDate($row->fecha_entrega ?? null),
            $row->pago ?? '',                // Estado del pago
            (float) ($row->precio ?? 0),     // Precio del paquete
            (float) ($row->envio ?? 0),      // Precio de envío
            (float) ($row->total ?? 0),      // Total
            $row->cobro ?? '',               // Cobro del envío
        ];
    }

    /** 🟢 Formatos de columnas */
    public function columnFormats(): array
    {
        return [
            'G' => NumberFormat::FORMAT_DATE_DDMMYYYY, // Fecha entrega
            'I' => NumberFormat::FORMAT_CURRENCY_USD_SIMPLE, // Precio paquete
            'J' => NumberFormat::FORMAT_CURRENCY_USD_SIMPLE, // Precio envío
            'K' => NumberFormat::FORMAT_CURRENCY_USD_SIMPLE, // Total
        ];
    }

    /** 🟢 Logo de la empresa */
    public function drawings()
    {
        $path = public_path('fotos/logo24.png');
        if (!file_exists($path)) return [];

        $drawing = new Drawing();
        $drawing->setName('Logo');
        $drawing->setDescription('Logo');
        $drawing->setPath($path);
        $drawing->setHeight(60);
        $drawing->setCoordinates('E1');
        $drawing->setOffsetX(-50);

        return [$drawing];
    }

    /** 🟢 Estilos del reporte */
    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $e) {
                $s = $e->sheet->getDelegate();
                $lastCol = 'L'; // Ahora llega hasta la columna 12 (L)

                // --- Encabezado del reporte ---
                $s->mergeCells("A3:{$lastCol}3");
                $s->setCellValue('A3', 'Reporte de Ticket - Melo Express');
                $s->getStyle('A3')->getFont()->setBold(true)->setSize(14);
                $s->getStyle('A3')->getAlignment()->setHorizontal('center');

                $s->mergeCells("A4:{$lastCol}4");
                $s->setCellValue('A4', 'Ticket: ' . $this->ticket);
                $s->getStyle('A4')->getAlignment()->setHorizontal('left');

                $s->mergeCells("A5:{$lastCol}5");
                $s->setCellValue('A5', 'Fecha: ' . now()->format('d/m/Y H:i:s'));
                $s->getStyle('A5')->getAlignment()->setHorizontal('left');

                $s->mergeCells("A6:{$lastCol}6");
                $s->setCellValue('A6', 'Usuario: ' . $this->usuario);
                $s->getStyle('A6')->getAlignment()->setHorizontal('left');

                // --- Cabecera de tabla ---
                $s->getStyle("A9:{$lastCol}9")->getFont()->setBold(true);
                $s->getStyle("A9:{$lastCol}9")->getAlignment()->setHorizontal('center');
                $s->getStyle("A9:{$lastCol}9")->getFill()
                    ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                    ->getStartColor()->setARGB('FFEDEDED');
                $s->getStyle("A9:{$lastCol}9")->getBorders()->getAllBorders()
                    ->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);

                // --- Total ---
                $totalRow = 10 + $this->pedidos->count() + 1;
                $s->mergeCells("A{$totalRow}:K{$totalRow}");
                $s->setCellValue("A{$totalRow}", 'Total pagado:');
                $s->setCellValue("L{$totalRow}", $this->total);

                $s->getStyle("A{$totalRow}:K{$totalRow}")
                    ->getAlignment()->setHorizontal('right');
                $s->getStyle("L{$totalRow}")
                    ->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_CURRENCY_USD_SIMPLE);
                $s->getStyle("A{$totalRow}:L{$totalRow}")->getFont()->setBold(true);
            }
        ];
    }

    private function toExcelDate($value)
    {
        if (!$value) return null;
        try {
            return ExcelDate::dateTimeToExcel(Carbon::parse($value));
        } catch (\Throwable $e) {
            return $value;
        }
    }
}