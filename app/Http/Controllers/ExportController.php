<?php

namespace App\Http\Controllers;

use App\Exports\BlsExport;
use App\Exports\UsersExport;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Excel;

class ExportController extends Controller
{
    private $excel;

    public function __construct(Excel $excel)
    {
        $this->excel = $excel;
    }

    public function exportUsers(Excel $excel)
    {
        // return $this->excel->download(new UsersExport, 'users.xlsx');
        return $excel->download(new UsersExport, 'users.xlsx');
    }

    public function exportBls(Excel $excel)
    {
        return $excel->download(new BlsExport, 'delivery_slip_' . Str::slug(Carbon::now()) . '.xlsx');
    }
}
