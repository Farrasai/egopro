<?php

namespace App\Exports;


use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\Exportable;

class LaporanExport implements FromCollection, WithStrictNullComparison,WithHeadings
{
    use Exportable;

    function __construct($data) {
        $this->data = $data; 
    }

    public function headings(): array
    {
        return [
            'No',
            'Tanggal Sewa',
            'Nama Penyewa',
            'Barang',
            'Biaya Sewa',
            'Jumlah Sewa',
            'Sub Biaya',
            'Denda'
        ];
    }
    
    public function collection()
    {
        return $this->data;
    }

}
