<?php

namespace App\Exports;

use App\Models\XI;
use Maatwebsite\Excel\Concerns\FromCollection;

class XiExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return XI::all();
    }
}
