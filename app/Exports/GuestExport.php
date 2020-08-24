<?php

namespace App\Exports;

use App\Guest;
use Maatwebsite\Excel\Concerns\FromCollection;

class GuestExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Guest::all();
    }
}
