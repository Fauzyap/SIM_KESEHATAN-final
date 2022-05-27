<?php

namespace App\Exports;

use App\Models\X;
use Maatwebsite\Excel\Concerns\FromCollection;

class XExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return X::all();
    }
}
