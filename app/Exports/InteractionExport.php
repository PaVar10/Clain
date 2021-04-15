<?php

namespace App\Exports;

use App\Interaction;
use Maatwebsite\Excel\Concerns\FromCollection;

class InteractionExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Interaction::all();
    }
}
