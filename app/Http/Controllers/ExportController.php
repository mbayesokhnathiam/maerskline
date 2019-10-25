<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use Maatwebsite\Excel\Excel;
use Illuminate\Http\Request;

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
}
