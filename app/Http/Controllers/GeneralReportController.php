<?php

namespace App\Http\Controllers;

use App\Exports\GeneralReportExport;
use Maatwebsite\Excel\Facades\Excel;

class GeneralReportController extends Controller
{
    public function index() 
    {
        return Excel::download(new  GeneralReportExport, 'general-report.xlsx');
    }
}
