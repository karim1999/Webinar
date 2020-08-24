<?php

namespace App\Exports;

use App\Message;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class MessageExport implements FromCollection, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Message::all();
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
            $row->message,
            $row->guest_id,
            $row->guest->name,
            $row->created_at,
        ];
    }
}
