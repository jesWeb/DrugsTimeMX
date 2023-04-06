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
   public function registerCreate(Request $request){
       //validaciones|
       session_start();
       $validacion = $request->validate([
           'email' => 'required|min:3',
           'password' => 'required',
       ],[
           'email.required' => 'Es necesario el campo',
           'password.required' => 'Es necesario el campo de fecha',

       ]);

       //guardad base de dsatos
       $email= $request->email;
       $password= $request->password;

       $_SESSION['login'] = 1;
       $_SESSION['email'] = $email;

       Cliente::create([
           'email'=> $email,
           'password'=> bcrypt($password),
           'type_usuarios_id' => 2
        ]);

     //vista
     return redirect()->route("infoCliente");
   }

   public function signup(){
       // Auth::logout();
       session_start();
       session_destroy();
       return redirect()->route('registerAuth');
   }
}
