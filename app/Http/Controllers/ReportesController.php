<?php

namespace App\Http\Controllers;

use App\Exports\MedicamentosExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class ReportesController extends Controller
{
    //vista
    public function Tureporte()
    {
        return view('Cliente.reportes');
        //  return Excel::download(new MedicamentosExport, 'medicametos.xlsx');
    }

    // excell
    public function ReporteCliente()
    {
        //    return view('Cliente.reportes');
        return Excel::download(new MedicamentosExport, 'medicametos.xlsx');
    }

    //pdf

    public function reportePDF()
    {

        return Excel::download(new MedicamentosExport, 'medicamentos.pdf', \Maatwebsite\Excel\Excel::DOMPDF);

    }

}
