<?php

namespace App\Exports;

use App\Speaker;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class SpeakerExport implements FromCollection, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Speaker::all();
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
            $row->description,
            $row->getFirstMediaUrl('image'),
            $row->created_at,
        ];
    }
}
