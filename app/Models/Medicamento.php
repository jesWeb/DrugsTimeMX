<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Medicamento extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $primaryKey = 'idMedica';

    protected $fillable =[
        'nombre',
        'descripcion',
        'tipo',
        'tratamientos_id',
        'idCliente',

        //'imagenM',
    ];
}
