<?php

namespace App\Imports;

use App\Models\XI;
use Maatwebsite\Excel\Concerns\ToModel;


class XiImport implements ToModel
{
   
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new XI([
            'nis'=> $row[0],
            'nama'=> $row[1],
            'JK' => $row[2],
            'rombel'=> $row[3],
            'rayon'=> $row[4]
        ]);
    }
}
