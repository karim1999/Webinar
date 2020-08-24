<?php

namespace App\Exports;

use App\Resource;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class ResourceExport implements FromCollection, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Resource::all();
    }

    /**
     * @param mixed $row
     *
     * @return array
     */
    public function map($row): array
    {
        return [
            $row->id,
            $row->name,
            $row->getFirstMediaUrl('file'),
            $row->created_at,
        ];
    }
}
