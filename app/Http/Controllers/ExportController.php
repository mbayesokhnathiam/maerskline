<?php

namespace App\Http\Controllers;

use App\Exports\BlsExport;
use App\Exports\UsersExport;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Excel;
use Request;

class ExportController extends Controller
{
    private $excel;

    public function __construct(Excel $excel)
    {
        $this->excel = $excel;
    }

    public function exportUsers(Excel $excel)
    {
        return $excel->download(new UsersExport, 'users.xlsx');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function exportBls(Excel $excel, $startDate = '', $endDate = '')
    {
        if (!empty($startDate) && !empty($endDate)) {
            return (new BlsExport($startDate, $endDate))->download('delivery_slip_' . Str::slug(Carbon::now()) . '.xlsx');
        }

        return $excel->download(new BlsExport, 'delivery_slip_' . Str::slug(Carbon::now()) . '.xlsx');
    }
}
