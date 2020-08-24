<?php

namespace App\Exports;

use App\Poll;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class PollExport implements FromCollection, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Poll::all();
    }

    /**
     * @param mixed $row
     *
     * @return array
     */
    public function map($row): array
    {
        $options= $row->options;
        $value= "";
        foreach ($options as $option){
            $value.= $option->option.": ".$option->votes."\n , \n";
        }
        return [
            $row->id,
            $row->question,
            $value,
            $row->created_at,
        ];
    }
}
