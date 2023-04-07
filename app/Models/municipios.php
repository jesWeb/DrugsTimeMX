<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class municipios extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'estado_id',
        'clave',
        'nombre',
        'activo',
    ];
    protected $table = 'municipios';
}
