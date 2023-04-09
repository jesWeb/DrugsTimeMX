<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Medicamento;
use App\Models\Tratamiento;
use Illuminate\Http\Request;

class medicamentosController extends Controller
{
    //

    public function viewMedicamento()
    {
          //cosulta DB eloquent laravel
          $medicamentos = Medicamento::all('nombre','tipo','descripcion');
         //vista
         return view('Cliente.medicamentos',compact('medicamentos'));

     }

     public function MediAdd()
     {
        //vistaForm
        $recomendacion = Tratamiento::all();
         return view('Cliente.MedicamentoAdd', compact('recomendacion'));
     }


     public function createMedicamento(Request $request){
        session_start();
        $validacion = $request->validate([
            'nombre' => 'required|min:10',
            'descripcion' => 'required',
            'tipo' => 'required',
            'idTratamiento' => 'required',
        ], [
            'nombre.required' => 'Es necesario el campo',
            'descripcion.required' => 'Es necesario el campo de fecha',
            'tipo.required' => 'Es necesario el campo de sexo no lo dejes vacio ',
            'idTratamiento.required' => 'Es necesario el campo de peso no lo dejes vacio ',
        ]);

         //guardar base de datos

         $nombre = $request->nombre;
         $descripcion = $request->descripcion;
         $tipo = $request-> tipo;
         $idTratamiento = $request->idTratamiento;


         $email = $_SESSION['email'];
         $idCliente = Cliente::where('email', $email)->get();

         Medicamento::create([

         'nombre' => $nombre,
         'descripcion' => $descripcion,
         'tipo' => $tipo,
         'tratamientos_id' => $idTratamiento,
         'idCliente' => $idCliente[0]->idCliente,

         ]);
         //vista de alerta
         return back()->withErrors(['success' => 'Se han guardado correctamente los datos'])->withInput();
     }

      //eliminacion
    public function delateMedicamento($id)
    {
        //ELIMINAR
        $medicamento = Medicamento::findOrFail($id);
        $medicamento ->delete();
        return "El resgistro se elimino con exito";
    }



















}
