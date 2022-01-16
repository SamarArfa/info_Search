<?php

namespace App\Http\Controllers;
//use Barryvdh\DomPDF\PDF;
use App\Models\info;
use PDF;

use Illuminate\Http\Request;
//use PhpOffice\PhpSpreadsheet\Writer\Pdf;

class PDFController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Welcome to Tutsmake.com',
            'date' => date('m/d/Y')
        ];

        $pdf = PDF::loadView('testPDF', $data);

        return $pdf->download('tutsmake.pdf');
    }


    public function show($id)
    {
        $person= new info();

        $person1= $person->where('ssn', 'LIKE', $id)->get();

        $data = [
            'title' => 'Welcome to Tutsmake.com',
            'date' => date('m/d/Y'),
            'child' => $person1
        ];
//dd($id);
        view()->share('child',$data);
        $pdf = PDF::loadView('testPDF', $data);
        // download PDF file with download method
        return $pdf->download('pdf_file.pdf');
//        $pdf = PDF::loadView('testPDF', $data);
//
//        return $pdf->download('tutsmake.pdf');
    }
}
