<?php

namespace App\Http\Controllers;
use App\Exports\MedicamentosExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class ReportesController extends Controller
{
    //

      // excell
      public function ReporteCliente()
      {
    //    return view('Cliente.reportes');
       return Excel::download(new MedicamentosExport, 'medicametos.xlsx');
    }

    public function Tureporte()
    {
      return view('Cliente.reportes');
    //  return Excel::download(new MedicamentosExport, 'medicametos.xlsx');
  }







}
