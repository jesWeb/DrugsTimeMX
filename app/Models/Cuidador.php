<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Cuidador extends Model
{

    use HasFactory;
    use SoftDeletes;

    protected $table = 'cuidadores';

    protected $fillable =[
        'nombre',
        'fechaN',
        'sexo',
        'parentesco',
        'lugarTrabajo',
        'matricula',
        'Telefono',
        'email',
        // 'idTratamiento',
        'idCliente'
    ];
}
