<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Maquina;
use Illuminate\Http\Request;

class ClientesApiController extends Controller
{
    //REgistro de maquinaria
    public function registroMaquinaria($tempreatura, $humedad){
        session_start();
        $idCliente = $_SESSION['idCliente'];
        Maquina::create([
            'temperatura' =>$tempreatura,
            'humedad' => $humedad,
            'idCliente' =>$idCliente,
        ]);
    }
}
