<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;

class AuthController extends Controller
{
    //vista principal
    public function index()
    {
        //vista
        return view('logeo.login');
    }

    //registro nuevo
    public function create()
    {
        //vista
        return view('logeo.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //registro nuevo

    //
    public function registerCreate(Request $request)
    {
        //validaciones|
        session_start();
        $validacion = $request->validate([
            'email' => 'required|min:10',
            'password' => 'required',
        ], [
            'email.required' => 'Es necesario el campo',
            'password.required' => 'Es necesario el campo de fecha',

        ]);

        //guardad base de dsatos
        $email = $request->email;
        $password = $request->password;

        $_SESSION['login'] = 1;
        $_SESSION['email'] = $email;

        Cliente::create([
            'email' => $email,
            'password' => bcrypt($password),
            'idTUsuario' => 2
        ]);

        //vista
        return redirect()->route("infoCliente");
    }

    public function signup()
    {
        // Auth::logout();
        session_start();
        session_destroy();
        return redirect()->route('registerAuth');
    }

    //reingreso
    public function Reingreso(Request $request)
    {

        $validacion = $request->validate([
            'email' => 'required',
            'pass' => 'required',
        ], [
            'email.required' => 'Es necesario el campo',
            'pass.required' => 'Es necesario el campo de fecha',

        ]);

        $email = $request->email;
        $password = $request->pass;
        //consulta de validacion para accesos
        $consultaC = Cliente::where('idTUsuario', '=', 2)->where('email', '=', $email)->get();
        //dd($consultaC);
        if (count($consultaC) > 0) {
            $password_user = password_verify($password, $consultaC[0]->password);
            if ($password_user) {
                if ($consultaC[0]->sexo == 'Masculino') {
                    session_start();
                    $_SESSION['login'] = 1; //llave de acceso
                    $_SESSION['nombre'] = $consultaC[0]->nombre;
                    $_SESSION['email'] = $consultaC[0]->email;
                    $_SESSION['idTUsuario'] = $consultaC[0]->idTUsuario;
                    $_SESSION['img'] = 'user.png';
                    return redirect()->route('infoCliente');
                } else {
                    session_start();
                    $_SESSION['login'] = 1; //llave de acceso
                    $_SESSION['nombre'] = $consultaC[0]->nombre;
                    $_SESSION['email'] = $consultaC[0]->email;
                    $_SESSION['idTUsuario'] = $consultaC[0]->idTUsuario;
                    $_SESSION['img'] = 'user2.png';
                    return redirect()->route('infoCliente');
                }
            }
        }else{
            $consultaA = Cliente::where('idTUsuario', '=', 1)->where('email', '=', $email)->get();
            if (count($consultaA) > 0) {
                $password_Admin = password_verify($password, $consultaA[0]->password);
                if ($password_Admin) {
                    if ($consultaA[0]->sexo == 'Masculino') {
                        session_start();
                        $_SESSION['login'] = 2; //llave de acceso
                        $_SESSION['nombre'] = $consultaA[0]->nombre;
                        $_SESSION['email'] = $consultaA[0]->email;
                        $_SESSION['idTUsuario'] = $consultaA[0]->idTUsuario;
                        $_SESSION['img'] = 'user.png';
                        return redirect()->route('registerAuth');
                    } else {
                        session_start();
                        $_SESSION['login'] = 2; //llave de acceso
                        $_SESSION['nombre'] = $consultaA[0]->nombre;
                        $_SESSION['email'] = $consultaA[0]->email;
                        $_SESSION['idTUsuario'] = $consultaA[0]->idTUsuario;
                        $_SESSION['img'] = 'user2.png';
                        return redirect()->route('registerAuth');
                    }
                }
            }
        }
    }
}
