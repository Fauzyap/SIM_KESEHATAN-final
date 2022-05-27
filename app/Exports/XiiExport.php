<?php

namespace App\Exports;

use App\Models\XII;
use Maatwebsite\Excel\Concerns\FromCollection;

class XiExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return XII::all();
    }
}
