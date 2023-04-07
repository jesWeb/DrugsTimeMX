<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estados extends Model
{
    use HasFactory;
    protected $primaryKey = 'idEstados';
    protected $fillable = [
        'idEstados',
        'clave',
        'nombre',
        'abrev',
        'activo',
    ];
    protected $table = 'estados';
}
