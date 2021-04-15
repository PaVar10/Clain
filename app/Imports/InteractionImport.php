<?php

namespace App\Imports;

use App\Interaction;
use Maatwebsite\Excel\Concerns\ToModel;

class InteractionImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Interaction([
            'interaction'     => $row[0],
            'conduct'    => $row[1] ,
            //'conversation_id'=>$row[2]
            'conversation_id'=>2 
        ]);
    }
}
