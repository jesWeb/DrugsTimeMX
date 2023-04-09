<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Tratamiento extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $primaryKey = 'idTratamiento';

    protected $fillable =[
        'nombre',
        'dosis',
        'horario',
        'dias',
        'idCliente'
    ];


    //relacion uno a uno
    public function medicamento(){
        return $this->belongsTo(Medicamento::class, 'idTratamiento', 'tratamientos_id');
    }
}
