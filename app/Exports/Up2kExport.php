<?php

namespace App\Exports;

use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Fill;

class Up2kExport implements FromCollection, WithHeadings, WithMapping, WithStyles
{
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function headings(): array
    {
        return [
            ['Data UP2K'],
            [],
            [
                'No',
                'Nama Produk',
                'Nama Pemilik/Toko',
                'Telepon',
                'Kategori',
                'Perizinan',
                'Pemasaran',
                'Keterangan',
                'Kecamatan',
                'Kelurahan',
                'Alamat',
                'Image',
            ],
        ];
    }

    public function map($row): array
    {
        static $i = 1;

        return [
            $i++,
            $row['nama_produk'],
            $row['nama'],
            $row['telepon'],
            $row['kategori'],
            $row['perizinan'],
            $row['pemasaran'],
            $row['keterangan'],
            $row['kecamatan'],
            $row['kelurahan'],
            $row['alamat'],
            $row['image'],
        ];
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->getColumnDimension('A')->setWidth(5);
        $sheet->getColumnDimension('B')->setWidth(50);
        $sheet->getColumnDimension('C')->setWidth(50);
        $sheet->getColumnDimension('D')->setWidth(25);
        $sheet->getColumnDimension('E')->setWidth(25);
        $sheet->getColumnDimension('F')->setWidth(25);
        $sheet->getColumnDimension('G')->setWidth(25);
        $sheet->getColumnDimension('H')->setWidth(25);
        $sheet->getColumnDimension('I')->setWidth(25);
        $sheet->getColumnDimension('J')->setWidth(25);
        $sheet->getColumnDimension('K')->setWidth(25);
        $sheet->getColumnDimension('L')->setWidth(25);


        $sheet->mergeCells('A1:L1');
        $sheet->getRowDimension(1)->setRowHeight(30);
        $sheet->getStyle('A1')->applyFromArray([
            'font' => [
                'bold' => true,
                'size' => 16,
                'name' => 'Times New Roman'
            ],
            'alignment' => [
                'horizontal' => Alignment::HORIZONTAL_CENTER,
                'vertical' => Alignment::VERTICAL_CENTER
            ],
        ]);

        $sheet->getStyle('A3:L3')->applyFromArray([
            'font' => [
                'bold' => true,
                'size' => 12,
                'color' => ['argb' => 'FFFFFFFF'],
            ],
            'fill' => [
                'fillType' => Fill::FILL_SOLID,
                'startColor' => ['argb' => '036280']
            ],
            'alignment' => [
                'horizontal' => Alignment::HORIZONTAL_CENTER,
                'vertical' => Alignment::VERTICAL_CENTER
            ],
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ]
            ]
        ]);

        // Hitung baris akhir berdasarkan jumlah data
        $rowCount = count($this->data);
        $startRow = 4;
        $endRow = $startRow + $rowCount - 1;
        $dataRange = "A{$startRow}:L{$endRow}";

        // Terapkan gaya
        $sheet->getStyle($dataRange)->getAlignment()->setVertical(Alignment::VERTICAL_TOP);
        $sheet->getStyle($dataRange)->getAlignment()->setWrapText(true); // Aktifkan wrap text
        $sheet->getStyle($dataRange)->getFont()->setName('Times New Roman')->setSize(11);

        return [];
    }


    public function collection()
    {
        return collect($this->data);
    }
}
