<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Maquina extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable =[
        // 'nombre',
        'temperatura',
        'humedad',
        'idCliente'
    ];
}
