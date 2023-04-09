<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Tratamiento;
use Illuminate\Http\Request;

class TratamientoController extends Controller
{
    //
    public function index()
     {
        //cosulta DB eloquent laravel
         $recomendacion = Tratamiento::all();
          //vista
          return view('Cliente.tratamientos', compact('recomendacion'));

      }


      public function TrataC()
      {
          //vista de formulario
          return view('Cliente.TratamientoAdd');
      }

      public function TratamientoCreate(Request $request){
        session_start();
        $validacion = $request->validate([
            'nombre' => 'required|min:20',
            'dosis' => 'required',
            'horario' => 'required',
            'dias' => 'required',
        ], [
            'nombre.required' => 'Es necesario el campo',
            'dosis.required' => 'Es necesario el campo de fecha',
            'horario.required' => 'Es necesario el campo de sexo no lo dejes vacio ',
            'dias.required' => 'Es necesario el campo de peso no lo dejes vacio ',
        ]);

        //guardar en base de datos

        $nombre = $request->nombre;
        $dosis = $request->dosis;
        $horario = $request-> horario;
        $dias = $request->dias;
        $email = $_SESSION['email'];
        $idCliente = Cliente::where('email', $email)->get();

        Tratamiento::create([

            'nombre' => $nombre,
            'dosis' => $dosis,
            'horario' => $horario,
            'dias' => $dias,
            'idCliente' => $idCliente[0]->idCliente,
         //   'idCliente' => $idCliente[0]->idCliente,
     ]);
       //vista de alerta
       return back()->withErrors(['success' => 'Se han guardado correctamente los datos'])->withInput();

    }

        //eliminacion
        public function Tratamientodelate($id)
        {
            //ELIMINAR
            $recomend = Tratamiento::findOrFail($id);
            $recomend ->delete();
            return "El resgistro se elimino con exito";
        }



}
