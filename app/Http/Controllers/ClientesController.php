<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    //
     //
     public function index()
     {
         //cosulta DB eloquent laravel
         $clientes = Cliente::all();
         //vista
         return view('cliente.index', compact('clientes'));
     }

     public function info()
     {

         //vista
         return view('cliente.info');
     }


     //registro nuevo



     public function show($id)
     {
         $Mostrarc = cliente::find($id);
         return view('cliente.show', compact('MostrarCliente'));
     }

     public function saveSettingsC(Request $request)
     {
         //dd($request->validate());
         session_start();
         $validacion = $request->validate([
             'nombre' => 'required|min:3',
             'fechaN' => 'required',
             'sexo' => 'required',
             'peso' => 'required',
             'alergias' => 'required',
             'Telefono' => 'required|min:10',
             'enfermedades' => 'required',
             // 'imagenU' => 'required',
         ], [
             'nombre.required' => 'Es necesario el campo',
             'fechaN.required' => 'Es necesario el campo de fecha',
             'sexo.required' => 'Es necesario el campo de sexo no lo dejes vacio ',
             'peso.required' => 'Es necesario el campo de peso no lo dejes vacio ',
             'Telefono.required' => 'Es necesario el campo de telefono no lo dejes vacio ',
             'enfermedades.required' => 'Es necesario el campoenfermedades de  no lo dejes vacio ',
             // 'imagenU.required' => 'Es necesario el campo de imagen no lo dejes vacio ',
         ]);
         //guardar base de datos

         $nombre = $request->nombre;
         $fechaN = $request->fechaN;
         $sexo = $request->sexo;
         $peso = $request->peso;
         $alergias = $request->alergias;
         $Telefono = $request->Telefono;
         $enfermedades = $request->enfermedades;
         //validacion y guardado de imagen
         $imagenU = $request->imagenU;

         $email = $_SESSION['email'];

         $idCliente = Cliente::where('email', $email)->get();
         $cliente =  Cliente::findOrFail($idCliente[0]->idCliente);
         $cliente->nombre = $nombre;
         $cliente->fechaN = $fechaN;
         $cliente->sexo = $sexo;
         $cliente->peso = $peso;
         $cliente->alergias = $alergias;
         $cliente->telefono = $Telefono;
         $cliente->enfermedades = $enfermedades;
         $cliente->imagenU = $imagenU;
         $cliente->save();

         $_SESSION['nombre'] = $nombre;
         //vista de alerta
         return back()->withErrors(['success' => 'Se han guardado correctamente los datos'])->withInput();
         //vista de guardado
         //return redirect()->route('login')->with('success', 'Usuario registrado corretamente');

     }


     public function municipios(Request $request){

            $muniPet = $request->id_muni;
            $Muni = $muniPet[0]->municipios

     }


}
