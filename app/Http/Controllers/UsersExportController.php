<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UsersExportController extends Controller
{
    public function export(Request $request){
        return Excel::download(new UsersExport($request),'users.xlsx');
    }
}
