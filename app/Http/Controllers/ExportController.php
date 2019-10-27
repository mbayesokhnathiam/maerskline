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
    private $request;

    public function __construct(Excel $excel, Request $request)
    {
        $this->excel = $excel;
        $this->request = $request;
    }

    public function exportUsers(Excel $excel)
    {
        // return $this->excel->download(new UsersExport, 'users.xlsx');
        return $excel->download(new UsersExport, 'users.xlsx');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function exportBls(Excel $excel, Request $request)
    {
        // dd($request);
        return $excel->download(new BlsExport, 'delivery_slip_' . Str::slug(Carbon::now()) . '.xlsx');
    }
}
