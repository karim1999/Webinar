<?php

namespace App\Exports;

use App\Question;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class QuestionExport implements FromCollection, WithMapping

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Question::all();
    }

    /**
     * @param mixed $row
     *
     * @return array
     */
    public function map($row): array
    {
        $answers= $row->answers;
        $value= "";
        foreach ($answers as $answer){
            $value.= $answer->answer."\n , \n\n  \n";
        }
        return [
            $row->id,
            $row->question,
            $value,
            $row->created_at,
        ];
    }
}
