<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Cuidador;
use Illuminate\Http\Request;

class CuidadorController extends Controller
{
    //

    public function index()
    {
        //cosulta DB eloquent laravel
        $cuidadores = Cuidador::all();
        //vista
        return view('Cliente.cuidador',compact('cuidadores'));

     }

     public function CAdd()
     {
         //vista de formulario
         return view('Cliente.cuidadorAdd');
     }


     public function cuidadorCreate(Request $request){
        session_start();
        $validacion = $request->validate([
            'nombre' => 'required|min:3',
            'fechaN' => 'required',
            'sexo' => 'required',
            'parentesco' => 'required',
            'matricula' => 'required',
            'Telefono' => 'required|min:10',
            'lugarTrabajo' => 'required',
            'email' => 'required',
            // 'imagenU' => 'required',
        ], [
            'nombre.required' => 'Es necesario el campo',
            'fechaN.required' => 'Es necesario el campo de fecha',
            'sexo.required' => 'Es necesario el campo de sexo no lo dejes vacio ',
            'parentesco.required' => 'Es necesario el campo de peso no lo dejes vacio ',
            'Telefono.required' => 'Es necesario el campo de telefono no lo dejes vacio ',
            'lugarTrabajo.required' => 'Es necesario el campoenfermedades de  no lo dejes vacio ',
            'email' => 'Es necesario el campo de imagen no lo dejes vacio ',
        ]);

         //guardar base de datos

         $nombre = $request->nombre;
         $fechaN = $request->fechaN;
         $sexo = $request-> sexo;
         $parentesco = $request->parentesco;
         $matricula = $request->matricula;
         $Telefono = $request->Telefono;
         $lugarTrabajo = $request->lugarTrabajo;
         $email = $request->email;
         $idTratamiento = $request  ->idTratamiento;

         $emailSession = $_SESSION['email'];
         $idCliente = Cliente::where('email', $emailSession)->get();

         Cuidador::create([

         'nombre' => $nombre,
         'fechaN' => $fechaN,
         'sexo' => $sexo,
         'parentesco' => $parentesco,
         'matricula' => $matricula,
         'Telefono' => $Telefono,
         'lugarTrabajo' => $lugarTrabajo,
         'email' => $email,
         'idCliente' => $idCliente[0]->idCliente,
         'idTratamiento' => $idTratamiento,

         ]);
         //vista de alerta
         return back()->withErrors(['success' => 'Se han guardado correctamente los datos'])->withInput();
     }

      //eliminacion
    public function cuidadordelate($id)
    {
        //ELIMINAR
        $cuidado = Cuidador::findOrFail($id);
        $cuidado ->delete();
        return "El resgistro se elimino con exito";
    }


}
