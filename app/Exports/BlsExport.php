<?php

namespace App\Exports;

use App\Bl;
use Maatwebsite\Excel\Concerns\FromCollection;

class BlsExport implements FromCollection
{
    public function collection()
    {
        return Bl::all();
    }
}
