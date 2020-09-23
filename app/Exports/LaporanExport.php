<?php

namespace App\Exports;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View; 
use Maatwebsite\Excel\Concerns\Exportable;

class LaporanExport implements FromView
{
    use Exportable;

    function __construct($data, $range) {
        $this->data = $data;
        $this->start = $range['start'];
        $this->end = $range['end'];
    }

    public function view(): View
    {
        return view('adminowner.laporan.excel', [
            'data' => $this->data ,
            'start' => $this->start,
            'end' => $this->end
        ]);
    }
}
