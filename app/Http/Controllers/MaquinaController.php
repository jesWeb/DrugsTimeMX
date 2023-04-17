<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Maquina;
use Illuminate\Http\Request;

class MaquinaController extends Controller
{
    public function maquinasW()
    {
        //cosulta DB eloquent laravel
        $maquinas = Maquina::all();
        //vista
        return view('Cliente.maquinas',compact('maquinas'));

     }

     public function MaquiAdd()
     {
         //vista de formulario
         return view('Cliente.maquinasAdd');
     }


     public function  createMaqui(Request $request){
        session_start();
        // $validacion = $request->validate([
        //     // 'nombre' => 'required|min:3',
        //     'fechaN' => 'required',
        //     'sexo' => 'required',
        //     'parentesco' => 'required',

        //     // 'imagenU' => 'required',
        // ], [
        //     'nombre.required' => 'Es necesario el campo',
        //     'fechaN.required' => 'Es necesario el campo de fecha',
        //     'sexo.required' => 'Es necesario el campo de sexo no lo dejes vacio ',
        //     'parentesco.required' => 'Es necesario el campo de peso no lo dejes vacio ',
        //     'Telefono.required' => 'Es necesario el campo de telefono no lo dejes vacio ',
        //     'lugarTrabajo.required' => 'Es necesario el campoenfermedades de  no lo dejes vacio ',
        //     'email' => 'Es necesario el campo de imagen no lo dejes vacio ',
        // ]);

         //guardar base de datos

         $temperatura = $request->temperatura;
         $humedad = $request->humedad;


         $email = $request->email;
        //  $idTratamiento = $request  ->idTratamiento;

         $email = $_SESSION['email'];
         $idCliente = Cliente::where('email', $email)->get();

         Maquina::create([

         'temperatura' => $temperatura,
         'humedad' => $humedad,


         'idCliente' => $idCliente[0]->idCliente,
        //  'idTratamiento' => $idTratamiento,

         ]);
         //vista de alerta
        //  return back()->withErrors(['success' => 'Se han guardado correctamente los datos'])->withInput();
     }

      //eliminacion
    public function delateMaqui($id)
    {
        //ELIMINAR
        $cuidado = Maquina::findOrFail($id);
        $cuidado ->delete();
        return "El resgistro se elimino con exito";
    }
    //
























}
