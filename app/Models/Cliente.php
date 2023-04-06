<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Cliente extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $primaryKey = 'idCliente';

    protected $fillable =[
        'nombre',
        'fechaN',
        'sexo',
        'peso',
        'alergias',
        'telefono',
        'imagenU',
        'enfermedades',
        'email',
        'password',
        'idTUsuariod'
    ];

    //LLAVES FORANEAS RELACION

    public function TipoUsuario(){
        return $this->belongsTo(TipoUsuario::class);
     }
    public function Tratamiento(){
        return $this->belongsTo(Tratamiento::class, 'idCliente', 'idCliente');
    }











}
